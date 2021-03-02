<?php
class Animal
{
    // Member variables
    private $family; // private 
    private $food;      // private
    public $name; // public
    protected $owner; // public

    public function __construct($name,$family, $food)
    {
        echo "i am constructor <br>";
        // $this->name = $name; //set name 
        // $this->family = $family; // set family
        // $this->food   = $food;
    }
    // member functions
    // getter
    public function get_family()
    {
        return $this->family;
    }
    //setter
    public function set_family($family)
    {
        $this->family = $family;
    }
    public function get_food()
    {
        return $this->food;
    }
    public function set_food($food)
    {
        $this->food = $food;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function set_name($name)
    {
        $this->name = $name;
    }
    // destructor is called at the end of the script
    // function __destruct() {
    // echo " Calling from destructor .The animal is {$this->name}. <br> <br>";
    // }
}
    $cow = new Animal('Cow','Herbivore', 'Grass');
    // $cow->set_name("Beautiful Cow");
    $cow->set_family("Herviborous");
    $cow->set_food("Grass");
    $cow->name="Beautiful Cow";
    $cow->owner="Krishna";
    echo '<b>'.$cow->get_name(). ' Object</b> <br>';
    echo '<b>'.$cow->owner. ' Owner</b> <br>';
    echo 'The '.$cow->get_name().' belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food(). '<br><br>';
    
    $lion = new Animal('Lion','Canirval', 'Meat');
    echo '<b>'.$lion->get_name().' Object</b> <br>';
    echo 'The '.$lion->get_name().' belongs to the ' . $lion->get_family() . ' family and eats ' . '<br><br>';
?>