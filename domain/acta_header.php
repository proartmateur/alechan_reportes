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
            $autoridad = $primitives["autoridad"]
        );
    }

    public function toPrimitives()
    {
        $primitives = array(
            'logos' => $this->logos,
            'title' => $this->title,
            'id' => $this->id,
            'date' => $this->date,
            'autoridad' => $this->autoridad
        );
        return $primitives;
    }
    #endregion
}