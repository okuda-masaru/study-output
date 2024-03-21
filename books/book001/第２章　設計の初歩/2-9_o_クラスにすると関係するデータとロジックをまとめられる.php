<?php

/** 
 * ヒットポイント（HP）を表現するクラス。
 */
class HitPoint
{
    const MIN = 0;
    const MAX = 999;
    private int $value;

    public function __construct(int $value)
    {
        if ($value < self::MIN) {
            throw new IllegalArgumentException(self::MIN + "以上を指定してください");
        }
        if (self::MAX < $value) {
            throw new IllegalArgumentException(self::MAX + "以下を指定してください");
        }

        $this->value = $value;
    }

    /** 
     * ダメージを受ける。
     */
    public function damage(int $damageAmount): HitPoint
    {
        $damaged = $this->value - $damageAmount;
        $corrected = $damaged < self::MIN ? self::MIN : $damaged;
        return new HitPoint($corrected);
    }

    /** 
     * 回復する。
     */
    public function recover(int $recoveryAmount): HitPoint
    {
        $recovered = $this->value + $recoveryAmount;
        $corrected = self::MAX < $recovered ? self::MAX : $recovered;
        return new HitPoint($corrected);
    }
}
