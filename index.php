<?php  
$title = "Index";
include "includes/header.php";
?>
        <!--Basic HTMl ctl+k+c -->
       <h1> Hello World</h1>
        <?php 
        /*Printing to HTML using echo */   
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        ?>

        <?php
        // declare a variable, they need a '$'. They are not strongly typed
        echo '<br/>';
        $name = 'Walid Saad ';
        $age = 47;
        //echo variable
        //echo $name;
        echo '<h1>My name is: ' .$name.' </h1>'; // concatination
        echo '<h1>I am ' .$age.' years old. </h1>'; // concatination
        // the diffenece between "" and '' with echo 
        echo "<h1> My name is: $name</h1>"; //no concatination
        ?>
 <?php require 'includes/footer.php'?>      