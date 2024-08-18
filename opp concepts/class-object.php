<?php

 class fruit{
     public $name;
     public $color;

     public function set_name($name){
        $this->name = $name;
     }
     public function get_name(){
        return $this->name;
     }
     public function set_color($color){
        $this->color = $color;
     }
     public function get_color(){
        return $this->color;
     }
 }

 $banana = new fruit();
 $banana ->set_name("Apple");

 echo $banana->get_name();
 echo "<br>";
 $banana ->set_color("yellow");
 echo $banana->get_color();