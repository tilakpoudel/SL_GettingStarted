<!DOCTYPE html>
<html>

<body>

    <?php
class Fruit {
const LEAVING_MESSAGE = "Thank you for selecting fruit!";
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
  public function byebye() {
echo self::LEAVING_MESSAGE;
}

}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
    // Call protected function from within derived class - OK 
    $this -> intro();
  }
}
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
$strawberry->byebye();
?>

</body>

</html>