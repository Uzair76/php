
<?php 

class baseclass{
     public function intro(int $x, int $y )
     {
        $sum= $x+$y;
        echo $sum;
      }
    
    //   public function intro(double $x, double $y ): double
    //   {
    //     return $sum= $x+$y;
    //    }

}

$x = new baseclass();
$x->intro(6.8,8.9);

