<?php

class ActaFooterGlobal
{
    private $imagen_ini;
    private $pie;
    private $num_acta;
    private $autoridad;

    function __construct(
        $imagen_ini = "",
        $pie = "",
        $num_acta = "",
        $autoridad = ""
    ) {
        $this->imagen_ini = $imagen_ini;
        $this->pie = $pie;
        $this->num_acta = $num_acta;
        $this->autoridad = $autoridad;
    }

    #region Serialization 
    public static function fromPrimitives(array $primitives)
    {   return new self(
            $imagen_ini = $primitives["imagen_ini"],
            $pie = $primitives["pie"],
            $num_acta = $primitives["num_acta"],
            $autoridad = $primitives["autoridad"]
        );
    }
    
    public function toPrimitives()
    {
        $primitives = array(
            'imagen_ini' => $this->imagen_ini,
            'pie' => $this->pie,
            'num_acta' => $this->num_acta,
            'autoridad' => $this->autoridad

        );
        
        return $primitives;
    }
    #endregion
}

