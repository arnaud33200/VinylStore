<?php
    session_start();
          $_SESSION['LOGIN_USER'] = 'mimi62';
          $_SESSION['PANIER_OBJ'] = array();
          $_SESSION['PANIER_STRING'] = "";

    
    $Loc = "Location: ../index.php";
    header($Loc); 
      
?>