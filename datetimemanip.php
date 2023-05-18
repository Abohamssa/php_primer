<?php $title = "Date & Time"; include "includes/header.php"?>
   <h1>Date and Time Manipulation</h1> 
   <?php 
   $datenow= getdate();
   echo "Today's date : </br>";
   echo $datenow['mday']. "<br/>";
   echo $datenow['mon']. "<br/>";
   echo $datenow['year']. "<br/>";
   echo "<hr/>";
   echo "Today's date is: ".$datenow['mday']." /".$datenow['mon']." /".$datenow['year'];
   echo "<hr/>";
   echo "Time ";
   echo time(). "<br/>";
   print date("m/d/y G.I:s<br/>", time()). "<br/>";
   
   ?>
 <?php require 'includes/footer.php'?>  