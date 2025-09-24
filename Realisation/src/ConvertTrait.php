<?php

declare(strict_types=1);
namespace App;

trait ConvertTrait{
    public function FormatTrait(int $number){
        return number_format($number);
    }
}