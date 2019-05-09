<?php

$name   = "Phichet Pankarnchanato";
$age    = 47;
$weight = 80.50;

$normal_price = 299;
$sale_price   = 299.0;
$cost_price   = 299;

echo "<pre>";
var_dump($name, $age, $weight);

var_dump($normal_price != $sale_price);
var_dump($normal_price != $cost_price);
var_dump($normal_price === $sale_price);
var_dump($normal_price <=> $sale_price);

echo "</pre>";
