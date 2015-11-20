<?
$module_id = 'coffeediz.startup';

require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.$module_id.'/include.php');
IncludeModuleLangFile($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.$module_id.'/options.php');

$showRightsTab = true;
//$arSel = array('REFERENCE_ID' => array(1, 3, 5, 7), 'REFERENCE' => array('�������� 1', '�������� 2', '�������� 3', '�������� 4'));

$arTabs = array(
   array(
      'DIV' => 'edit1',
      'TAB' => GetMessage("TAB_1_NAME"),
      'ICON' => '',
      'TITLE' => GetMessage("TAB_1_NAME")
   )
);

$arGroups = array(
	'MAIN' => array('TITLE' => GetMessage("TAB_1_NAME"), 'TAB' => 0)
);

$arOptions = array(
	'TEST_0' => array(
		'GROUP' => 'MAIN',
		'TITLE' => GetMessage("MAIN_LICENSE"),
		'TYPE' => 'STRING',
		'DEFAULT' => 'FREE',
		'SORT' => '0',
		'NOTES' => GetMessage("MAIN_LICENSE_TEXT")
	)
);

/*
����������� ������ CModuleOptions
$module_id - ID ������
$arTabs - ������ ������� � �����������
$arGroups - ������ ����� ����������
$arOptions - ���������� ��� ������, ���������� ���������
$showRightsTab - ���������� ���� �� ���������� ������� � ����������� ���� ������� � ������ ( true / false )
*/

$opt = new CModuleOptions($module_id, $arTabs, $arGroups, $arOptions, $showRightsTab);
$opt->ShowHTML();

?>