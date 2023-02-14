<?php 
$title = "student profile";
include "header.php";

include "connection1.php";

if(isset($_GET['ids']))
 {
    $id=$_GET['ids'];
    $name = $_GET['L'];

    $query = "SELECT * FROM students WHERE student_id = $id";

    $result = mysqli_query($con,$query);

    $student=mysqli_fetch_assoc($result);
}
else if(isset($_GET['update'])||isset($_GET['id'])||isset($_GET['form']))
{
    $id=$_GET['id'];
   
  

    $query = "SELECT * FROM students WHERE student_id = $id";

    
    $result = mysqli_query($con,$query);

    $student=mysqli_fetch_assoc($result);
    
    $name = $_GET['L'];

    $query = "UPDATE students SET Level = '$name' WHERE student_id = $id ";
    
    $result = mysqli_query($con, $query);

}

?>

    <head>
        <link rel="stylesheet" type="text/css" href="css\profiles.css">
    </head>
    <body style="background-image: url(assets/background.png);">

        <section>
        
            
            <table>
            <form  name="form" method="GET" action="student_profile.php" enctype="multipart/form-data">
                <tr>
                    <td><img src="Assets/student-icon.png"></td>
                    <td><h1>YOUR PROFILE</h1></td>
                </tr>
                <tr>
                    <td class="title"><h3>Name:</h3></td>
                    <td class="information"><?php echo $student["FName"]." ".$student["LName"]?></td>
                </tr>
                <tr>
                    <td class="title"><h3>Level:</h3></td>
                    <td class="information"><?php echo $name?></td>
                </tr>
                <tr>
                    <td class="title"><h3>Email:</h3></td>
                    <td class="information"><?php echo $student["email"]?></td>
                </tr>
                <tr>
                    <td class="title"><h3>Update your level</h3></td>
                    <td class="information">
                       <select name = "L"> 
                        <option   selected>1</option>
                        <option >2</option>
                        <option >3</option>
                        <option>4</option>
                        <option >5</option>
                        <option >6</option>
                        <option >7</option>
                        <option >8</option> 
                    </select></td>
                    <td>
                </tr>
               
        
           
            <tr><td><input type="submit" id="update" name="update" value= "Update"></td></tr>
            <input type="text" name="L"  value="<?php echo $name?>" hidden/>
            <input type="text" name="id"  value="<?php echo $id?>" hidden/>
            
                </form>
            </table>


        </section>

 
        <div id="button">
           
           <form name="logout" action="Home_page.php" method="GET">
            <input type="submit" name="log_out" value="Log Out">
            <input type="text" name="statue"  value="<?php echo 1?>" hidden/>
            </form>
           
        </div>


        
    </body>

<?php include  "footer.php" ?>