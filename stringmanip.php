<?php  $title = "String"; include "includes/header.php"?>
    <h1>Sting Manipulation</h1>
    <?php 
    // string concatination
    $phrase1 = "Student who came late";
    $phrase2 = "in class, stand with Rock...";
    $name = "walid saad";
    echo $phrase1." ".$phrase2;
    echo "<br>";
    echo "<hr/>";
    // string transformation
    echo " Uppercase first letter: ".ucfirst($name). "<br/>";
    echo " Uppercase first letter of each word: ".ucwords($name). "<br/>";
    echo " Upper case all: ".strtoupper($name). "<br/>";
    echo " lower case all: ".strtolower("THIS WAS ALL UPPERCASE"). "<br/>";
     echo "<hr/>";
    echo " Repeat String: ".strtoupper(str_repeat("abc", 50)). "<br/>";
    echo " Get a Substring: ".substr($name, 5, 10). "<br/>"; //str, start,end
    echo " Get position of string: ".strpos($name, 's'). "<br/>"; //position of a string
    // Returns NULL
    echo " Get position of string: ".strpos($name, 'h'). "<br/>"; //Return Null if not found
    echo "<hr/>";
    // find charachter in a string
    echo "Find Character  'R': " .strchr($name, 'R') . "<br/>"; //
    echo "Find Character  'r': " .strchr($name, 'r') . "<br/>"; //
    echo "Find Character  's': " .strchr($name, 's') . "<br/>"; //
    echo "Find Character  'w': " .strchr($name, 'w') . "<br/>"; //
    echo "<hr/>";
    // the length of the string
    echo "Length of string: ".strlen($name). "<br/>";
        echo "<hr/>";
    // trim spaces on both sides, to the left and to the right
    echo "Without a Trim : ". "A". "B C D". "E". "<br/>";
    echo "Trim spaces on both sides : ". "A". trim(" B C D "). "E". "<br/>";
    echo "Trim spaces to the left : ". "A". ltrim(" B C D "). "E". "<br/>";
    echo "Trim spaces to the right : ". "A". rtrim(" B C D "). "E". "<br/>";
    // replace 
     echo "<hr/>";
    echo "Replace String with another: ".str_replace("stand", "sit", $phrase2). "<br/>";

       
    ?>
 <?php require 'includes/footer.php'?>  