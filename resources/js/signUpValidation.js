(function() {
  "use strict";
  var form  = document.getElementById('signUp');
  form.addEventListener('submit',function(e){
    e.preventDefault();
    checkPassword();
  });
}());


function checkPassword(){
  var password  = document.getElementById('password');
  var password2 = document.getElementById('password2');


   if(password.value !== password2.value ){
    password.value = '';
    password2.value = '';

    password.className   = 'redBorder';
    password2.className  = 'redBorder';

    password.focus();

    return false;
  }
  else{
    document.getElementById('signUp').submit();
  }
}
