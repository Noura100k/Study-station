function vaildate()
{
  var a = document.getElementsByClassName("mandatory");
  var fName = document.instructor.FName.value;
  var lname = document.instructor.LName.value;
  var userName = document.instructor.username.value;
  var pass = document.instructor.password.value;
  var email = document.instructor.email.value;
  var date = document.instructor.date.value;
  var subject = document.instructor.subject;

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

  if(!subject.checked)
  {
    a[6].style.visibility = "visible";

  }
  else
  {
    a[6].style.visibility = "hidden";
  }
  

  
  

}