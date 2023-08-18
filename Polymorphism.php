<?php

class Animal {
    public function makeSound() {
        
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!\n";
    }
}

class Bird extends Animal {
    public function makeSound() {
        echo "Chirp!\n";
    }
}

$dog = new Dog();
$cat = new Cat();
$bird = new Bird();

$animals = [$dog, $cat, $bird];

foreach ($animals as $animal) {
    $animal->makeSound();
}

?>
