<?php
$title ='Ifststement';
include 'Includes/header.php'?>
<body>
  <h1> <?php echo $title ?> </h1>
    <?php
    echo '<h2>If Statement</h2>';
    $Grade=6;
    if($Grade >=50){
        echo'<h3 style="color:green">Congrats! You Have Passed</h3>';
      }
      else{
        echo'<h3 style="color: red">Sorry You Have failed</h3>';

      }
      $Grade = 'A';
      //If-Else If-Else
      If($Grade =='A'){
        echo'<h2 style="color:orange">You scored very high! </h2>';
      }
      elseif($Grade =='B'){
        echo'<h2 style="color:green">You are Competent</h2>';
      }
      else{
        echo'<h3 style="color:red">You are not Competent</h3>';
      }


    ?>
    <?php require 'includes/footer.php'?>
