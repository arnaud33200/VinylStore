<?php
    session_start();
   if( isset($_SESSION['LOGIN_USER']) )
    {
      unset($_SESSION['Valide']);
      unset($_SESSION['LOGIN_USER']);
      /*unset($_SESSION['PRENOM_USER']);
      unset($_SESSION['LOGIN_USER']);
      unset($_SESSION['CODE_USER']);*/
    }
    
    $Loc = "Location: ../index.php";
    header($Loc); 
      
?>