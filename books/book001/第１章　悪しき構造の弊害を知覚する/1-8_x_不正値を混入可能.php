<?php

use books\book001\list1_5\ContractAmount;

class ContractManager
{
    public ContractAmount $contractAmount;

    public function sampleClass(): void
    {
        $amount = new ContractAmount();
        $amount->salesTaxRate = -0.1;
    }
}

// データクラスは不正値を容易に与えられてしまう。