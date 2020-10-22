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
}

class Acta
{
    function __construct()
    {
    }
}

$acta_head = new ActaHeader(
    array([
        "ima1.png",
        "logo.png"
    ]),
    "Titulo del acta",
    "90UK2000",
    "02-02-2020",
    "Aguascalientes"
);

echo "$acta_head->title";
