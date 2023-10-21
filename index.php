<?php 
$title ='Index';
include 'Includes/header.php'?>
    <h1> <?php echo $title ?> </h1>
    <?php
    echo " Hello PHP";
    echo"<br/>";
    echo"Second Line";
    echo"<br/>";
    ?>

    <?php 
    $name = 'Toni-Ann Wallace';
    $age =25;
    echo $name;
    echo '<h1> My Name is : '.$name.'</h1>';
    echo '<h1> My Age is : '.$age.'</h1>';
  
    ?>
    
   <?php require 'includes/footer.php'?>