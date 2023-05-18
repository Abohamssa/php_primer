<?php $title = "Switch"; include "includes/header.php"?>
    <h1>Switch Statements</h1>
    <?php     
    $grade = 'c';
    switch ($grade) {
        case 'A':
            echo '<h2 style="color: green">You are a superstar</h2>';
            break;
        case 'B':
            echo '<h2 style="color: orange">You did well</h2>';
            break;
        default:
             echo '<h2 style="color: red">You have failed</h2>';
            break;
    }
    
    ?>
 <?php require 'includes/footer.php'?>  