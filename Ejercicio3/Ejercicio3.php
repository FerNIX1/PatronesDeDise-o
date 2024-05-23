<?php

abstract class Character {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function getDescription();
    abstract public function attack();
}

class Warrior extends Character {
    public function getDescription() {
        return $this->name;
    }

    public function attack() {
        return "ataca con una espada";
    }
}

class Mage extends Character {
    public function getDescription() {
        return $this->name;
    }

    public function attack() {
        return "lanza un hechizo";
    }
}

abstract class WeaponDecorator extends Character {
    protected $character;

    public function __construct(Character $character) {
        $this->character = $character;
    }

    public function getDescription() {
        return $this->character->getDescription();
    }
}

class BowDecorator extends WeaponDecorator {
    public function attack() {
        return $this->character->attack() . " y un arco";
    }
}

class ShieldDecorator extends WeaponDecorator {
    public function attack() {
        return $this->character->attack() . " y un escudo";
    }
}

// Uso del decorador
$warrior = new Warrior("Guerrero");
$warriorWithBow = new BowDecorator($warrior);
echo $warriorWithBow->getDescription() . " " . $warriorWithBow->attack();  // Guerrero ataca con una espada y un arco

$mage = new Mage("Mago");
$mageWithShield = new ShieldDecorator($mage);
echo $mageWithShield->getDescription() . " " . $mageWithShield->attack();  // Mago lanza un hechizo y un escudo

?>
