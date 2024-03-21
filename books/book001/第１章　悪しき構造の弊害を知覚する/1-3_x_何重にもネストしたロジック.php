<?php

class sample
{
    public function sample(): void
    {
        // 生存しているか判定
        if (0 < $member->hitPoint) {
            // 行動予定か判定
            if ($member->canAct()) {
                // 魔法力が残存しているか判定
                if ($masic->costMagicPoint <= $member->magicPoint) {
                    $member->consumeMagicPoint($magic->costMagicPoint);
                    $member->chant($magic);
                }
            }
        }
    }
}
