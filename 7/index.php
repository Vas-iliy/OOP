<?php

error_reporting(-1);
require_once 'classes/Product.php';

function debug ($data) {
    echo "<pre>" . print_r($data, 1) , "</pre>";
}

$book = new Product('Три пидораса', 20, null, 400);

$notebook = new Product('Del', 1000, 'Intel');

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct();