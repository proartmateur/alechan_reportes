<?php
include 'acta_header.php';
include 'acta_body.php';
include 'acta_cierre.php';
include 'acta_footer.php';

class Acta
{
    private $header;
    private $body;
    private $cierre;
    private $footer;

    function __construct(
        ActaHeader $header,
        ActaBody $body,
        ActaCierre $cierre,
        ActaFooter $footer
    )
    {
         $this->header;
         $this->body;
         $this->cierre;
         $this->footer;
    }

    #region Serialize
    public static function fromPrimitives(array $primitives)
    {
        return new self(
            $header = $primitives["header"],
            $body = $primitives["body"],
            $cierre = $primitives["cierre"],
            $footer = $primitives["footer"]
        );
    }
    #endregion
}