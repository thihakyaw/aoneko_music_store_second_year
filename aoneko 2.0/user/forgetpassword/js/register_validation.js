function validateRegister()
{

 var username=document.register.username;
 var password=document.register.password;
 var confirmpassword=document.register.confirmpassword;
 var phonenumber=document.register.phonenumber;
 var email=document.register.email;
 var address=document.register.address;
 var gender=document.register.gender;
 var question=document.register.question;
 var answer=document.register.answer;


if(username_validate(username,8,16))
{
    if(password_validate(password,8,16))
    {
        if(confirm_password_validate(confirmpassword,password))
           {
           if(phonenumber_validate(phonenumber))
        {
            if(email_validate(email))
            {
                if(address_validate(address))
                {
                    if(gender_validate(gender))
                    {
                        if(question_validate(question))
                        {
                            if(answer_validate(answer))
                            {
                                }
                                }
                    }
                }
            }
        }
    }
else
{
  return false;
}
}
}
}

//Username Validate
function username_validate(username,min,max)
    {

        if(username.value==null || username.value=="" || username.value.length<min || username.value.length>max)
        {
        //window.alert("Please Enter The Username And Enter The Value Between "+min+" to "+max+".");
        $('#username_error').css({ "display": "inline" });
        
            return false;
        }
        if(username.value!=null || username.value!="" || username.value.length<min || username.value.length>max)
            {
         $('#username_error').css({ "display": "none" }); 
        return true;
            }
       
    }



//Password Validate
function password_validate(password,minium,maxium)
    {
     
    if(password.value=="null" ||password.value=="" ||password.value.length<minium ||password.value.length>maxium)
    {
     //alert("Passwords Character Must Be Between "+min+" to "+max+".");
    $('#password_error').css({ "display": "inline" });
        
     //pass.focus();
     return false;
    }
    if(password.value!="null" || password.value!="" ||password.value.length<minium || password.value.length>maxium)
    {
    $('#password_error').css({ "display": "none" });
     return true;
    }
    }



//Confirm Password Validate
function confirm_password_validate(confirmpassword,password)
    {
    
    if(confirmpassword.value!=password.value)
    {
    //alert("Passwords and Confirmation Passwords are mis-match");
    //confirmpassword.focus();
    $('#confirmpassword_error').css({ "display": "inline" });
     return false;
    }
     if(confirmpassword.value==password.value)
     {
      $('#password_error').css({ "display": "none" });   
      return true;
     }    
    }

//Phonenumber Validate

function phonenumber_validate(phonenumber)
    {
     var phone_num=/^[0-9]+$/
     if(phonenumber.value.match(phone_num))
     {
      $('#phonenumber_error').css({ "display": "none" });     
      return true;
     }
     else
     {
      //alert("Please Enter The Number Only In Phonenumber")
      $('#phonenumber_error').css({ "display": "inline" });
         //phonenumber.focus;
      return false;
     }
    }

//Email Validate
function email_validate(email)
    {
     var email_letter=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
     if(email.value.match(email_letter))
     {
        $('#email_error').css({ "display": "none" });
        return true;
     }
     else
     {
      //alert("You Have Entered The Invalid Email Address");
     $('#email_error').css({ "display": "inline" }); 
     return false;
        
     }
    }

//Address Validate
function address_validate(address)
    {
    if(address.value==null || address.value=="")
    {
     //alert("Please Enter The Address");
     //address.focus();
     $('#address_error').css({ "display": "inline" }); 
        return false;
    }
    else
    {
     $('#address_error').css({ "display": "none" });     
     return true;
    }
    }

//Gender Validate
function gender_validate(gender)
    {
     if(gender.value=="Default")
     {
      alert("Select Your Gender");
      gender.focus();
      return false;
     }
     else
     {
      return true;
     }
    }

//Question Validate
function question_validate(question)
    {
     if(question.value=="Default")
     {
      alert("Select Your Security Question to Answer");
      question.focus();
      return false;
     }
    else
    {
        return true;
    }
    }
//Answer Validate
function answer_validate(answer)
    {

    if(answer.value==null || answer.value=="")
    {
    //alert("Please Answer The Security Question");
    //answer.focus;
     $('#answer_error').css({ "display": "inline" });
     return false;
    }
    else
    {
     $('#answer_error').css({ "display": "none" });
     return true;
    }
    }
