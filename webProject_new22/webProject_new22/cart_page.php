<?php
$title="ADD CART";
include "header.php";
include "connection1.php";
$total_price=0;
$cart=array();

 if(isset($_GET['IDV']))
 {
    $id=$_GET['IDV'];
    
    
    $qeury ="SELECT * FROM instructors WHERE instructor_id=$id";
    $qeury2 ="SELECT course_id FROM instructors WHERE instructor_id=$id";
    $qeury3 ="SELECT price FROM instructors WHERE instructor_id=$id";
   
   
    $result=mysqli_query($con,$qeury);
    $result2=mysqli_query($con,$qeury2);
    $result3=mysqli_query($con,$qeury3);
   
    $item=mysqli_fetch_assoc($result);
    $item2=mysqli_fetch_assoc($result2);
    $item3=mysqli_fetch_assoc($result3);
   
   
    
   
    $query5="SELECT * FROM cart ";
    $result5=mysqli_query($con,$query5);
    
   
    
   
   
    while($row=mysqli_fetch_assoc($result5))
    {
        
        $cart[$row['cart_id']]=array(
            "cart_id"=>$row['cart_id'],
            "price" => $row['price'],
             "course_name" => $row['course_name']
            
         
          
   
        );
   
    };
   
 }
 else if(isset($_GET['delete']))
 {
    
    $cartid=$_GET['item'];
    
    $qeury8 ="DELETE FROM cart WHERE cart_id=$cartid";
    $result8=mysqli_query($con,$qeury8);

   
   
    
   
    $query5="SELECT * FROM cart ";
    $result5=mysqli_query($con,$query5);
    
   
    
   
   
    while($row=mysqli_fetch_assoc($result5))
    {
        
        $cart[$row['cart_id']]=array(
            "cart_id"=>$row['cart_id'],
            "price" => $row['price'],
             "course_name" => $row['course_name']
            
         
          
   
        );
   
    };
    



 }


?>

<head>
<h1>Modify Item</h1>
<link rel="stylesheet" type="text/css" href="css/cart.css">
</head>
 
    
    
  <form id="contact" name="modify" method="GET" action="cart_page.php">
         <table id = tabel> 
<tr>

<td></td>
<td> course </td>
<td> its price</td>


</tr>
         
         <?php foreach($cart as $item ){?>
            
            
            <tr>
                 <th>
                 <input type="radio" name="item" id="item" value="<?php echo $item['cart_id']?>"/>
                 </th>
                 <th>
                 <?php echo  $item['course_name']?>
         </th>
                 <td>
                     <label><?php echo $item['price']?></label>
                 </td>
             </tr>
             <?php } ?>
        
         </table>
         <form method="GET" action="cart_page.php" >
          <input id = dele type="submit" name="delete" value="Delete" />

          
         </form>

         <form method="GET" action="payment.php" name="check">
         <?php  
    $query9="SELECT price , hourse ,cart_id FROM cart";
    $result9=mysqli_query($con,$query9);
      
    $total=array();
	while($row=mysqli_fetch_assoc($result9))
	{
		
		$total[$row['cart_id']]=array(
			"price" => $row['price'],
		  "hourse" =>$row['hourse']
		
		);

	};

    foreach($total as $item )
    {
         $total_price=$total_price+($item['price']*$item['hourse']);

    }
    ?>
         <input  id = check  type="submit" name ="checkout" value="checkout" />
         <input value="<?php echo  $total_price?>" name="total" hidden>
      
         </form>
    
        

<?php include "footer.php"; ?>