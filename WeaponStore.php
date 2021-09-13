<?php

class WeaponStore
{
    private array $weapons;

    public function __construct(array $weapons)
    {
        foreach($weapons as $weapon)
        {
            $this->add($weapon);
        }
    }

    public function add(Weapon $weapon)
    {
        $this->weapons[] = $weapon;
    }


    public function getWeapons(): array
    {
        return $this->weapons;
    }

    public function displayWeapons($weapons)
    {
        foreach($weapons as $key => $weapon)
        {
            echo "ID {$key} | {$weapon->getName()} | Caliber: {$weapon->getCaliber()} | ";
            echo "License type : {$weapon->getLicense()} | Bullet Velocity: {$weapon->roundTrajectory()}" . PHP_EOL;
        }
    }
}