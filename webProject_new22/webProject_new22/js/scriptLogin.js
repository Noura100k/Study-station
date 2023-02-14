function vaildate()
{
  var a = document.getElementsByClassName("mandatory");

  var userName = document.login.name.value;
  var pass = document.login.password.value;

  
 
  if(userName == "")
  {
    a[0].style.visibility = "visible";

  }
  else
  {
    a[0].style.visibility = "hidden";
  }

  if(pass == "")
  {
    a[1].style.visibility = "visible";

  }
  else
  {
    a[1].style.visibility = "hidden";
  }


 
  
}
