

<?php  
$title = "Arrays";
include "includes/header.php";
?>
    <h1>Arrays</h1>
    <?php 
    //a variable 
    $num = 3;

    // an Array  ---- store only one datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,10,12);
    // print one of the values
    //echo "The value in position $numbers[5] ";
    // get the length of the array
    $length = count($numbers);
    echo " The array size is : $length";   
    
    // to print all items in an array 
    for ($i=0; $i < $length; $i++) { 
        echo $numbers[$i]. " ". "<br />";
    }
  
    ?>
 <?php require 'includes/footer.php'?>  