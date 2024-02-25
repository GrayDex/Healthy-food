<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

// [PREVIEW_TEXT] => Пломбир с фруктовым наполнителем «Клубника» в вафельном сахарном рожке с шоколадной глазурью
// [SRC] => /upload/iblock/9ad/x59qotwprb1geng00oiir9p0d4dk742x.webp
// [NAME] => Семыч
//echo "<pre>" . print_r($arResult, 1) . "</pre>"
?>

<?php if ($arResult['ITEMS']): ?>

	<?php
	foreach ($arResult['ITEMS'] as $arItem): ?>
		<div class="swiper-slide main-slider__slide">
			<div class="main-slider__slide-bg desktop" data-swiper-parallax="1440" data-bg-parallax>
				<picture class="picture">
					<source type="image/webp" srcset="/main/assets/images/main-slider-bg1.png<?php /*= $arItem['PREVIEW_PICTURE']['SRC']*/?>">
								<img class="picture__img" src="/main/assets/images/main-slider-bg1.png">
				</picture>
			</div>
			<div class="main-slider__slide-bg devices">
				<picture class="picture">
					<source type="image/webp" srcset="/main/assets/images/main-slider-bg1.png<?php /*= $arItem['PREVIEW_PICTURE']['SRC'] */?>">
					<img class="picture__img" src="/main/assets/images/main-slider-bg1.png">
				</picture>
			</div>
			<div class="main-slider__content">
				<div class="main-slider__content-icon" data-swiper-parallax="-500">
					<svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewbox="0 0 100 70"
					     fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd"
						      d="M64.9611 55.5543C74.8868 52.8948 80.3835 42.7588 78.1227 32.7263C77.3455 29.2617 75.7017 24.3778 72.2942 20.1885C71.29 18.9538 69.3371 19.6082 68.6091 21.0235C67.9862 22.2343 67.1442 23.3313 66.1153 24.2542C66.1153 24.2542 63.5984 10.0504 52.4261 7.91525C51.1122 7.66415 50.1206 8.95836 50.1507 10.2957C50.2379 14.1793 48.2994 18.0467 46.2302 22.1745C45.5441 23.5433 44.8437 24.9407 44.198 26.3768C42.6776 22.0257 39.0831 14.9813 31.4788 13.5281C30.1649 13.277 29.1734 14.5712 29.2034 15.9085C29.2907 19.7921 27.3521 23.6595 25.283 27.7874C22.3135 33.7112 19.0752 40.1717 21.1692 47.9869C21.8032 50.3527 22.897 52.5704 24.3883 54.5134C25.8796 56.4563 27.7392 58.0863 29.8607 59.3103C31.9822 60.5343 34.3241 61.3283 36.7525 61.6469C39.181 61.9655 41.6484 61.8025 44.0139 61.1671C47.9374 60.1158 51.1689 57.8963 53.5027 54.9767C54.8528 55.4897 56.2611 55.8453 57.6998 56.0341C60.1282 56.3527 62.5957 56.1897 64.9611 55.5543Z"
						      fill="#F64653"></path>
						<path d="M38.3211 33.8358L39.2555 37.3229L35.5133 38.3256L38.4531 49.2971L34.6683 50.3112L31.7285 39.3397L28.0076 40.3367L27.0733 36.8497L38.3211 33.8358Z"
						      fill="#FFE979"></path>
						<path d="M55.4281 42.8115C54.3621 44.6164 52.6809 45.8266 50.3845 46.4419C48.0882 47.0572 46.0272 46.8498 44.2015 45.8197C42.3758 44.7896 41.1687 43.176 40.5799 40.9789C39.9874 38.7676 40.2261 36.7666 41.2959 34.9758C42.3619 33.1709 44.0431 31.9608 46.3395 31.3455C48.65 30.7264 50.711 30.9338 52.5225 31.9677C54.3444 32.9836 55.5516 34.5972 56.1441 36.8085C56.7328 39.0056 56.4941 41.0066 55.4281 42.8115ZM49.4673 43.0186C50.6722 42.6958 51.5174 42.0515 52.0031 41.0857C52.4888 40.12 52.5721 39.0418 52.253 37.8511C51.9302 36.6462 51.3189 35.7541 50.4193 35.1748C49.5158 34.5812 48.4616 34.4459 47.2567 34.7688C46.0519 35.0916 45.2066 35.7359 44.7209 36.7016C44.2314 37.6532 44.1481 38.7314 44.471 39.9363C44.79 41.127 45.4013 42.0191 46.3048 42.6126C47.2224 43.2023 48.2766 43.3376 49.4673 43.0186Z"
						      fill="#FFE979"></path>
						<path d="M59.9268 43.5432L56.0527 29.0847L61.9211 27.5122C63.4379 27.1058 64.7983 27.2503 66.0025 27.9455C67.2029 28.6266 67.9949 29.6829 68.3786 31.1146C68.7584 32.5321 68.5969 33.8288 67.894 35.0046C67.1874 36.1663 66.0686 36.9523 64.5377 37.3625L62.4753 37.9151L63.7116 42.5291L59.9268 43.5432ZM61.6378 34.7895L63.1049 34.3964C63.7427 34.2255 64.1829 33.9404 64.4254 33.5412C64.6782 33.124 64.7325 32.6461 64.5881 32.1075C64.4438 31.5688 64.1598 31.1891 63.736 30.9685C63.3084 30.7336 62.7828 30.6997 62.1591 30.8668L60.692 31.2599L61.6378 34.7895Z"
						      fill="#FFE979"></path>
					</svg>
				</div>
				<div class="main-slider__content-title" data-swiper-parallax="-1000"><?= $arItem['NAME'] ?></div>
				<div class="main-slider__content-desk"
				     data-swiper-parallax="-2000"><?= $arItem['PREVIEW_TEXT'] ?>
				</div>
				<div class="main-slider__content-bot" data-swiper-parallax="-2500">
					<a class="main-slider__content-button btn-hover_parent" href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
						<div class="btn-hover_circle white"></div>
						<p>Подробнее</p>
					</a>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
<?php endif; ?>
<!--
<div class="news-list">
<?php /*if($arParams["DISPLAY_TOP_PAGER"]):*/ ?>
	<?php /*=$arResult["NAV_STRING"]*/ ?><br />
<?php /*endif;*/ ?>
<?php /*foreach($arResult["ITEMS"] as $arItem):*/ ?>
	<?php /*
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	*/ ?>
	<p class="news-item" id="<?php /*=$this->GetEditAreaId($arItem['ID']);*/ ?>">
		<?php /*if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):*/ ?>
			<?php /*if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):*/ ?>
				<a href="<?php /*=$arItem["DETAIL_PAGE_URL"]*/ ?>"><img
						class="preview_picture"
						border="0"
						src="<?php /*=$arItem["PREVIEW_PICTURE"]["SRC"]*/ ?>"
						width="<?php /*=$arItem["PREVIEW_PICTURE"]["WIDTH"]*/ ?>"
						height="<?php /*=$arItem["PREVIEW_PICTURE"]["HEIGHT"]*/ ?>"
						alt="<?php /*=$arItem["PREVIEW_PICTURE"]["ALT"]*/ ?>"
						title="<?php /*=$arItem["PREVIEW_PICTURE"]["TITLE"]*/ ?>"
						style="float:left"
						/></a>
			<?php /*else:*/ ?>
				<img
					class="preview_picture"
					border="0"
					src="<?php /*=$arItem["PREVIEW_PICTURE"]["SRC"]*/ ?>"
					width="<?php /*=$arItem["PREVIEW_PICTURE"]["WIDTH"]*/ ?>"
					height="<?php /*=$arItem["PREVIEW_PICTURE"]["HEIGHT"]*/ ?>"
					alt="<?php /*=$arItem["PREVIEW_PICTURE"]["ALT"]*/ ?>"
					title="<?php /*=$arItem["PREVIEW_PICTURE"]["TITLE"]*/ ?>"
					style="float:left"
					/>
			<?php /*endif;*/ ?>
		<?php /*endif*/ ?>
		<?php /*if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):*/ ?>
			<span class="news-date-time"><?php /*echo $arItem["DISPLAY_ACTIVE_FROM"]*/ ?></span>
		<?php /*endif*/ ?>
		<?php /*if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):*/ ?>
			<?php /*if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):*/ ?>
				<a href="<?php /*echo $arItem["DETAIL_PAGE_URL"]*/ ?>"><b><?php /*echo $arItem["NAME"]*/ ?></b></a><br />
			<?php /*else:*/ ?>
				<b><?php /*echo $arItem["NAME"]*/ ?></b><br />
			<?php /*endif;*/ ?>
		<?php /*endif;*/ ?>
		<?php /*if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):*/ ?>
			<?php /*echo $arItem["PREVIEW_TEXT"];*/ ?>
		<?php /*endif;*/ ?>
		<?php /*if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):*/ ?>
			<div style="clear:both"></div>
		<?php /*endif*/ ?>
		<?php /*foreach($arItem["FIELDS"] as $code=>$value):*/ ?>
			<small>
			<?php /*=GetMessage("IBLOCK_FIELD_".$code)*/ ?>:&nbsp;<?php /*=$value;*/ ?>
			</small><br />
		<?php /*endforeach;*/ ?>
		<?php /*foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):*/ ?>
			<small>
			<?php /*=$arProperty["NAME"]*/ ?>:&nbsp;
			<?php /*if(is_array($arProperty["DISPLAY_VALUE"])):*/ ?>
				<?php /*=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);*/ ?>
			<?php /*else:*/ ?>
				<?php /*=$arProperty["DISPLAY_VALUE"];*/ ?>
			<?php /*endif*/ ?>
			</small><br />
		<?php /*endforeach;*/ ?>
	</p>
<?php /*endforeach;*/ ?>
<?php /*if($arParams["DISPLAY_BOTTOM_PAGER"]):*/ ?>
	<br /><?php /*=$arResult["NAV_STRING"]*/ ?>
<?php /*endif;*/ ?>
</div>
-->