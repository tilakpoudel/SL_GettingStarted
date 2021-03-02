<?php
    require 'animal.php';
    require 'cow.php';
    require 'lion.php';
    
    $cow  = new Cow('cow','Herbivore', 'Grass');
    $cow->set_owner("Krishna");

    $lion = new Lion('lion','Canirval', 'Meat');

    echo '<b>'.$cow->get_name().' Object</b> <br>';
    echo 'The '.$cow->get_name().' belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food() . 'with owner '.$cow->get_owner().'<br><br>';
    echo '<b>'.$lion->get_name().' Object</b> <br>';
    echo 'The '.$lion->get_name().' belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food();
?>