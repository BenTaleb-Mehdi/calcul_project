<?php
declare(strict_types=1);
use App\OprInterface;

class OperatorNum implements OprInterface{
    public function etOp(int $etNum1,int $etNum2) : int{
        return $etNum1 & $etNum2;
    }
    public function ouOp(int $opNum1,int $opNum2) : int{
        return $opNum1 | $opNum2;
    }
    public function xorOp(int $xorNum1 , int $xorNum2) : int{
        return $xorNum1 ^ $xorNum2 ;
    }
    public function nonOp(int $nonNum1) : int{
        return ~$nonNum1;
    }


}