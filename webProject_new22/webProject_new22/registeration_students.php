<?php 
$title = "student regiteration";
include "header.php";
if(isset($_POST['add']))
{
    $student_id=$_POST['pid'];
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $hash=password_hash($password, PASSWORD_DEFAULT);
    $email=$_POST['email'];
    $dob=$_POST['date_b'];
    $Level=$_POST['level'];


    include "connection1.php";

    //prpare qeury
    $query="INSERT INTO  students SET 
    student_id='$student_id', 
    FName='$FName' ,
    LName='$LName',
    username='$username',
    password='$hash',
    email='$email',
    date='$dob',
    Level ='$Level'

 ";

 //excute
$result=mysqli_query($con,$query);

//pricess
if($result==true)
{

   header("location: student_profile.php?ids=$student_id&L=$Level");
   
}

}


?>

    <head>
        <h1>SIGN UP </h1>
        <link rel="stylesheet" type="text/css" href="css\regStudent.css">
        
    </head>

    <body style="background-image: url(assets/background.png);">
        <main>
        <form id="add_students" name="submit" method="POST" action="registeration_students.php">
               

            <table>
            <tr>
                    <th>
                    <label for = "id"> student id </label>
                    </th>
                    <td>
                    <input type = "text" name = "pid"/>
                 
                    </td>
                </tr>
                <tr>
                    <th>
                    <label for = "FName"> First Name </label>
                    </th>
                    <td>
                    <input type = "text" name = "FName"/>
                
                    </td>
                </tr>

                <tr>
                    <th>
                        <label for = "LName"> Last Name </label>
                        </th>
                        <td>
                        <input type = "text" name = "LName"/>
                
                        </td>
                </tr>
                   
                <tr>
                    <th>
                    <label for = "username"> UserName </label>
                    </th>
                    <td>
                    <input type = "text" name = "username"/>
        
                    </td>
                </tr>
                 
                <tr>
                    <th>
                    <label for = "password">PassWord</label>
                    </th>
                    <td>
                    <input type = "password" name = "password"/>
             
                    </td>
                </tr>
                
                <tr>
                    <th>
                    <label for = "email">Email</label>
                    </th>
                    <td>
                    <input type = "email" name = "email"/>  
             
                    </td>
                </tr>
                
                <tr>
                    <th>
                    <label for = "date">Date Of Birth </label>
                    </th>
                    <td>
                    <input type = "date" name = "date_b"/>
            
                    </td>
    
                </tr>
                
                <tr>
                    <th>
                    <lebel for = "level">Level</lebel>
                    </th>
                    <td>
                    <select name = "level"> 
                        <option   selected>1</option>
                        <option >2</option>
                        <option >3</option>
                        <option>4</option>
                        <option >5</option>
                        <option >6</option>
                        <option >7</option>
                        <option >8</option> 
                    </select>
               
               
                    </td>
                </tr>
            </table>
                
                <br><br>
                <input type="submit" value="add" name="add" id="add" onclick= "vaildate()" />
                


               

            </form>
        </main>
        
    </body>

<?php include  "footer.php" ?>