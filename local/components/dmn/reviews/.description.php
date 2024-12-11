<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

$arComponentDescription = [
    "NAME" => "Мой компонент",
    "DESCRIPTION" => "Описание компонента",
    "PATH" => [
        "ID" => "custom_components",
        "NAME" => "Пользовательские компоненты"
    ],
    "PARAMETERS" => [                               // Будем ли показывать текст отзыва
        "SHOW_TEXT" => [
            "PARENT" => "BASE",
            "NAME" => "Показывать текст отзыва",
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
        ],
    ],
];
?>