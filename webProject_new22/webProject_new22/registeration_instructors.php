<?php 
$title = " instructor registeration";
include "header.php";




if(isset($_POST['add'])){
    $id=$_POST['pid'];
    $first_name=$_POST['FName'];
    $last_name=$_POST['LName'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $hash=password_hash($password, PASSWORD_DEFAULT);
    $email=$_POST['email'];
    $dob=$_POST['date_b'];
    $subject=$_POST['subject'];
    $major=$_POST['major'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $price=$_POST['price'];
    $gender=$_POST['gender'];

  
  


 

 //   $course_id=$_post['course_id'];

    include "connection1.php";

//prpare qeury
$query_course="INSERT INTO courses SET  course_name='$subject' ,major='$major' ";

$query_id="SELECT * FROM  courses WHERE course_name='$subject' ";
$result_1=mysqli_query($con,$query_course);

$qeury_2 ="SELECT course_id FROM courses WHERE  course_name='$subject' && major='$major' ";
$result_2=mysqli_query($con,$qeury_2);
$item_1=mysqli_fetch_assoc($result_2);


$query="INSERT INTO  instructors SET 
instructor_id='$id', 
first_name='$first_name' ,
price='$price',
last_name='$last_name',
user_name='$username',
password='$hash',
email='$email',
dob='$dob',
major= '$major',
date= '$date' ,
time='$time' ,
gender ='$gender',course_id ='$item_1[course_id]'

 ";


                                                                         
//excute
$result=mysqli_query($con,$query);

//pricess
if($result==true)
{
   
   header("location: instructor_profile.php?ids=$id");
   
}

  
    
}

?>

    <head>
        <h1>SIGN UP</h1>
        <link rel="stylesheet" type="text/css" href="css\regInstructor.css">
    </head>

    <body style="background-image: url(assets/background.png);">
        <main>


        <form id="add_instructor" name="submit" method="POST" action="registeration_instructors.php">
           
                

            <table>
            <tr>
                    <th>
                    <label for = "id"> instructor id </label>
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
                    <input type = "text" name = "FName" required/>
                 
                    </td>
                </tr>
                    <tr>
                    <th>
                    <label for = "LName"> Last Name </label>
                    </th>
                    <td>
                    <input type = "text" name = "LName" required/>
             
                    </td>
                </tr>
                    
                <tr>
                    <th>
                    <label for = "username"> UserName </label>
                    </th>
                    <td>
                    <input type = "text" name = "username" required/>
                 
                    </td>
                </tr>
                 
                <tr>
                    <th>
                    <label for = "password">PassWord</label>
                    </th>
                    <td>
                    <input type = "password" name = "password" required/>
                 
                    </td>
                </tr>
                
                <tr>
                    <th>
                    <label for = "email">Email</label>
                    </th>
                    <td>
                    <input type = "email" name = "email" required/>  
               
                    </td>
                </tr>
                
                <tr>
                    <th>
                    <label for = "date">Date Of Birth </label>
                    </th>
                    <td>
                    <input type = "date" name = "date_b"required/>
                
                    </td>
    
                </tr>
                
                <tr>

                    <th>Enter your course</th>
                    <td>
                    
                    <input type = "text" name = "subject"required/>
                            <br>
                       
                       
                            </td>

                </tr>
                <tr>
                    <th>
                    <label for = "major">select major for subject </label>
                    </th>
                    <td>
                   <select name="major" required>
                   <option value="CS" selected>CS</option>
                   <option value="IS">IS</option>
                   <option value="CN">CN</option>
                   </select>
                
               
                    </td>
    
                </tr>
                
                
                <tr>
                    <td colspan = "2">
                    <label style="text-align: center;" ><strong> Avaliable Time</strong> </label>
                    
               
                    </td>
                    
                </tr>
                    
                    
                   
                    <tabel>
                        <tr>
                            <th>

                            <input type = "date" name = "date" required/>
                        </th> <td><input type = "time" name = "time" required/></td>
                       
                        </tr>
                        <tr>
                    <th>
                    <label for = "price">price per an hour</label>
                    </th>
                    <td>
                    <input type = "number" name = "price" required/>
                
                    </td>
    
                </tr>
                       
                    </tabel>
                    <tr>
                    <td colspan = "2">
                    <label style="text-align: center;" ><strong> Gender</strong> </label>
              
               
                    </td>
                    
                </tr>
               
                        <tr>
                            <th>

                         
                            <input type = "radio" name = "gender" value="male"/> male
                        </th> <th><input type = "radio" name = "gender" value="female"/>female</th>
                       
                        </tr>

                
               
     
            </table>
    
                <input type="submit" value="add" name="add" id="add" />


            </form>
      
            
      
        </main>
        <script type="text/javascript" src="js/script.js"> </script>
    </body>

<?php include  "footer.php" ?>