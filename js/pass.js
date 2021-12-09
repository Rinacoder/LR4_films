var re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
var myMail = document.getElementById('email').value;
var valid = re.test(myMail);

var pass1 = document.getElementById('password').value;
var pass2 = document.getElementById('password_cop').value;
var reg_b = document.getElementById('registrationBatton');


reg_b.onclick = function(){
  if (pass2 == pass1)
{
  console.log('пароли совпадают');
}
else{
   console.log('пароли не совпадают');   
}
}