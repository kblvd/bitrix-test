<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Loader;

class ReviewsComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        if (!Loader::includeModule("iblock")) {
            ShowError("Модуль инфоблоков не подключён");
            return;
        }

        // Параметры запроса
        $arSelect = [                       // Массив выборки
            "ID",
            "NAME",
            "PROPERTY_CUSTOMER_NAME",       // Имя клиента
            "PROPERTY_REVIEW_TEXT",         // Текст отзыва
            "PROPERTY_RATING",              // Рейтинг
            "PROPERTY_CREATED_DATE"         // Дата
        ];
        $arSelect = [                       // Фильтр 
            "ID",
            "NAME",
            "PROPERTY_CUSTOMER_NAME",       // Имя клиента
            "PROPERTY_REVIEW_TEXT",         // Текст отзыва
            "PROPERTY_RATING",              // Рейтинг
            "PROPERTY_CREATED_DATE"         // Дата
        ];
        $arFilter = [
            "IBLOCK_ID" => 4,               // ID инфоблока
            "ACTIVE" => "Y"
        ];

        // Запрос к инфоблоку
        $res = CIBlockElement::GetList(
            ["PROPERTY_CREATED_DATE" => "DESC"],        // Сортировка
            $arFilter,                                  // Фильтр
            false,                                      // Группировка
            ["nTopCount" => 5],                         // Количество элементов
            $arSelect                                   // Поля и свойства
        );

        $this->arResult["REVIEWS"] = [];
        while ($row = $res->Fetch()) {
            $this->arResult["REVIEWS"][] = [
                "NAME" => $row["PROPERTY_CUSTOMER_NAME_VALUE"],
                "TEXT" => $row["PROPERTY_REVIEW_TEXT_VALUE"],
                "RATING" => (int) $row["PROPERTY_RATING_VALUE"],
                "DATE" => date("d.m.Y", strtotime($row["PROPERTY_CREATED_DATE_VALUE"]))
            ];
        }

        // Если отзывов нет
        if (empty($this->arResult["REVIEWS"])) {
            $this->arResult["MESSAGE"] = "Нет отзывов";
        }

        $this->includeComponentTemplate();
    }
}

?>