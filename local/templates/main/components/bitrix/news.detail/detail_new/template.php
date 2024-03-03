<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//dd($arResult);
?>




	<section class="news-detail">
		<div class="news-detail__top">
			<h2 class="news-detail__title"><?= $arResult['NAME']?></h2>
			<div class="title-rombs">
				<div class="title-rombs__item">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
						<path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
						      fill="#F64653"></path>
						<path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
						      fill="#F64653"></path>
						<path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
						      fill="#F64653"></path>
						<path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
						      fill="#F64653"></path>
					</svg>
				</div>
				<div class="title-rombs__item">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
						<path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
						      fill="#F64653"></path>
						<path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
						      fill="#F64653"></path>
						<path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
						      fill="#F64653"></path>
						<path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
						      fill="#F64653"></path>
					</svg>
				</div>
			</div>
		</div>
		<div class="news-detail__time">
			<div class="news-detail__date"><?= $arResult['DISPLAY_ACTIVE_FROM']?></div>
			<div class="news-detail__plug"><?= $arResult['SECTION']['PATH'][0]['NAME']?></div>
		</div>
<div class="news-detail__content" data-aos="fade-up">
	<?= $arResult['DETAIL_TEXT']?>
<!--			<p>Юлия Снегирева, сотрудница частной столичной лаборатории, поделилась рекомендациями по выбору мороженого.-->
<!--				Об этом сообщает "Вечерняя Москва". Прежде всего, тщательно изучите состав, указанный на этикетке. Если-->
<!--				вы планируете приобрести эскимо, то обратите внимание, что он должен содержать не менее 40 процентов-->
<!--				молока, так как этот вид мороженого, согласно словам Снегиревой, относится к подгруппе молочных-->
<!--				продуктов.</p>-->
<!--			<h2>Растительные жиры</h2>-->
<!--			<p>Важно, чтобы в составе мороженого не было растительных жиров. Однако наличие различных стабилизаторов в-->
<!--				составе не стоит вызывать беспокойство, так как они помогают сохранять форму, отмечает эксперт. Как-->
<!--				проверить качество вашей любимой лакомство дома?</p>-->
<!--			<div class="news-detail__img">-->
<!--				<picture class="picture">-->
<!--					<source type="image/webp" srcset="assets/images/main-news-card1.webp">-->
<!--					<img class="picture__img" src="assets/images/main-news-card1.png">-->
<!--				</picture>-->
<!--			</div>-->
<!--			<h2>Как проверить качество любимого всеми лакомства в домашних условиях?</h2>-->
<!--			<p>Как проверить качество любимого всеми лакомства в домашних условиях? Вынутое из морозильной камеры-->
<!--				закаленное мороженое должно откалываться, а не размазываться. Если мороженое покрыто кристалликами льда,-->
<!--				то его, скорее всего, замораживали повторно или неправильно хранили в магазине. Вкус у него будет не-->
<!--				самый лучший. Не рекомендуется также покупать мороженое с деформированной упаковкой или с-->
<!--				заканчивающимся сроком годности, если вам не нужно пищевое отравление.</p>-->
<!--			<ul>-->
<!--				<li>Вынутое из морозильной камеры закаленное мороженое должно откалываться, а не размазываться</li>-->
<!--				<li>Если мороженое покрыто кристалликами льда, то его, скорее всего, замораживали повторно или-->
<!--					неправильно хранили в магазине-->
<!--				</li>-->
<!--				<li>Вкус у него будет не самый лучший</li>-->
<!--			</ul>-->
<!--			<h2>Жирное выделение текста</h2>-->
<!--			<p>Важно, чтобы в составе-->
<!--				<strong>мороженого не было растительных</strong>жиров. Однако наличие различных-->
<!--				стабилизаторов в составе не стоит вызывать беспокойство, так как они помогают сохранять форму, отмечает-->
<!--				эксперт. Как проверить качество вашей любимой лакомство дома?</p>-->
<!--			<ol>-->
<!--				<li>Вынутое из морозильной камеры закаленное мороженое должно откалываться, а не размазываться</li>-->
<!--				<li>Если мороженое покрыто кристалликами льда, то его, скорее всего, замораживали повторно или-->
<!--					неправильно хранили в магазине-->
<!--				</li>-->
<!--				<li>Вкус у него будет не самый лучший</li>-->
<!--			</ol>-->
<!--			<h2>Курсивное выделение текст</h2>-->
<!--			<p>Важно, чтобы в составе мороженого <em>не было растительных жиров.</em></p>-->
<!--			<h2>Подчеркнутый текст</h2>-->
<!--			<p>Однако наличие-->
<!--				<u>различных стабилизаторов в составе</u>&nbsp;не стоит вызывать беспокойство, так как они-->
<!--				помогают сохранять форму, отмечает эксперт. Как проверить качество вашей любимой лакомство дома?</p>-->
<!--			<div class="news-detail__img">-->
<!--				<picture class="picture">-->
<!--					<source type="image/webp" srcset="assets/images/main-news-card2.webp">-->
<!--					<img class="picture__img" src="assets/images/main-news-card2.png">-->
<!--				</picture>-->
<!--			</div>-->
<!--			<h4>Подпись к фото</h4>-->
</div>
	</section>










<!--<div class="news-detail">-->
<!--	--><?php //if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
<!--		<img-->
<!--			class="detail_picture"-->
<!--			border="0"-->
<!--			src="--><?php //=$arResult["DETAIL_PICTURE"]["SRC"]?><!--"-->
<!--			width="--><?php //=$arResult["DETAIL_PICTURE"]["WIDTH"]?><!--"-->
<!--			height="--><?php //=$arResult["DETAIL_PICTURE"]["HEIGHT"]?><!--"-->
<!--			alt="--><?php //=$arResult["DETAIL_PICTURE"]["ALT"]?><!--"-->
<!--			title="--><?php //=$arResult["DETAIL_PICTURE"]["TITLE"]?><!--"-->
<!--			/>-->
<!--	--><?php //endif?>
<!--	--><?php //if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
<!--		<span class="news-date-time">--><?php //=$arResult["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
<!--	--><?php //endif;?>
<!--	--><?php //if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
<!--		<h3>--><?php //=$arResult["NAME"]?><!--</h3>-->
<!--	--><?php //endif;?>
<!--	--><?php //if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '') !== ''):?>
<!--		<p>--><?php //=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?><!--</p>-->
<!--	--><?php //endif;?>
<!--	--><?php //if($arResult["NAV_RESULT"]):?>
<!--		--><?php //if($arParams["DISPLAY_TOP_PAGER"]):?><!----><?php //=$arResult["NAV_STRING"]?><!--<br />--><?php //endif;?>
<!--		--><?php //echo $arResult["NAV_TEXT"];?>
<!--		--><?php //if($arParams["DISPLAY_BOTTOM_PAGER"]):?><!--<br />--><?php //=$arResult["NAV_STRING"]?><!----><?php //endif;?>
<!--	--><?php //elseif($arResult["DETAIL_TEXT"] <> ''):?>
<!--		--><?php //echo $arResult["DETAIL_TEXT"];?>
<!--	--><?php //else:?>
<!--		--><?php //echo $arResult["PREVIEW_TEXT"];?>
<!--	--><?php //endif?>
<!--	<div style="clear:both"></div>-->
<!--	<br />-->
<!--	--><?php //foreach($arResult["FIELDS"] as $code=>$value):
//		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
//		{
//			?><!----><?php //=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?php //
//			if (!empty($value) && is_array($value))
//			{
//				?><!--<img border="0" src="--><?php //=$value["SRC"]?><!--" width="--><?php //=$value["WIDTH"]?><!--" height="--><?php //=$value["HEIGHT"]?><!--">--><?php //
//			}
//		}
//		else
//		{
//			?><!----><?php //=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?php //=$value;?><!----><?php //
//		}
//		?><!--<br />-->
<!--	--><?php //endforeach;
//	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
<!---->
<!--		--><?php //=$arProperty["NAME"]?><!--:&nbsp;-->
<!--		--><?php //if(is_array($arProperty["DISPLAY_VALUE"])):?>
<!--			--><?php //=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
<!--		--><?php //else:?>
<!--			--><?php //=$arProperty["DISPLAY_VALUE"];?>
<!--		--><?php //endif?>
<!--		<br />-->
<!--	--><?php //endforeach;
//	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
//	{
//		?>
<!--		<div class="news-detail-share">-->
<!--			<noindex>-->
<!--			--><?php //
//			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
//					"HANDLERS" => $arParams["SHARE_HANDLERS"],
//					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
//					"PAGE_TITLE" => $arResult["~NAME"],
//					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
//					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
//					"HIDE" => $arParams["SHARE_HIDE"],
//				),
//				$component,
//				array("HIDE_ICONS" => "Y")
//			);
//			?>
<!--			</noindex>-->
<!--		</div>-->
<!--		--><?php //
//	}
//	?>
<!--</div>-->