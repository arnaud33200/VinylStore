<?php
    session_start();
          $_SESSION['Valide'] = "true";
          $_SESSION['LOGIN_USER'] = 'mimi62';
         /* $_SESSION['PRENOM_USER'] = $Prenom;
          $_SESSION['LOGIN_USER'] = $Login;
          $_SESSION['CODE_USER'] = $Code;*/

   /* if( isset($_SESSION['LOGIN_USER']) )
    {
      unset($_SESSION['Valide']);
      unset($_SESSION['NOM_USER']);
      unset($_SESSION['PRENOM_USER']);
      unset($_SESSION['LOGIN_USER']);
      unset($_SESSION['CODE_USER']);
    }*/
    
    $Loc = "Location: ../index.php";
    header($Loc); 
      
?>