<?php
$title="ADD CART";
include "header.php";
include "connection1.php";

 if(isset($_GET['id']))
 {
     $id=$_GET['id'];


    $qeury ="SELECT * FROM instructors WHERE instructor_id=$id";
    $qeury2 ="SELECT course_id FROM instructors WHERE instructor_id=$id";
    $result2=mysqli_query($con,$qeury2);
    $item2=mysqli_fetch_assoc($result2);
    $qeury4 ="SELECT course_name FROM  courses WHERE course_id='$item2[course_id]'";
    $result4=mysqli_query($con,$qeury4);
    $item4=mysqli_fetch_assoc($result4);
    

   
    $result=mysqli_query($con,$qeury);
    
   
    $item=mysqli_fetch_assoc($result);
 }else if(isset($_GET['ID']))
 {
  
     $id=$_GET['ID'];
     $price=$_GET['price'];
     $quantity=$_GET['q'];
   

    $qeury ="SELECT * FROM instructors WHERE instructor_id=$id";
    $qeury2 ="SELECT course_id FROM instructors WHERE instructor_id=$id";
    $qeury3 ="SELECT price FROM instructors WHERE instructor_id=$id";
   
   
    $result=mysqli_query($con,$qeury);
    $result2=mysqli_query($con,$qeury2);
    $result3=mysqli_query($con,$qeury3);
    

    $item=mysqli_fetch_assoc($result);
    $item2=mysqli_fetch_assoc($result2);
    $qeury4 ="SELECT course_name FROM  courses WHERE course_id='$item2[course_id]'";
    $result4=mysqli_query($con,$qeury4);
    $item3=mysqli_fetch_assoc($result3);
    $item4=mysqli_fetch_assoc($result4);
    
   //course_id='$item2[course_id]'
    $qeury5="INSERT INTO cart SET  course_name='$item4[course_name]' ,price=' $item3[price]' , hourse='$quantity'";
    $result5=mysqli_query($con,$qeury5);

    
    

    

     
 }

 
?>
 <head>
        
        <link rel="stylesheet" type="text/css" href="css\add_cart.css">
    </head>
    <body  style="background-image: url(assets/background.png);">

<section>
   <h1> view details</h1>
    

  
<article  class="pic"> 
  
    
    <?php if($item['gender']=='on'){?>
     <img id="img_f" src=Assets\female.png alt="imge none">
    <?php } else {?>
     <img id="img_m"  src=Assets\male.png alt="imge none">
     <?php } ?>
   
   
    <p id="text" >name is: <?php echo $item["first_name"]." ".$item["last_name"]?></p>
    </article>


    <article class="info"> 
      
    <p>Course name: <?php echo $item4['course_name'] ?></p>
    <p> <?php echo "Price per an houre: ".$item["price"]?>SAR</p>
    
    <p> Email: <?php echo $item["email"]?></p>
    <p> <?php echo "Avaliable: ".$item["date"]." ".$item["time"]?></p>

    <form action="add_to_cart.php" method="GET">
    <input type="number" id="houre" name="q" placeholder="how many houres" />
    <input type="submit" id="add"  name="adding" value="add to cart"/>
     <input value="<?php echo $id?>" name="ID" hidden>
     <input value="<?php echo $item['price']?>" name="price" hidden>
     
    </form>
    </form>
    </form>

    <form action="cart_page.php" method="GET">
    <input type="submit" id="add"  name="view" value="view cart"/>
 
    
    <input value="<?php echo $id?>" name="IDV" hidden>
    </form>
  
  

</article>


    </section>
    </body>


<?php include("footer.php")?>