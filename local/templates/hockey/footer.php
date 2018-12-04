</div>


<div class="footer">
    <div class="wrapp footer__wrapp">
        <div class="grid-x grid-padding-x footer__content">
            <div class="small-4 footer__copyright">
                <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/local/include/footer_copyright.php"
                  ),
                  false
                );?>
            </div>
            <div class="footer__socials">
                <div class="footer-socials">
                    <a href="https://vk.com/fhr" target="_blank">
                        <i class="fa fa-vk" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.facebook.com/Russiahockey/" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/russiahockey" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <!-- <a href="https://ok.ru/russiahockey" target="_blank">
                        <i class="fa fa-odnoklassniki" aria-hidden="true"></i>
                    </a> -->
                    <a href="https://www.youtube.com/c/RussiaHockey" target="_blank">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/russiahockey/" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>            </div>
            <div class="small-4">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/local/include/footer_copyright_content.php"
                ),
                false
              );?>
            </div>
        </div>
    </div>
</div>
</div>
<? $instAsst->addJs("/local/templates/hockey/js/app.js"); ?>
</body>
</html>