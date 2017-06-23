<?php defined('INDEX') OR die('Прямой доступ к странице запрещён!');

$alias = $_GET[alias];
$query = "SELECT * FROM wx_pages WHERE page_alias='home' LIMIT 1";
$db->run($query);
$db->row();

$id = $db->data[page_id];
$alias = $db->data[page_alias];
$title = $db->data[page_title];
$h1 = $db->data[page_h1];
$s_desc = $db->data[page_s_desc];
$component = $db->data[page_content];

if (!$id) {
header("HTTP/1.1 404 Not Found");
$component = "ОШИБКА 404! Данной страницы не существует";
}
$db->stop();