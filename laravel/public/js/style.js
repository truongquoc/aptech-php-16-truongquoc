function myfunction(){
    var x =document.getElementById('email').value;
    document.getElementById('demo').innerHTML=x;
}

function password_validation(PasswordInput){
    var psasword = document.getElementById('password');
    var err=[];
    if(!/^.{7,15}$/.test(PasswordInput)){
        err.push('Password must be betteen 7-15 characters. ');

    }
    if(!/\d/.test(PasswordInput)){
        error.push('Must contain at least one number. ');
    }
    if(!/[a-z]/.test(PasswordInput)){
        error.push('Must contain a lowercase letter. ');
    }
    if(!/[A-Z]/.test(PasswordInput)){
        error.push('Must contain a uppercase letter');
    }

}