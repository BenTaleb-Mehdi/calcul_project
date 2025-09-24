<?php 


declare(strict_type=1);

namespace App;

interface OprInterface {
    public function etOp(int $etNum1,int $etNum2) : int;
    public function ouOp(int $opNum1,int $opNum2) : int;
    public function xorOp(int $xorNum1 , int $xorNum2) : int;
    public function nonOp(int $nonNum1 ) : int;
}