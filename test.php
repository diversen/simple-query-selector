<?php

include_once "vendor/autoload.php";

// You can ommit the next include is you are using default composer auto-loading
include_once "simpleQuery.php";

use diversen\querySelector;

// Load simple XML document
$xml = simplexml_load_file('test.xml');

// Get all customers as SimpleXML element
$dom = querySelector::getElementsAsDOM($xml, 'customers > customer');
print_r($dom);

// Get all customers as array 
$ary = querySelector::getElementsAsAry($xml, 'customers > customer');
print_r($ary);

// Get first customer as array
$ary = querySelector::getElementsAsAry($xml, 'customer:first-child');
print_r($ary);

// Get first customer's data as array
$ary = querySelector::getElementsAsAry($xml, 'customer:first-child  > data');
print_r($ary);
