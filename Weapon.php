<?php

class Weapon
{
    protected string $name;
    protected string $caliber;
    protected  string $license;

    public function __construct(string $name, string $caliber, string $license)
    {
        $this->name = $name;
        $this->caliber = $caliber;
        $this->license = $license;
    }

    public function roundTrajectory(): int
    {
        return 100*10+20;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCaliber(): string
    {
        return $this->caliber;
    }

    public function getLicense(): string
    {
        return $this->license;
    }
}