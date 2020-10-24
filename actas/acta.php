<?php

include 'acta_header.php';

class Acta
{
    function __construct()
    {
    }
}

$acta_head = new ActaHeader(
    array(
        "ima1.png",
        "logo.png"
    ),
    "Titulo del acta",
    "90UK2000",
    "02-02-2020",
    "Aguascalientes"
);

echo "$acta_head->title";
print_r($acta_head->toPrimitives());

$new_acta_head = array
(
    "logos" => array
        (
            "ima1.png",
            "logo.png"
        ),

    "title" => "OTRO Titulo del acta",
    "id" => "7790UK2000",
    "date" => "09-08-2020",
    "autoridad" => "LAS Aguascalientes",
    );

echo "----------------------------------\n";

$pp_acta_h = ActaHeader::fromPrimitives($new_acta_head);

print_r($pp_acta_h->toPrimitives());