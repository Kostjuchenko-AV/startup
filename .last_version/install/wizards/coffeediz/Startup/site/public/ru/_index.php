<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Startup - ������� � ���������� ������ ��� 1�-������� �������� ��� �������");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "sect",
        "EDIT_TEMPLATE" => "",
        "AREA_FILE_SUFFIX" => "slide_1",
        "AREA_FILE_RECURSIVE" => "Y"
    )
);?>

#SERVICES_CODE#

#PERSONS_CODE#

#PORTFOLIO_CODE#

#WHY_CODE#

#PRICING_CODE#

#BLOG_CODE#

#QUOTES_CODE#

#BRANDS_CODE#

#FEEDBACK_FORM#

#CONTACTS_CODE#

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>