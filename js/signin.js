function validateSignin()
{
 var username=document.signin.username;
 var password=document.signin.password;

    if(username_validate(username))
    {  
          if(password_validate(password))
        {
        }
    }
  
}

function username_validate(username)
{
    if(username.value==null || username.value=="")
    {
     //window.alert("Please Enter The Username");
    //username.focus();
    $('#username_error').css({ "display": "inline" }); 
     return false;
}
  
    
    
    else
    {
    $('#username_error').css({ "display": "none" }); 
     return true;   
    }
}

function password_validate(password)
{
 if(password.value==null || password.value=="")
 {
  //window.alert("Please Enter The Passwords");
  //password.focus();
     $('#password_error').css({ "display": "inline" }); 
    return false;
 }
  else
  {
     $('#password_error').css({ "display": "none" });
   return true;   
  }
}