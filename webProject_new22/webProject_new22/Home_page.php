<?php 
$title = "home page";
include "header.php";

include "connection1.php";

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

if(isset($_POST['submit']))
{
	$id=$_POST['subjects'];
	header("location: subject_page2.php?id=$id");
    exit();
}


if(isset($_GET['statue']))
{
	$query = "DELETE FROM CART";

    $result = mysqli_query($con,$query);
}


	
	$query="SELECT * FROM courses";

	$result=mysqli_query($con,$query);

	$courses=array();
	while($row=mysqli_fetch_assoc($result))
	{
		
		$courses[$row['course_id']]=array(
			"course_id"=> $row['course_id'],
		  	"course_name"=>$row['course_name'],
		  	"major"=> $row['major']
		);
	};	
		 
?>

	<div id="background"> <!--  BACKGROUND IMG FOR WHOLE PAGE        --->
 			<img style="width: 600px; height: 600px;"src="assets/HomeImage.svg">
 		</div>

 <!--  main content      --->
 <main>
 	<p>We help you raise your score Start now with your favorite teacher </p>




  <div class="subject">
 		<form id="course" name="course" method="POST" action="Home_Page.php">

 			<select name="subjects">
 				<option value="select" selected>select your subject</option>

				 <?php foreach($courses as $course){ ?>
 				<option value="<?php echo $course["course_id"] ?>"><?php echo $course["course_name"] ?></option>
				<?php } ?>
 			</select>
			 
			 <input value="<?php echo $id?>" name="IDs" hidden>

			 <br>
			 <button name="submit" > search for teacher</button>

 		</form>
  </div>

</main>

<?php include "footer.php" ?>



 

 	

		
