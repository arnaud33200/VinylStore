<?php
  session_start();
   if( isset($_SESSION['LOGIN_USER']) )
    {
      unset($_SESSION['Valide']);
      unset($_SESSION['LOGIN_USER']);
      unset($_SESSION['PANIER_OBJ']);
      unset($_SESSION['PANIER_STRING']);
    }
    
    $Loc = "Location: ../index.php";
    header($Loc); 
      
?>