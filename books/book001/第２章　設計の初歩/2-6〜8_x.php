<?php

class sample
{
    public function sample(int $damageAmount, int $recoverAmount): void
    {
        // 2-6：単なる変数として用意されたヒットポイント
        $hitPoint = 0;

        // 2-7：どこかに書かれるヒットポイント減少ロジック
        $hitPoint = $hitPoint - $damageAmount;
        if ($hitPoint < 0) {
            $hitPoint = 0;
        }

        // 2-8：どこかに書かれるヒットポイント回復ロジック
        $hitPoint = $hitPoint + $recoverAmount;
        if (999 < $hitPoint) {
            $hitPoint = 999;
        }
    }
}

// 変数や変数を操作するロジックは、ゲームに限らずバラバラに書かれがち。
// 小さいプログラムでは問題にならないが、大規模なソースだと探すだけで時間がかかる。
// どこかで不正な値が混入して、それが入り込んだままプログラムが動作するとそれはバグ。