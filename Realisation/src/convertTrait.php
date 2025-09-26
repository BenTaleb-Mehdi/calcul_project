<?php

declare(strict_types=1);

namespace App;

trait ConvertTrait {

    // Kayconverti number men decimal l binary w kaypad zeros f left bach output tousi consistent
    public function format(int $number, int $digits): string {
        return str_pad(decbin($number), $digits, '0', STR_PAD_LEFT);
    }

}
