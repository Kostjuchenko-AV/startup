<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
if (!defined("WIZARD_SITE_ID"))
    return;
if (!defined("WIZARD_SITE_DIR"))
    return;
$path = str_replace("//", "/", WIZARD_ABSOLUTE_PATH . "/site/public/" . LANGUAGE_ID . "/");
$handle = @opendir($path);
if ($handle) {
    while ($file = readdir($handle)) {
        if (in_array($file, array(
            ".",
            "..",
            "bitrix_messages",
            "bitrix_admin",
            "bitrix_php_interface",
            "bitrix_js",
            "bitrix_images",
            "bitrix_themes"
        ))
        ) continue;
        if ($file == 'bitrix_php_interface_init')
            $to = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/' . WIZARD_SITE_ID;
        elseif ($file == 'upload')
            $to = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
        else
            $to = WIZARD_SITE_PATH . "/" . $file;
        CopyDirFiles(
            $path . $file,
            $to,
            $rewrite = true,
            $recursive = true,
            $delete_after_copy = false
        );
    }
}
copy(WIZARD_THEME_ABSOLUTE_PATH . "/favicon.ico", WIZARD_SITE_PATH . "favicon.ico");


$arNewUrlRewrite = array(
    array(
        "CONDITION" => "#^".WIZARD_SITE_DIR."blog/#",
        "RULE" => "",
        "ID" => "bitrix:news",
        "PATH" => WIZARD_SITE_DIR."blog/index.php"
    )
);

foreach ($arNewUrlRewrite as $arUrl)
{
    if (!in_array($arUrl, $arUrlRewrite))
    {
        CUrlRewriter::Add($arUrl);
    }
}

?>