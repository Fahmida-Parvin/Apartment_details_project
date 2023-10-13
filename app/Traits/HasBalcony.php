<?php
namespace app\traits;
trait HasBalcony
{
    protected $balcony;
    public function setBalcony($balcony){
        $this->balcony=$balcony;
    }
    public function hasBalcony(){
        return $this->balcony;
    }
}
