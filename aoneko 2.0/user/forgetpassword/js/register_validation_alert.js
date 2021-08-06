function validateRegisterAlert()
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


if(username_validate_alert(username,8,16))
{
    if(password_validate_alert(password,8,16))
    {
        if(confirm_password_validate_alert(confirmpassword,password))
           {
           if(phonenumber_validate_alert(phonenumber))
        {
            if(email_validate_alert(email))
            {
                if(address_validate_alert(address))
                {
                    if(gender_validate_alert(gender))
                    {
                        if(question_validate_alert(question))
                        {
                            if(answer_validate_alert(answer))
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
function username_validate_alert(username,min,max)
    {

        if(username.value==null || username.value=="" || username.value.length<min || username.value.length>max)
        {
        window.alert("Please Enter The Username And Enter The Value Between "+min+" to "+max+".");
        window.location.href="#";

            return false;
        }
       else
            {

        return true;
            }

    }



//Password Validate
function password_validate_alert(password,min,max)
    {
     var pass=password.value.length;
    if(pass==0 ||pass<min||pass>max)
    {
     alert("Passwords Character Must Be Between "+min+" to "+max+".");
     pass.focus();
     return false;
     window.location.href="#";
    }
    else
    {
     return true;
    }
    }


//Confirm Password Validate
function confirm_password_validate_alert(confirmpassword,password)
    {
     if(confirmpassword.value==password.value)
     {
      return true;
     }
    else
    {
    alert("Passwords and Confirmation Passwords are mis-match");
    confirmpassword.focus();
     return false;
     window.location.href="#";
     window.stop();
    }
    }


//Phonenumber Validate

function phonenumber_validate_alert(phonenumber)
    {
     var phone_num=/^[0-9]+$/
     if(phonenumber.value.match(phone_num))
     {

      return true;
     }
     else
     {
      alert("Please Enter The Number Only In Phonenumber")

         phonenumber.focus;
      return false;
      window.location.href="#";
      window.stop();
     }
    }

//Email Validate
function email_validate_alert(email)
    {
     var email_letter=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
     if(email.value.match(email_letter))
     {
        $('#email_error').css({ "display": "none" });
        return true;
     }
     else
     {
      alert("You Have Entered The Invalid Email Address");
      window.location.href="#";
      window.stop();
     return false;

     }
    }

//Address Validate
function address_validate_alert(address)
    {
    if(address.value==null || address.value=="")
    {
     alert("Please Enter The Address");
     address.focus();
     window.location.href="#";
     window.stop();
        return false;
    }
    else
    {

     return true;
    }
    }

//Gender Validate
function gender_validate_alert(gender)
    {
     if(gender.value=="Default")
     {
      alert("Select Your Gender");
      gender.focus();
      return false;
      window.location.href="#";
      window.stop();
     }
     else
     {
      return true;
     }
    }

//Question Validate
function question_validate_alert(question)
    {
     if(question.value=="Default")
     {
      alert("Select Your Security Question to Answer");
      question.focus();
      return false;
      window.location.href="#";
      window.stop();
     }
    else
    {
        return true;
    }
    }
//Answer Validate
function answer_validate_alert(answer)
    {

    if(answer.value==null || answer.value=="")
    {
    alert("Please Answer The Security Question");
    answer.focus;

     return false;
     window.location.href="#";
     window.stop();
    }
    else
    {

     return true;
    }
    }
