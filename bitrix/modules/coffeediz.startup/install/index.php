<?
global $MESS;
$PathInstall = str_replace("\\", "/", __FILE__);
$PathInstall = substr($PathInstall, 0, strlen($PathInstall)-strlen("/index.php"));
IncludeModuleLangFile($PathInstall."/index.php");
Class coffeediz_startup extends CModule
{
    var $MODULE_ID = "coffeediz.startup";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = "Y";
    function coffeediz_startup()
    {
        $arModuleVersion = array();
        include(dirname(__FILE__)."/version.php");
        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        $this->MODULE_NAME = GetMessage("COFFEEDIZ_INSTALL_NAME_STARTUP");
        $this->MODULE_DESCRIPTION = GetMessage("COFFEEDIZ_INSTALL_DESCRIPTION_STARTUP");
        $this->PARTNER_NAME = GetMessage("SPER_PARTNER_STARTUP");
        $this->PARTNER_URI = GetMessage("PARTNER_URI_STARTUP");
    }
    function InstallDB($install_wizard = true)
    {
        RegisterModule("coffeediz.startup");
        return true;
    }
    function UnInstallDB($arParams = Array())
    {
        UnRegisterModule("coffeediz.startup");
        return true;
    }
    function InstallEvents()
    {
        return true;
    }
    function UnInstallEvents()
    {
        return true;
    }
    function InstallFiles()
    {
        CopyDirFiles(
            $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/components",
            $_SERVER["DOCUMENT_ROOT"]."/local/components/", true, true
        );
        CopyDirFiles(
            $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/old_components",
            $_SERVER["DOCUMENT_ROOT"]."/bitrix/components/", true, true
        );
        return true;
    }
    function InstallPublic()
    {
    }
    function UnInstallFiles()
    {
        DeleteDirFilesEx(
            $_SERVER["DOCUMENT_ROOT"]."/bitrix/components/".$this->MODULE_ID."/"
        );
        return true;
    }
    function DoInstall()
    {
        $this->InstallDB();
        $this->InstallFiles();
    }
    function DoUninstall()
    {
        $this->UnInstallDB();
        $this->UnInstallFiles();
    }
}
?>