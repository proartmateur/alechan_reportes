<?php

include 'acta_cierre.php';

$my_cierre = new ActaCierre(
    "Se cerró",
    array("firma1","firma2"),
    array("---","---","---"),
    array("--2-","-2--","---2")
);

echo $my_cierre->cierre_acta;

$primitives = array(
    "cierre_acta" => "Se cerró desde array",
    "firmas" => array("firma1","firma2"),
    "anexo1" => array("---","---","---"),
    "anexo2" => array("--2-","-2--","---2")
);

$cierre = ActaCierre::fromPrimitives($primitives);

echo "\n".$cierre->cierre_acta;