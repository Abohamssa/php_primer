<?php $title = "While Loop"; include "includes/header.php"?>
    <h1> While LOOP</h1>
<?php
    $grade = 0;
    while ($grade < 10) {
            echo "<p> I am $grade and  less than 10 </p>";
            $grade++;
        }
echo "Exit LOOP.......";

  ?>
    <h1> DO While LOOP --- A post condition loop</h1>
        <?php 
        do {
            echo "<p>I am a do while loop </p>";
            $grade++;
        }while ($grade <= 10);
        echo "Exit LOOP.......";

        
        ?>
 <?php require 'includes/footer.php'?>  