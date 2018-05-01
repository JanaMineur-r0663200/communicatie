<?php

$page = $_GET['page'] ?? 'page1';

$allowed = ['page1','page2'];
$page = (in_array($page, $allowed)) ? $page : 'page1';

echo file_get_contents($page.'.php');

?>