<?php

$page = $_GET['page'] ?? 'page1';

echo file_get_contents($page.'.php');

?>