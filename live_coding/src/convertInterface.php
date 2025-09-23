<?php
declare(strict_types=1);

namespace App;
interface ConvertInterface{
    public function toDecimal():string ;
    public function toBinary():string ;
    public function toHexa():string ;
}