<?php
require_once('page.php');

$page = new FrontPage("Лента магазина");
$page->collectData();
print $page->toHtml();