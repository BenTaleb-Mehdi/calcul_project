<?php
declare(strict_types=1);
use App\ConvertInterface;

class ConvertNum implements ConvertInterface{
    use ConvertTrait;

    public function toBinary(int $num) : string{
        return decbin($num);
    }
    public function toHexa(int $num):string {
        return strtoupper(dechex($num));
    }

}