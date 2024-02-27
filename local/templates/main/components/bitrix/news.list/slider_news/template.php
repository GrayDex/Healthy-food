<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);
?>

<?php if ($arResult['ITEMS']): ?>
	<?php foreach ($arResult["ITEMS"] as $arItem): ?>
		<a class="swiper-slide main-news__card" <?php if($arItem["PROPERTIES"]["LINK"]["VALUE"]):?> href='["PROPERTIES"]["LINK"]["VALUE"]'> <?php endif; ?>
			<div class="main-news__card-img">
				<picture class="picture">
					<source type="image/webp"
					        srcset="<?= $arItem["PREVIEW_PICTURE"]['SRC'] ?>">
					<img class="picture__img"
					     src="<?= $arItem["PREVIEW_PICTURE"]['SRC'] ?>">
				</picture>
				<span class="main-news__card-plug"><?= $arItem["IBLOCK_NAME"] ?></span>
			</div>
			<p class="main-news__card-date"><?= $arItem['DATE_ACTIVE'] ?></p>
			<p class="main-news__card-title"><?= $arItem["NAME"] ?></p>
		</a>
	<?php endforeach; ?>
<?php endif; ?>