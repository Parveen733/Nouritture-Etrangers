function check(form)
{
 
 if(form.userid.value == "cedvic" && form.pswrd.value == "web123")
  {
    window.location.href = 'HTML/Homepage.html';
  }
    else if(form.userid.value == "" && form.pswrd.value == "") {
        alert("OOhhoo!!! UserName and Password cannot be empty!!")
    }
 else
 {
   alert("The User Name Or Password is Incorrect!")
  }
}

