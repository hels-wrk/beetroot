<?php

require_once 'jsonToArray.php';

try {
    $products = jsonToArray('productsBase.json');
} catch (Exception $e) {
    echo $e->getMessage();
}
require 'session.php';
require_once 'html.php';



