<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Статьи");
?>
  
  <div class="main-about-block" id="scroll-about">
    <div class="main-about-block__decor">
      <img src="<?=SITE_TEMPLATE_PATH; ?>/img/svg/round-decor-big.svg" alt="" class="svg-inject-me">
      <img src="<?=SITE_TEMPLATE_PATH; ?>/img/svg/round-decor-small.svg" alt="" class="svg-inject-me">
    </div>
  
    <?$APPLICATION->IncludeComponent(
      "bitrix:main.include",
      "",
      array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/local/include/main_premium_content.php"
      ),
      false
    );?>
    
  </div>
  
  <div class="main-award-regulations" id="scroll-regulations">
    <div class="wrapp main-award-regulations__wrapp">
      <h3 class="main-award-regulations__title">Регламент премии</h3>
      <button data-src="#award-regulations" class="btn-brown-style main-award-regulations__button">
        Ознакомиться
        <span class="main-award-regulations__button-icon">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
        </span>
      </button>
    </div>
  </div>
  
  <div class="award-regulations" id="award-regulations">
    <h5 class="title title--green award-regulations__title">
      Регламент премии «Герои Хоккея»
      <div class="title__line">
        <img src="<?=SITE_TEMPLATE_PATH; ?>/img/svg/title-line.svg" alt="" class="svg-inject-me">
      </div>
    </h5>
    <div class="award-regulations__content">
      <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        array(
          "AREA_FILE_SHOW" => "file",
          "AREA_FILE_SUFFIX" => "",
          "EDIT_TEMPLATE" => "",
          "PATH" => "/local/include/main_premium_popup.php"
        ),
        false
      );?>
    </div>
    <button data-fancybox-close class="award-regulations__close"></button>
  </div>

<!-- -->
				<?/*$APPLICATION->IncludeComponent("bitrix:news.list", "articles", Array(
					"IBLOCK_TYPE"	=>	"articles",
					"IBLOCK_ID"	=>	"2",
					"NEWS_COUNT"	=>	"5",
					"SORT_BY1"	=>	"ACTIVE_FROM",
					"SORT_ORDER1"	=>	"DESC",
					"SORT_BY2"	=>	"SORT",
					"SORT_ORDER2"	=>	"ASC",
					"FILTER_NAME"	=>	"",
					"FIELD_CODE"	=>	array(
					),
					"PROPERTY_CODE"	=>	array(
						0	=>	"FORUM_MESSAGE_CNT",
						1	=>	"rating",
					),
					"DETAIL_URL"	=>	"/content/articles/#ELEMENT_ID#/",
					"CACHE_TYPE"	=>	"A",
					"CACHE_TIME"	=>	"3600",
					"CACHE_FILTER"	=>	"N",
					"PREVIEW_TRUNCATE_LEN"	=>	"0",
					"ACTIVE_DATE_FORMAT"	=>	"M j, Y, H:m",
					"DISPLAY_PANEL"	=>	"N",
					"SET_TITLE"	=>	"N",
					"INCLUDE_IBLOCK_INTO_CHAIN"	=>	"Y",
					"ADD_SECTIONS_CHAIN"	=>	"Y",
					"HIDE_LINK_WHEN_NO_DETAIL"	=>	"N",
					"PARENT_SECTION"	=>	"",
					"DISPLAY_TOP_PAGER"	=>	"N",
					"DISPLAY_BOTTOM_PAGER"	=>	"N",
					"PAGER_TITLE"	=>	"Статьи",
					"PAGER_SHOW_ALWAYS"	=>	"N",
					"PAGER_TEMPLATE"	=>	"",
					"PAGER_DESC_NUMBERING"	=>	"N",
					"PAGER_DESC_NUMBERING_CACHE_TIME"	=>	"36000",
					"PAGER_SHOW_ALL" => "N",
					"DISPLAY_DATE"	=>	"Y",
					"DISPLAY_NAME"	=>	"Y",
					"DISPLAY_PICTURE"	=>	"N",
					"DISPLAY_PREVIEW_TEXT"	=>	"Y"
					)
					);*/ ?>
				<!-- -->
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"main.news",
						Array(
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "N",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"IBLOCK_TYPE" => "news",
							"IBLOCK_ID" => "3",
							"NEWS_COUNT" => "5",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_ORDER1" => "DESC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => "",
							"FIELD_CODE" => Array("",""),
							"PROPERTY_CODE" => Array("",""),
							"DETAIL_URL" => "/content/news/#SECTION_ID#/#ELEMENT_ID#/",
							"PREVIEW_TRUNCATE_LEN" => "0",
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"DISPLAY_PANEL" => "N",
							"SET_TITLE" => "N",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
							"CACHE_TIME" => "3600",
							"CACHE_FILTER" => "N",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => "",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_SHOW_ALL" => "N",
						)
					);?>
				<!-- -->

<h2>Видео-новости</h2>

<?$APPLICATION->IncludeComponent(
	"bitrix:player",
	"",
	Array(
		"PLAYER_TYPE" => "auto", 
		"USE_PLAYLIST" => "N", 
		"PATH" => "/upload/intro.flv", 
		"WIDTH" => "400", 
		"HEIGHT" => "324", 
		"FULLSCREEN" => "Y", 
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins", 
		"SKIN" => "bitrix.swf", 
		"CONTROLBAR" => "bottom", 
		"WMODE" => "transparent", 
		"HIDE_MENU" => "N", 
		"SHOW_CONTROLS" => "Y", 
		"SHOW_STOP" => "N", 
		"SHOW_DIGITS" => "Y", 
		"CONTROLS_BGCOLOR" => "FFFFFF", 
		"CONTROLS_COLOR" => "000000", 
		"CONTROLS_OVER_COLOR" => "000000", 
		"SCREEN_COLOR" => "000000", 
		"WMODE_WMV" => "window", 
		"AUTOSTART" => "N", 
		"REPEAT" => "N", 
		"VOLUME" => "90", 
		"DISPLAY_CLICK" => "play", 
		"MUTE" => "N", 
		"HIGH_QUALITY" => "Y", 
		"ADVANCED_MODE_SETTINGS" => "N", 
		"BUFFER_LENGTH" => "10", 
		"DOWNLOAD_LINK_TARGET" => "_self" 
	),
false
);?>
  
  <div class="main-contact" id="scroll-contacts">
    <div class="wrapp main-contact__wrapp">
      <h3 class="title title--green main-contact__title">
        Контакты
        <div class="title__line">
          <img src="<?=SITE_TEMPLATE_PATH; ?>/img/svg/title-line.svg" alt="" class="svg-inject-me">
        </div>
      </h3>
      <div class="main-contact__content">
        <div class="main-contact__left">
          <div class="contact-info">
            <div class="contact-info__logo">
              <img src="<?=SITE_TEMPLATE_PATH; ?>/img/svg/hokey-federation-color.svg" alt="Федерация Хоккея России" class="svg-inject-me">
            </div>
            <h4 class="contact-info__title">Пресс-центр<br> Федерации Хоккея России</h4>
            
            <div class="contact-info__content">
              <div class="contact-info__mail">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <a class="" href="mailto:media@fhr.ru">media@fhr.ru</a>
              </div>
              
              <div class="contact-info__phone">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/local/include/main_contact_phone.php"
                  ),
                  false
                );?>
              </div>
              
              <div class="contact-info__address">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/local/include/main_contact_address.php"
                  ),
                  false
                );?>
              </div>
            </div>
          </div>
        </div>
        <div class="main-contact__right">
          <form method="post" class="contact-feedback-form">
            <h4 class="contact-feedback-form__title">Оставить заявку</h4>
            <div class="contact-feedback-form__inputs">
              <div>
                <label for="contact-feedback-name" class="contact-feedback-form__label">Имя</label>
                <input id="contact-feedback-name" name="name" type="text" maxlength="100" required>
              </div>
              <div>
                <label for="contact-feedback-email" class="contact-feedback-form__label">Почта</label>
                <input id="contact-feedback-email" name="email" type="email" maxlength="100" required>
              </div>
            </div>
            <div class="contact-feedback-form__area">
              <label for="contact-feedback-message" class="contact-feedback-form__label">Сообщение</label>
              <textarea name="message" id="contact-feedback-message" required></textarea>
            </div>
            
            <button class="contact-feedback-form__btn">Отправить</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- --><!-- -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>