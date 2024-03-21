<?php

class MemoryStateManager
{
    /** 
     * @var int $intValue01
     */
    private $intValue01;

    public function changeIntValue01(int $changeValue): void
    {
        $this->intValue01 -= $changeValue;

        if ($this->intValue01 == 0) {
            $this->intValue01 = 0;
            $this->updateState02Flag();
        }
    }

    private function updateState02Flag(): void
    {
    }
}
