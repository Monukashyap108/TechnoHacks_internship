
<?php
    $localhost = "localhost";
    $username ="root";
    $password = "";
    $db_name = "Login";
   $conn =mysqli_connect($localhost,$username,$password,$db_name);
   if(mysqli_connect_errno())
   {
   die("failled conection".mysqli_connect_errno()); 
   }
    else
    { 
    }

?>