<?php  $title = "If Statement"; include "includes/header.php"?>
   <?php 
   // An if statement that will carry out an action based on the value of the variable
   echo '<h2>If Statements</h2>';
   $grade = 60;
   // == , <, >, <=, >=, === != 
   if ($grade >= 60) {
      echo '<h3 style="color: green">You have passed</h3>';
   } else {
      echo '<h3 style="color: red">You have FAILED</h3>';
   }

   $grade = 'f';
   //if, elseif, else
   if ($grade ==  'A' ) {
      echo '<h3 style="color: green">You are a superstar</h3>';
   } elseif($grade == 'B') {
      echo '<h3 style="color: yellow">You did well</h3>';
   }elseif($grade == 'C') {
      echo '<h3 style="color: brown">Study Hard</h3>';
   }elseif($grade == 'D') {
      echo '<h3 style="color: orange">You almost pass</h3>';
   }else {
      echo '<h3 style="color: red">You have FAILED</h3>';
   }
   
   ?> 
 <?php require 'includes/footer.php'?>  