<?php 
$title ='Forloop';
include 'Includes/header.php'?>
 
<body>
    <h1> <?php echo $title ?> </h1>
    <?php
    for($count = 0; $count< 10; $count++){
        echo'<p>Hello PHP</P>';
    }
    
    for($count =0; $count<10; $count++){
        echo"<p>The Count is: $count</p>";
    }
    
    ?>
    <?php require 'includes/footer.php'?>