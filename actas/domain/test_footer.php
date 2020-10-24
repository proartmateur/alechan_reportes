<?php

include 'acta_footer.php';

$my_footer = new ActaFooter(
    array("logo.png","logo2.png"),
    "askfasldfjasdj"
);

echo $my_footer->direccion_completa;



$primitives = array(
    "imagenes" => array("logo.png","logo2.png"),
    "direccion_completa" => "DESDE UN ARRAY"
);

$footer = ActaFooter::fromPrimitives($primitives);

echo "--\n".$footer->direccion_completa;



$my_footer2 = new ActaFooter(
    array("logo.png","logo2.png"),
    "Para convertir en array"
);

$my_primitives = $my_footer2->toPrimitives();
print_r($my_primitives);