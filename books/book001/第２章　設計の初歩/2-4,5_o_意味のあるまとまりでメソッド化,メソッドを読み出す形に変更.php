<?php

class sample
{
    public function sample(int $playerArmPower, int $playerWeaponPower, int $enemyBodyDefence, int $enemyArmorDefence): void
    {
        $totalPlayerAttackPower = $this->sumUpPlayerAttackPower($playerArmPower, $playerWeaponPower);
        $totalEnemyDefence = $this->sumUpEnemyDefence($enemyBodyDefence, $enemyArmorDefence);
        $damageAmount = $this->estimateDamage($totalPlayerAttackPower, $totalEnemyDefence);
    }

    /** 
     * プレイヤーの攻撃力を合算する。
     */
    public function sumUpPlayerAttackPower(int $playerArmPower, int $playerWeaponPower): int
    {
        return $playerArmPower + $playerWeaponPower;
    }

    /** 
     * 敵の防御力を合算する。
     */
    public function sumUpEnemyDefence(int $enemyBodyDefence, int $enemyArmorDefence): int
    {
        return $enemyBodyDefence + $enemyArmorDefence;
    }

    /** 
     * ダメージ量を評価する。
     */
    public function estimateDamage(int $totalPlayerAttackPower, int $totalEnemyDefence): int
    {
        $damageAmount = $totalPlayerAttackPower - ($totalEnemyDefence / 2);
        if ($damageAmount < 0) {
            return 0;
        }
        return $damageAmount;
    }
}

// 計算ロジックがどこからどこまでなのかわからなくなったり、別の計算ロジックが混じってしまうのでベタ書きは避けて
// 意味のあるまとまりでメソッドを分ける。