<?php 

declare(strict_types=1);

namespace App;

class OperatorNum implements Operatorinterface{
    use ConvertTrait;

    public function ouOp(int $OuNum1,int $OuNum2) : int{
        return $OuNum1 | $OuNum2;
    }
    public function etOp(int $etNum1,int $etNum2) : int{
        return $etNum1 & $etNum2;
    }
    public function xorOp(int $xorNum1,int $xorNum2) : int{
        return $xorNum1 ^ $xorNum2;
    }
    public function nonOp(int $nonNum1) : int{
        return ~$nonNum1;
    }

}