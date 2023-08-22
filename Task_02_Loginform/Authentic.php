
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>
    body{
        background:linear-gradient(45deg,rgb(23, 1, 79),rgb(31, 2, 101),rgb(91, 26, 183),rgb(2, 17, 104),rgb(19, 2, 53));
        background-repeat: none;
    }
    
    h1{
  color:white;
  margin-top: 70px;
  width: 100%;
  height: 90vh;
    }
</style>
<body>
</body>
</html>

<?php
 include('connection.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["Email"]) ? $_POST["Email"] : "";
    $pass = isset($_POST["Password"]) ? $_POST["Password"] : "";

     

  

  $sql = "SELECT *from student WHERE  Email ='$email' and Pass = '$pass'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
   if($count == 1)
   {
    echo"<h1><center>Login Sucessfully</center></h1>";

   }
   else
   {
     include('login.php');
   }
}
?>