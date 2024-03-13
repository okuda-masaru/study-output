<?php

use books\book001\list1_5\ContractAmount;

/**
 * 契約を管理するクラス。
 */
class ContractManager
{
    public ContractAmount $contractAmount;

    /**
     * 税込金額を計算する。
     *
     * @param int $amountExcludingTax
     * @param float $salesTaxRate
     * @return int
     */
    public function calculateAmountIncludingTax(int $amountExcludingTax, float $salesTaxRate): int
    {
        $multiplier = $salesTaxRate + 1.0;
        $amountIncludingTax = $multiplier * $amountExcludingTax;

        return intval($amountIncludingTax);
    }

    /**
     * 契約締結する。
     *
     * @return void
     */
    public function conclude(): void
    {
        // 略

        $amountExcludingTax = 1;
        $salesTaxRate = 1;

        $amountIncludingTax = $this->calculateAmountIncludingTax($amountExcludingTax, $salesTaxRate);

        $contractAmount = new ContractAmount();
        $contractAmount->amountIncludingTax = $amountIncludingTax;
        $contractAmount->salesTaxRate = $salesTaxRate;

        // 略
    }
}
