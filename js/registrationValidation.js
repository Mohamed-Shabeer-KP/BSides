function customAlert(invalid_field) {
    bootbox.dialog({
        title: 'Alert',
        message: '<div class="alert alert-danger" role="alert">' + invalid_field + '</div>',
        closeButton: 'true',
        onEscape: 'true',
        className: 'shake animated'
    })
}

function emptyCheck() {
    var name = document.getElementById("name").value;
    var firstemail = document.getElementById("inputEmail").value;
    var secondmail = document.getElementById("inputEmailConfirm").value;
    var phnumber = document.getElementById("phoneNumber").value;
    var firstpassword = document.getElementById("inputPassword").value;
    var secondpassword = document.getElementById("inputConfirmPassword").value;

    if (name == "" || firstemail == "" || secondmail == "" || phnumber == "" || firstpassword == "" || secondpassword == "") {
        customAlert("All fields are required !");
        return false;
    }
    else
        return true;
}

function valPassword() {
    var firstpassword = document.getElementById("inputPassword").value;
    var secondpassword = document.getElementById("inputConfirmPassword").value;
    if (firstpassword == secondpassword) {
        return true;
    }
    else {
        customAlert("<b> Password </b> must be same !");
        return false;
    }
}

function valEmail() {
    var firstemail = document.getElementById("inputEmail").value;
    var secondemail = document.getElementById("inputEmailConfirm").value;

    var regx = new RegExp(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/);
    var valformat = regx.test(firstemail.toLowerCase());

    if (firstemail != "" && secondemail != "") {
        if (firstemail == secondemail) {
            if (valformat == true) {
                return true;
            }
            else {
                customAlert("Invalid <b>Email</b> address !");
                return false;
            }
        }
        else {
            customAlert("<b> Email </b> must be same !");
            return false;
        }
    }
}


function validate() {
    var status = false;
    if (emptyCheck()&&valEmail()&&valPassword())
        status = true;

    if (status != true) {
        return false;
    }
    else
        return true;
}




