<?php 
$title = "instructor profile";
include "header.php";

include "connection1.php";

if(isset($_GET['ids']))
 {
    $id=$_GET['ids'];

    $query = "SELECT * FROM instructors WHERE instructor_id = $id ";

    $result = mysqli_query($con,$query);

    $instructor=mysqli_fetch_assoc($result);
 } 
?>

    <head>
        <link rel="stylesheet" type="text/css" href="css\profiles.css">
    </head>
    <body style="background-image: url(assets/background.png);">

        <section>
            
            <table>
                <tr>
                    <td><img src="Assets/instructor-icon.png"></td>
                    <td><h1>YOUR PROFILE</h1></td>
                </tr>
                <tr>
                    <td class="title"><h3>Name:</h3></td>
                    <td class="information"><?php echo $instructor["first_name"]." ".$instructor["last_name"]?></td>
                </tr>
                <tr>
                    <td class="title"><h3>Major:</h3></td>
                    <td class="information"><?php echo $instructor["major"]?></td>
                </tr>
                <tr>
                    <td class="title"><h3>Email:</h3></td>
                    <td class="information"><?php echo $instructor["email"]?></td>
                </tr>
            </table>

        </section>

      
        
    </body>

<?php include  "footer.php" ?>