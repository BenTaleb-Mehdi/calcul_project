<?php
declare(strict_types=1);

namespace App;

interface Operatorinterface{
    public function ouOp(int $OuNum1,int $OuNum2) : int;
    public function etOp(int $etNum1,int $etNum2) : int;
    public function xorOp(int $xorNum1,int $xorNum2) : int;
    public function nonOp(int $nonNum1) : int;
}