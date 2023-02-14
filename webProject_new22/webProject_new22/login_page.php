<?php 
$title = "log in";
include "header.php";
include "connection1.php";
$state=0;
if(isset($_POST['button']))
{
     $username=$_POST['name'];
     $pass=$_POST['password'];

     $query="SELECT * FROM students WHERE username='$username'";

	$result=mysqli_query($con,$query);
    $student=array();

    while($row=mysqli_fetch_assoc($result))
    {
        
        $student[$row['student_id']]=array(
            "username"=>$row['username'],
            "password" => $row['password']

   
        );
   
    };
    
    foreach( $student as $item)
    {
        if($item['username']==$username && password_verify($pass,$item['password']))
        {
           
            $state=1;
           
        }

        }

        $query2="SELECT * FROM instructors WHERE user_name='$username'";

        $result2=mysqli_query($con,$query2);
        $instructors=array();
    
        while($row=mysqli_fetch_assoc($result2))
        {
            
            $instructors[$row['instructor_id']]=array(
                "user_name"=>$row['user_name'],
                "password" => $row['password']
    
       
            );
       
        };

     
        foreach( $instructors as $item)
        {
            if($item['user_name']==$username && password_verify($pass,$item['password']))
            {
               
                $state=1;
               
            }
    
            }
    }
   if($state==1)
    {
        header("location:Home_page.php ");
    }
  

?>

    <head>
        <h1>LogIn Page</h1>
        <link rel="stylesheet" type="text/css" href="css\login.css">
    </head>
    <body style="background-image: url(assets/background.png);">
        <form id = log name="login" method="POST" action="login_page.php">
                <table>
                    <br><br>
                    <tr>
                        <th>
                            <label for="name">UserName</label>
                        </th>
                        <td>
                            <input type="text" name="name" id="name">
                            <span class="mandatory" id="ename">This is required</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="password">PassWord</label>
                        </th>
                        <td>
                            <input type="password" name="password" id="password">
                            <span class="mandatory" id="mandatory">This is required</span>
                        </td>
                    </tr>
                    
                </table>
               
                <br>
            <input type="submit"  name="button" id ="button" value="log in" onclick="vaildate()"/>
             
            <br>
            <a href="signUp_page.php"><label for = "ask">you don't have an account</label></a>



            </form>
        <script type="text/javascript" src="js/scriptLogin.js"> </script>
    </body>
<?php include  "footer.php" ?>
