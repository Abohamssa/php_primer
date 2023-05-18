<?php $title = "Functions"; include "includes/header.php"?>
    <h1>Functions </h1>
    <?php   
    // define a function
    function writeMessage(){
        echo "You are really a nice person";
    }
    // calling a function
    writeMessage();
    echo '<hr/>';
    // function with parameters
    function addFunction($num1, $num2){
        $sum =  $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum\n";
        echo '<hr/>';
    }
     addFunction(5,5);
     addFunction(55,5);
     addFunction(50,100);

     function returnProduct($n1,$n2){
        $prod = $n1 * $n2;
        return $prod;
     }
     $return_value = returnProduct(10,100);
     echo $return_value . '</br>';
    ?>
 <?php require 'includes/footer.php'?>  