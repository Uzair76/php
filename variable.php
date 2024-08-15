
<?php

// in this file i will code that how we can use variables in php

// $a =10;
// $b = "string";
// $c= 10.8;
// $d= true;
// $e= [3,5,6,7];


// echo $a;
// echo var_dump($a);
// echo $b;
// echo var_dump($b);
// echo $c;
// echo var_dump($c);

// echo var_dump($e);

// Now Let see the scope of variables
// 1 : local scope
// 2 : global
// 3 : static
$x =7;
function index(){
     global $x;
    echo "the var x hold". $x ."";
}
index();
echo $x;


?>