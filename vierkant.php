<?php
class vierkant
{
    public $length;
    public $width;
    public function __construct($length,$width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function oppervlakte(){
        return $this->length * $this->width;

    }

}
$oppervlakte = new vierkant(5,5);
echo $oppervlakte ->oppervlakte();