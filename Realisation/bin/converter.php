<?php
declare(strict_types=1);

// Load Composer autoloader bach t9dar tsta3ml les classes men namespace App
require __DIR__ . '/../vendor/autoload.php';

// Import classes li ghadi nsta3mlou
use App\Convertn;
use App\OperatorNum;

try {
    // Path dyal input file
    $inputTxt = __DIR__ . '/../Sample/input.txt';

    // Check ila file kayn, ila ma kaynch throw exception
    if (!file_exists($inputTxt)) {
        throw new InvalidArgumentException("input.txt file not found.");
    }

    // Read content dyal input.txt w decode JSON f array
    $numbers = json_decode(file_get_contents($inputTxt), true);

    // Check ila numbers ma kaynch, ma array, aw ma fihomch 2 numbers
    if (!$numbers || !is_array($numbers) || count($numbers) < 2) {
        throw new InvalidArgumentException("input.txt must contain at least two numbers in JSON array.");
    }

    // Extract numbers men array
    $a = (int)$numbers[0];
    $b = (int)$numbers[1];

    // Create objects dyal ConvertNum w OperatorNum
    $convert = new Convertn();    // bach nkhdmo binary/hex formatting
    $operator = new OperatorNum();  // bach nkhdmo AND, OR, XOR, NOT

    $binLength = 3; // Length minimum dyal binary padding (ex: 5 => 101)

    // Prepare output lines f format li bghiti
    $lines = [];
    $lines[] = "Input A : $a (" . $convert->format($a, $binLength) . ")";
    $lines[] = "Input B : $b (" . $convert->format($b, $binLength) . ")";
    $lines[] = "A AND B  : " . $operator->etOp($a, $b) . " (" . $convert->format($operator->etOp($a, $b), $binLength) . ")";
    $lines[] = "A OR B   : " . $operator->ouOp($a, $b) . " (" . $convert->format($operator->ouOp($a, $b), $binLength) . ")";
    $lines[] = "A XOR B  : " . $operator->xorOp($a, $b) . " (" . $convert->format($operator->xorOp($a, $b), $binLength) . ")";
    $lines[] = "NOT A    : " . $operator->nonOp($a) . " (" . decbin($operator->nonOp($a) & 0xFF) . ")";


    // Save output f file JSON
    $outputFile = __DIR__ . '/../Sample/output.json';
    file_put_contents($outputFile, json_encode($lines, JSON_PRETTY_PRINT));

    // Print confirmation
    echo "Output saved to output.json" . PHP_EOL;

} catch (Throwable $e) {
    // Catch kolchi exception w print error f STDERR
    fwrite(STDERR, "Error: " . $e->getMessage() . PHP_EOL);
    exit(1); // exit b code 1 ila kayn error
}
