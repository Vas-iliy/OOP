<?php
require_once 'classes/FWrite.php';


$article = new FWrite('1.txt');
$text = $article->readFile();
var_dump($text);

$article->updateFile($text);