<?php
require_once "Weapon.php";
require_once "WeaponStore.php";
require_once "Glock19.php";
require_once "AK47.php";

$store = new WeaponStore(
    [new Glock19("glock19", "9x19mm", "HG"),
        new AK47("AK47", "7.62x39mm", "AR"),
        new Weapon("M16", "5.56x45mm", "AR")]
);

$store->displayWeapons($store->getWeapons());