<?php
require_once 'classes/FWrite.php';

$text = 'Loremlfdldnf';
$article = new FWrite('name.txt');
$article->writeFile($text);