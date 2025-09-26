<?php

declare(strict_types=1);
namespace App;

class Convertn implements convertInterface {
    
    use ConvertTrait;
  
    public function toBinary(int $number): string {
        return decbin($number);
    }

    public function toHexa(int $number): string {
        return strtoupper(dechex($number));
    }
}
