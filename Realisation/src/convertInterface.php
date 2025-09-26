<?php
declare(strict_types=1);

namespace App;

interface ConvertInterface {
    public function toBinary(int $number): string;
    public function toHexa(int $number): string;
}
