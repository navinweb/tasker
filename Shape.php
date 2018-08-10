<?php

abstract class Shape {
  abstract protected function getArea();

  public function check() {
    return 'hui';
  }
}

interface Test{
  function lol();
}

interface Test2{
  function lol();
}


class fuck extends Shape implements Test, Test2 {

}

class Square extends Shape {
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape {
    protected $base = 4;
    protected $height = 10;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}


echo (new Square)->getArea();
echo (new Triangle)->getArea();
