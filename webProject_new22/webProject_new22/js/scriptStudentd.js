function vaildate()
{
  var a = document.getElementsByClassName("mandatory");
  var fName = document.submit.FName.value;
  var lname = document.submit.LName.value;
  var userName = document.submit.username.value;
  var pass = document.submit.password.value;
  var email = document.submit.email.value;
  var date = document.submit.date.value;
  var level = document.submit.level;

  if(fName=="")
  {
    a[0].style.visibility="visible";

  }
  else
  {
    a[0].style.visibility="hidden";
  }
  
   if(lname=="")
  {
    a[1].style.visibility="visible";

  }
  else
  {
    a[1].style.visibility = "hidden";
  }
  

  
  if(userName == "")
  {
    a[2].style.visibility = "visible";

  }
  else
  {
    a[2].style.visibility = "hidden";
  }

  if(pass == "")
  {
    a[3].style.visibility = "visible";

  }
  else
  {
    a[3].style.visibility = "hidden";
  }

  if(email == "")
  {
    a[4].style.visibility = "visible";

  }
  else
  {
    a[4].style.visibility = "hidden";
  }

  if(date == "")
  {
    a[5].style.visibility = "visible";

  }
  else
  {
    a[5].style.visibility = "hidden";
  }
  
  
  if(!level.checked)
  {
    a[6].style.visibility = "visible";

  }
  else
  {
    a[6].style.visibility = "hidden";
  }
  
}