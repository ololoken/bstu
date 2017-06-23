<?php defined('INDEX') OR die('������ ������ � �������� ��������!');
/* ��������� �������� */
$alias = $_GET[alias];
$query = "SELECT * FROM pages WHERE page_alias='".$alias."' AND LIMIT 1";
$db->run($query);
$db->row();
// ���������� ����������
$id = $db->data[page_id];
$alias = $db->data[page_alias];
$title = $db->data[page_title];
$h1 = $db->data[page_h1];
$s_desc = $db->data[page_s_desc];
$component = $db->data[page_content];
// ���� �������� �� ����������
if (!$id) {
header("HTTP/1.1 404 Not Found");
$component = "������ 404! ������ �������� �� ����������";
}
$db->stop();