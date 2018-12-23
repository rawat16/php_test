<?php
    session_start();
   
    $namefile = $_SESSION["namefile1"];
    $delete = unlink("../../public/storagefile/$namefile");	
    
    session_unset();
	session_destroy();
      if (ini_get("session.use_cookies")) 
        {
       setcookie(session_name(),'',time() - 3600,"/");
         }


   echo "Session deleted";


     header('location:../../index.php');
?>
