<?php
include_once ("abstract_class/animals.php");
include_once ("interface_class/edible.php");
class Chicken extends Animals implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck...cluck...!";
    }
    public function howToEat()
    {
        // TODO: Implement howToEat() method.
        return "could be fried";
    }
}