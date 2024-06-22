<?php

// Definición de la interfaz
interface Animal {
    public function makeSound();
    public function move();
}

// Implementación de la interfaz en una clase
class Dog implements Animal {
    public function makeSound() {
        echo "Woof! Woof!";
    }

    public function move() {
        echo "The dog runs.";
    }
}

// Implementación de la interfaz en otra clase
class Bird implements Animal {
    public function makeSound() {
        echo "Tweet! Tweet!";
    }

    public function move() {
        echo "The bird flies.";
    }
}
