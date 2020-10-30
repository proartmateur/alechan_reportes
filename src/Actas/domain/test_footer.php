<?php

namespace Reportes\Actas\Domain;

use \Reportes\Actas\Domain\ValueObject\ActaFooterImagenes;

include 'acta_footer.php';
include __DIR__ . '/ValueObject/ActaFooterImagenes.php';


$imagenes = new ActaFooterImagenes(array("logo.png", "logo2.png"));
$my_footer = new ActaFooter(
    $imagenes,
    "askfasldfjasdj"
);

echo $my_footer->direccion_completa;


$primitives = array(
    "imagenes" => array("logo.png", "logo2.png"),
    "direccion_completa" => "DESDE UN ARRAYll"
);

$footer = ActaFooter::fromPrimitives($primitives);

echo "\n-- $footer->direccion_completa\n";


$my_footer2 = new ActaFooter(
    new ActaFooterImagenes(array("logo.png", "logo2.png")),
    "Para convertir en array"
);


$my_primitives = $my_footer2->toPrimitives();
print_r($my_primitives);

try {
    echo inverso(5) . "\n";

} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}

