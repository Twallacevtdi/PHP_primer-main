<?php 
$title ='Switchstatement';
include 'Includes/header.php'?>
<body>
    <h1> <?php echo $title ?> </h1>
    <?php
    $Grade ='A';
    switch($Grade){
        case'A': 
            echo'<h2 style="color:orange">You have successfully scored high!</h2>';
            break;
        case 'B':
            echo'<h2 style="color:green">You are Competent</h2>';
            break;
        default:
        echo'<h3 style="color:red">Sorry you are not Competent</h3>';
        break;        
    }
    
    
    
    ?>

<?php require 'includes/footer.php'?>