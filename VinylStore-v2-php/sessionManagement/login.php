<?php
    session_start();
         // $_SESSION['Valide'] = "true";
          $_SESSION['LOGIN_USER'] = 'mimi62';
         /* $_SESSION['PRENOM_USER'] = $Prenom;
          $_SESSION['LOGIN_USER'] = $Login;
          $_SESSION['CODE_USER'] = $Code;*/
    
    $Loc = "Location: ../index.php";
    header($Loc); 
      
?>