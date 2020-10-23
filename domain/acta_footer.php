<?php

class ActaFooter
{
    private $firmas;
    private $anexo1;
    private $anexo2;

    function __construct(
        $firmas = array(),
        $anexo1 = "",
        $anexo2 = ""
    ) {
        $this->firmas = $firmas;
        $this->anexo1 = $anexo1;
        $this->anexo2 = $anexo2;
    }

    #region Serialization 
    public static function fromPrimitives(array $primitives)
    {   return new self(
            $firmas = $primitives["firmas"],
            $anexo1 = $primitives["anexo1"],
            $anexo2 = $primitives["anexo2"]
        );
    }
    
    public function toPrimitives()
    {
        $primitives = array(
            'firmas' => $this->firmas,
            'anexo1' => $this->anexo1,
            'anexo2' => $this->anexo2

        );
        
        return $primitives;
    }
    #endregion
}

