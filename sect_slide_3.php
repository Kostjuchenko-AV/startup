<section id="pricing">
    <div class="container">
        <p class="h1 section-title wow fadeIn" data-wow-delay=".2s">����</p>
        <div class="row">
            <?$APPLICATION->IncludeComponent(
                "coffeediz:table.column",
                "pricing",
                array(
                    "COMPONENT_TEMPLATE" => "pricing",
                    "TITLE" => "STARTUP",
                    "STRING" => array(
                        0 => "Bootstrap3",
                        1 => "������ ���������",
                        2 => "4 �������� �����",
                        3 => "������������",
                        4 => "",
                    ),
                    "BUTTON_TEXT" => "����������",
                    "BUTTON_URL" => "http://marketplace.1c-bitrix.ru/solutions/coffeediz.startbootstraplandingpage/",
                    "BLOCK_MD" => "4",
                    "BLOCK_SM" => "4",
                    "PRICE" => "0\$"
                ),
                false
            );?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:table.column",
                "pricing",
                array(
                    "COMPONENT_TEMPLATE" => "pricing",
                    "TITLE" => "��������� <nobr>(1 ���)</nobr>",
                    "STRING" => array(
                        0 => "������ �� �����",
                        1 => "������ ������",
                        2 => "����� 50 �������� �����",
                        3 => "������ ���������",
                        4 => "",
                    ),
                    "BUTTON_TEXT" => "��������",
                    "BUTTON_URL" => "mailto:a@coffeediz.ru",
                    "BLOCK_MD" => "4",
                    "BLOCK_SM" => "4",
                    "PRICE" => "20�"
                ),
                false
            );?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:table.column",
                "pricing",
                array(
                    "COMPONENT_TEMPLATE" => "pricing",
                    "TITLE" => "���������� �����",
                    "STRING" => array(
                        0 => "���������",
                        1 => "������ ��������",
                        2 => "��������� � ������",
                        3 => "��������� \"��� ����\"",
                        4 => "",
                    ),
                    "BUTTON_TEXT" => "��������",
                    "BUTTON_URL" => "mailto:a@coffeediz.ru",
                    "BLOCK_MD" => "4",
                    "BLOCK_SM" => "4",
                    "PRICE" => "5000�"
                ),
                false
            );?>
        </div>
    </div>
</section>