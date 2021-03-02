<?php
class Cow extends Animal
{
    private $owner; //This(private) modifier is open to use within the class that defines it. ( it can’t be accessed outside the class means in inherited class).
    public function __construct($name,$family, $food)
    {
        parent::__construct($name,$family, $food);
    }
    public function set_owner($owner)
    {
        $this->owner = $owner;
    }
    public function get_owner()
    {
        return $this->owner;
    }
}
?>