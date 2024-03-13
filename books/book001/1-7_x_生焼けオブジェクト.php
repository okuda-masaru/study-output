<?php

use books\book001\list1_5\ContractAmount;

class ContractManager
{
    public ContractAmount $contractAmount;

    public function sampleClass(): void
    {
        $amount = new ContractAmount();
        print($amount->salesTaxRate);
    }
}

// 呼び出し側で初期化をしないと使えないクラスを生焼けオブジェクトという。