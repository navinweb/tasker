<?php

class Math
{
  public static function add() {
    return array_sum(func_get_args());
  }

  public function addAlternative(...$numbers) {
    return array_sum($numbers);
  }
}

$math = new Math;

echo Math::add(1,2,2,3);
echo $math->addAlternative(1,2,2,3);
