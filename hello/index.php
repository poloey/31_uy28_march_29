<?php 


class Person {
  public function __construct($n, $e) {
    $this->name = $n;
    $this->email = $e;
  }
  public $name;
  public $email;
  public const eyes = 2;
  public $hands = 2;
  public $fingers = 20;
}
echo Person::eyes;
die;
$parvez = new Person('parvez', 'ahmed');
print_r($parvez);



