<?php 

declare(strict_types=1);

namespace App;

interface ConvertInterface{
    public function toBinary(int $binaryNum) : string;
    public function toHexa(int $hexaNum):string ;
    
}