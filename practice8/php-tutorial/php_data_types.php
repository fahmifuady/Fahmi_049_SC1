<!DOCTYPE html>
<html>

<body>
  <h1>PHP Data Types</h1>
  <p>
    Variables can store data of different types, and different data types can do different things.
    <br>
    PHP supports the following data types:
  </p>

  <ul>
    <li>String </li>
    <li>Integer </li>
    <li>Float (floating point numbers - also called double) </li>
    <li>Boolean </li>
    <li>Array </li>
    <li>Object </li>
    <li>NULL </li>
    <li>Resource (advanced)</li>
  </ul>
  <br><br>

  <?php
  $x = "Hello world!";
  $y = 'Hello w3school!';

  var_dump($x);
  echo "<br>";
  var_dump($y);
  echo "<br><br>";

  $x = 5985;
  var_dump($x);
  echo "<br><br>";

  $x = 10.365;
  var_dump($x);
  echo "<br><br>";

  $x = true;
  var_dump($x);
  echo "<br><br>";

  $cars = array("Volvo", "BMW", "Toyota");
  var_dump($cars);
  echo "<br><br>";

  class Car
  {
    public $color;
    public $model;
    public function __construct($color, $model)
    {
      $this->color = $color;
      $this->model = $model;
    }
    public function message()
    {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }

  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
  echo "<br><br>";

  $x = "Hello world!";
  $x = null;
  var_dump($x);
  ?>


</body>

</html>