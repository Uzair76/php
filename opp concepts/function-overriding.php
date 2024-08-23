
<?php 

class base{
    public function intro(){
        echo "in the base class";
    }
}
class derived extends base{
    public function intro(){
        echo "in the derived class";
    }
}

$x = new derived();
$s = new base();
$s->intro();
$x->intro();