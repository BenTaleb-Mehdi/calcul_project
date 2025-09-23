<?php

declare(strict_types=1);
namespace App;

use  App\ConvertInterface;
use  App\ConvertTrait;


class ConvertNum implements ConvertInterface{
    use ConvertTrait;
    private int $number;

    public function __construct(int $number){
         $this->number = $number;
    }


    public function toDecimal() : string{
        return (string)$this->number;
    }
    public function toBinary() : string{
        return decbin($this->number);
    }
    public function toHexa():string {
        return strtoupper(dechex($this->number));
    }
}