<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\convertNum;


try{
    if(!is_numeric($argv[1])){
        throw new InvalidArgumentException("Error");
    }

    $number = (int)$argv[1];
    $convert = new convertNum($number);


    echo 'Decimal  :  '. $convert->toDecimal().PHP_EOL;
    echo 'Binary   :  '. $convert->toBinary().PHP_EOL;
    echo 'Hexa     :  '. $convert->toHexa().PHP_EOL;




}catch(Throwable $e){
    echo 'Error' . $e->getMessage() . PHP_EOL;
}