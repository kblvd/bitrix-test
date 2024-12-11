<?php                               // HEADER СТРОГО НАДО 
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");

// Параметры запроса
$arSelect = [                       // Массив выборки 
    "ID",
    "NAME",
    "PROPERTY_CUSTOMER_NAME",       // Имя клиента
    "PROPERTY_REVIEW_TEXT",         // Текст отзыва
    "PROPERTY_RATING",              // Рейтинг
    "PROPERTY_CREATED_DATE"         // Дата
];
$arFilter = [                       // Фильтр
    "IBLOCK_ID" => "4",             // ID инфоблока
    "ACTIVE" => "Y"
];

$res = CIBlockElement::GetList(
    ["PROPERTY_CREATED_DATE" => "DESC"],        // Сортировка
    $arFilter,                                  // Фильтр
    false,                                      // Группировка
    ["nTopCount" => 5],                         // Количество элементов
    $arSelect                                   // Поля и свойства
);

?>
<link rel="stylesheet" href="/otzyvy/reviews.css">
<?
while ($row = $res->Fetch()) {
    $formattedDate = date("d.m.Y", strtotime($row['PROPERTY_CREATED_DATE_VALUE']));
    $rating = (int) $row['PROPERTY_RATING_VALUE'];
    ?>
    <div class="review">
        <span>
            <h3><?= $row['PROPERTY_CUSTOMER_NAME_VALUE'] ?></h3>
            <div><?= $formattedDate ?></div>
        </span>
        <span>
            <p><?= $row['PROPERTY_REVIEW_TEXT_VALUE'] ?></p>
            <div class="stars">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <span class="star <?= $i <= $rating ? 'filled' : '' ?>"></span>
                <?php endfor; ?>
            </div>
        </span>
    </div>

    <?php
}

// FOOTER СТРОГО НАДО 
?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>