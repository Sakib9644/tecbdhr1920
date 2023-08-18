<?php

class Shape {
    public function calculateArea() {
        
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        echo "Circle Area: " . (pi() * $this->radius * $this->radius) . "\n";
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        echo "Rectangle Area: " . ($this->width * $this->height) . "\n";
    }
}

$circle = new Circle(5.0);
$rectangle = new Rectangle(4.0, 6.0);

$circle->calculateArea();
$rectangle->calculateArea();

?>
