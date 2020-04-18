<?php


namespace Swourire\AdminTroll\Troll\Trolls;


use Swourire\AdminTroll\Troll\TrollBase;

class SnowSwitch extends TrollBase
{
    protected $name = "Switcher";
    public function apply(): void
    {
        $playerTrollPosition = $this->playerTroll->getPosition();
        $this->playerTroll->teleport($this->playerVictim->getPosition());
        $this->playerVictim->teleport($playerTrollPosition);
        parent::apply(); // TODO: Change the autogenerated stub
    }
}