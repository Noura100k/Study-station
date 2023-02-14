	
	<?php
	$title="courses";
	include "header.php";
	
    //establish a connection to database
	include "connection1.php";
	//prepare query
	$query="SELECT * FROM instructors";
	//ask database for resulte excute the query
	$result=mysqli_query($con,$query);
	//process the data
	$instructors=array();
	while($row=mysqli_fetch_assoc($result))
	{
		
		$instructors[$row['instructor_id']]=array(
			"instructor_id" => $row['instructor_id'],
		  "first_name" =>$row['first_name']
		  ,"last_name"=> $row['last_name']
		  ,"password" =>$row['password']
		  , "email" =>$row['email']
		  ,"DOB"=> $row['dob']
		  ,"password" =>$row['password']
		  , "time" =>$row['time']
		  ,"date"=> $row['date']
		  ,"price"=>$row["price"]
		  ,"gender"=>$row["gender"]
		  

		);

	};

	?>
	<head>

	<link rel="stylesheet" type="text/css" href="css/instructor.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
	</head>
	<script src="instructor.js"> </script>
	<style>
   #first ,#second ,#third ,#fourth ,#five
   {
	   color: orange;
	   
   }



    </style>
	<body style="background-image: url(assets/background.png);">

		<div id="instructors">
	<div class="instructor center" >
		<ul>
	
		
		<br/><br/>
		<?php foreach($instructors as $item ){?>
			<li>
		
          
			<?php if($item['gender']=='female'){?>
             <img src=Assets\female.png alt="imge none">
              <?php } else {?>
              <img src=Assets\male.png alt="imge none">
               <?php } ?>
		  <p id="inst"><?php echo "Name: ".$item["first_name"]." ". $item["last_name"]."<br>"."price per an houre: ".$item["price"]?></p>
		  <div class="rate">
			<span class="fa fa-star checked" id="first"></span>
			<span class="fa fa-star checked"  id="second"></span>
			<span class="fa fa-star checked"   id="third"></span>
			<span class="fa fa-star" id="fourth"></span>
			<span class="fa fa-star" id="five"></span>

		   </div>
		   <a href="add_to_cart.php?id=<?php echo $item["instructor_id"] ?>"> <input type="submit" id="add" value="start learning"/></a>
		  <?php } ?>
		</li>
		</ul>
	</div>
		</div>
		
			  </body>

<?php
	
	include "footer.php";

	?>



	