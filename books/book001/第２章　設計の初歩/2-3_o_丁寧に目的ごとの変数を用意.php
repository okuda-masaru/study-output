<?php

class sample
{
    public function sample(int $playerArmPower, int $playerWeaponPower, int $enemyBodyDefence, int $enemyArmorDefence): int
    {
        $totalPlayerAttackPower = $playerArmPower + $playerWeaponPower;
        $totalEnemyDefence = $enemyBodyDefence + $enemyArmorDefence;
        $damageAmount = $totalPlayerAttackPower - ($totalEnemyDefence / 2);
        if ($damageAmount < 0) {
            return 0;
        }
        return $damageAmount;
    }
}

// 変数への再代入は読み手への混乱を招くので避ける。