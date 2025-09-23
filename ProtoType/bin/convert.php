<?php 

declare(strict_types=1);
use App\ConvertNum;

require __DIR__ . '/../vendor/autoload.php';


try{
    if(!is_numeric($argv[1])){
        throw new InvalidArgumentException('Error ');
    }

    $number = (int)$argv[1];
    $convert = new ConvertNum($number);


    echo 'Decimal     :     '.$convert->toDecimal() . PHP_EOL;
    echo 'Binary      :     '.$convert->toBinary() . PHP_EOL;
    echo 'Hexa        :     '.$convert->toHexa() . PHP_EOL;

}catch(Throwable $e){
    echo 'error' . $e->getMessage() . PHP_EOL;
}