<?php 
// An abstract class is a class that has at least 
// one abstract method. Abstract methods can only 
// have names and arguments, and no other code. Thus,
// we cannot create objects out of abstract classes. 
// Instead, we need to create child classes that add 
// the code into the bodies of the methods, 
// and use these child classes to create objects.

abstract class Car{
    public $name ;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro(): string ;
}

class Audi extends Car{
    public function intro(): string{
        return "hello fom : ".$this->name ."\n";
    }

    
}
class Alto extends Car{
    public function intro(): string{
        return "hello fom : ".$this->name ."\n";
    }
} 

$audi = new Audi('Audi car');
echo $audi->intro();

$alto =new Alto('Alto Car');
echo $alto->intro();