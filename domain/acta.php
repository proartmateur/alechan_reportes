<?php

class ActaHeader
{
    public $logos;
    public $title;
    public $id;
    public $date;
    public $autoridad;

    function __construct(
        $logos = array(),
        $title = "",
        $id = "",
        $date = "",
        $autoridad = ""
    ) {
        $this->logos = $logos;
        $this->title = $title;
        $this->id = $id;
        $this->date = $date;
        $this->autoridad = $autoridad;
    }

    #region Serialization
    public static function fromPrimitives(array $primitives): ActaHeader
    {
        return new self(
            $logos = $primitives["logos"],
            $title = $primitives["title"],
            $id = $primitives["id"],
            $date = $primitives["date"],
            $autoridad = $primitives["autoridad"],
        );
    }

    public function toPrimitives()
    {
        $primitives = array(
            'logos' => $this->logos,
            'title' => $this->title,
            'id' => $this->id,
            'date' => $this->date,
            'autoridad' => $this->autoridad,
        );
        return $primitives;
    }
    #endregion
}

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