function validateForm(){
    var name=document.forms['myform']["name"];
    var email = document.forms["myform"]["email"];
    var phone = document.forms["myform"]["phone"];
  
    if (name.value == "") {
      window.alert("Please enter your name.");
      name.focus();
      return false;
  }
  if (email.value == "") {
      window.alert(
        "Please enter a valid e-mail address.");
      email.focus();
      return false;
  }
  
  if (phone.value.length <= 8) {
      window.alert("phone must be greater than 8 characters");
      password.focus();
      return false;
  }
 
}