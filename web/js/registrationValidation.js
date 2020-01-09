function customAlert(invalid_field)
{
      bootbox.dialog({
        title: 'Alert',
        message: '<div class="alert alert-danger" role="alert">'+invalid_field+'</div>',
        closeButton: 'true',
        onEscape: 'true',
        className: 'shake animated'
      })
}

function validate(){
    var status = false;
    if(valPassword() && valEmail())
    status = true;

    if(status != true){
        customAlert("All fields are required !");
        return false;
    }
    else
        return true;
}


function valPassword(){  
    var firstpassword=document.getElementById("inputPassword").value;
    var secondpassword=document.getElementById("inputConfirmPassword").value;
    if(firstpassword==secondpassword){  
    return true;  
    }  
    else{  
    customAlert("<b> Password </b> must be same !");
    return false;  
    }  
 }  

 function valEmail()
 {
    var firstemail=document.getElementById("inputEmail").value;
    var secondemail=document.getElementById("inputEmailConfirm").value;
      
    var regx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var valformat =  regx.test(String(firstemail).toLowerCase());

    if(firstemail!="" && secondemail != "")
    {
    if(firstemail==secondemail){  
        if(valformat==true){
            return true;
        }
        else{
            customAlert("Invalid <b>Email</b> address !"); 
            return false;  
        }
    }  
    else{  
        customAlert("<b> Email </b> must be same !");
        return false;  
    }  
    }

  
 }
