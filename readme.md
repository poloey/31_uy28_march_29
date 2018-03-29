# class variable 

~~~php
class Person {
  const eyes = 2;
  public static $hands
}
echo Person::eyes;
echo Person::$hands;
~~~

getting data using `::` scope resolution operator

## object variable 

~~~php
class Person {
  public function __construct($n, $e) {
    $this->name = $n;
    $this->email = $e;
  }
  public $name;
  public $email;
}
$parvez = new Person('parvez', 'ahmed');
echo $parvez->name
~~~

## composer and npm 

npm is a node dependency manager. composer is a php dependancy manager. All package will be available in packagist.org website.

~~~php
composer require illuminate/database illuminate/events
~~~





