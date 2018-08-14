<?php

class Math
{

  public static $sum = 0;

  public static function add() {
    return array_sum(func_get_args());
  }

  public function addAlternative(...$numbers) {
    return array_sum($numbers);
  }

  public static function addSum() {
    self::$sum += 1;
  }
}

$math = new Math;
// echo $math->addAlternative(1,2,2,3);
// echo $math->add(1,2,2,3);

// echo Math::add(1,2,2,3);
// echo Math::addAlternative(1,2,2,3);

$math::addSum();
Math::addSum();
echo Math::$sum;
