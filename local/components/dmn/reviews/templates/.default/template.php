<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

$this->addExternalCss("/otzyvy/reviews.css");

if (!empty($arResult["REVIEWS"])): ?>
    <div class="reviews">
        <h2>Отзывы наших клиентов</h2>
        <?php foreach ($arResult["REVIEWS"] as $review): ?>
            <div class="review">
                <span>
                    <h3><?= htmlspecialchars($review["NAME"]) ?></h3>
                    <p class="date"><?= htmlspecialchars($review["DATE"]) ?></p>
                </span>
                <span>
                    <?php if ($arParams["SHOW_TEXT"] === "Y"): ?> <!--Будем ли показывать текст отзыва-->
                        <p class="text"><?= htmlspecialchars($review["TEXT"]) ?></p>
                    <?php endif; ?>
                    <div class="stars">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <span class="star <?= $i <= $review["RATING"] ? 'filled' : '' ?>"></span>
                        <?php endfor; ?>
                    </div>
                </span>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- <link rel="stylesheet" href="/otzyvy/reviews.css"> -->


<?php else: ?>
    <p class="no-reviews"><?= htmlspecialchars($arResult["MESSAGE"]) ?></p>
<?php endif; ?>