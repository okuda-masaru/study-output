<?php

class sample
{
    public function sample(int $playerArmPower, int $playerWeaponPower, int $enemyBodyDefence, int $enemyArmorDefence): void
    {
        $damageAmount = 0;
        $damageAmount = $playerArmPower + $playerWeaponPower;
        $damageAmount = $damageAmount - (($enemyBodyDefence + $enemyArmorDefence) / 2);
        if ($damageAmount < 0) {
            $damageAmount = 0;
        }
    }
}
