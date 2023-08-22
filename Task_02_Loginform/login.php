<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <h2>Login Form</h2>
            <form action="Authentic.php" method="POST" name ="f2" onsubmit="return validation()">
            <input type=" email" name="Email" id="" placeholder=" Enter Email"><br><br><br>
            <input type="password" name="Password" id="" placeholder="Enter password"><br><br><br><br>
            <button>Login</button>
            </form>
        </div>
    </div>
</body>
<script>
    function validation()
    {
        var id = document.f2.Email.value;
        var pas = document.f2.Password.value;
        if(id.length==""&& pas.length=="")
        {
            alert("User Name and Password fields are empty");  
                    return false;  
        }
     else
     {
        if(id.lenght=="")
        {
            alert("Enter Email");
            return false;

        }
        if(pas.length =="")
        {
            alert("Enter Password");
            return false;
        }
     }

    }
    
</script>
</html>

 
 