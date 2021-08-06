function validateSigninAlert()
{
 var username=document.signin.username;
 var password=document.signin.password;

    if(username_validate_alert(username))
    {  
          if(password_validate_alert(password))
        {
        }
    }
  
}

function username_validate_alert(username)
{
    if(username.value==null || username.value=="")
    {
     window.alert("Please Enter The Username");
    username.focus();
    return false;
}
  
    
    
    else
    {
   
     return true;   
    }
}

function password_validate_alert(password)
{
 if(password.value==null || password.value=="")
 {
  window.alert("Please Enter The Passwords");
  password.focus();
  return false;
 }
  else
  {

   return true;   
  }
}