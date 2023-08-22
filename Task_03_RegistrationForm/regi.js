function validation()
{
    if(document.formfill.inputX.value == "")
    {
        document.getElementById("h1").innerHTML=" ! Enter Your Username";
       return false;
    }
     else if(document.formfill.Email.value == "")
    {
        document.getElementById("h1").innerHTML=" ! Enter Your Email";
       return false;
    }
    else if(document.formfill.Password.value == "")
    {
        document.getElementById("h1").innerHTML=" ! Create Your Password";
       return false;
    }
     
    else if(document.formfill.Address.value == "")
    {
        document.getElementById("h1").innerHTML=" ! Enter Your Address";
       return false;
    }
    else if(document.formfill.gender.value == "")
    {
        document.getElementById("h1").innerHTML=" ! Select Your Gender";
       return false;
    }
    else if(document.formfill.CPassword.value !== document.formfill.Password.value)
    {
        document.getElementById("h1").innerHTML=" !  Your Password not Same";
       return false;
    }
    else if(document.formfill.CPassword.value == document.formfill.Password.value)
    {
           
       popup.classList.add("open-popup");
         
       return false;
    }
    
     
}
var popup = document.getElementById("popup");
function closepopup()
{
    document.classList.remove("OK");
}
 
 
 