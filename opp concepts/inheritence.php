
<?php 

class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}
class apple extends Fruit{
    public function message() {
        echo "Am I a fruit or a apple? ";
      }
}
$apple = new apple("Strawberry", "red");
$apple ->intro();
$apple ->message();
