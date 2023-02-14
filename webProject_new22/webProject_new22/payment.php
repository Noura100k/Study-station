<?php $title = "Payment";
include "header.php"; 
 include "connection1.php";

 $total=$_GET['total'];
if(isset($_GET['completePayment'])){
    
    
    $card_number = $_GET['cardNum'];
    $CVC = $_GET['CVC'];
   $card= $card_number.  $CVC ;
    $Ex_Date = $_GET['Date'];
    $method=$_GET['PaymentMethod'];
   
 
  

   $query = "INSERT INTO payment SET  card_number = '$card ' , Ex_Date='$Ex_Date', method='$method'";
   
   $result = mysqli_query($con, $query);
   if($result){
    header("location:payment.php?status=1");
    exit();
}else{
    header("location:payment.php?status=0");
    exit();
}




}


?>

<head>
<h1>Payment</h1>
<link rel="stylesheet" type="text/css" href="css/payment.css">
</head>
 
<div id="content">
    <div class="page section">
    <?php if(isset($_GET['status']) and $_GET['status']==1){ 
           header("location:thank_you.php ")

            ?>
        
        <?php }else if(isset($_GET['status']) and $_GET['status']==0){
              header("location:Error.php ")
            ?>
        
        <?php }else{?>

        <form id="contact" name="pay" method="GET" action="payment.php">
            <table>
                <tr>
                    <th>
                        <label for="price">Total Price</label>
                    </th>
                    <td>
                        <label><?php echo $total ?></label>
                    </td>
                </tr>
               
                <tr>
                    <th>
                        <label for="method">Payment method</label>
                    </th>
                    <td>
                        <select name="PaymentMethod">
                        <option value="select" selected>choose payment method</option>
                        <option value="ApplePay">Apple Pay</option>
                        <option value="PayPal">PayPal</option>
                        <option value="VISA">VISA</option>
                    </td> 
                </tr>
                <tr>
                    <th>
                        <label for="name">Card Information</label>
                    </th>
                    <td>
                        <input type="text" name="cardNum" id="cardNum" placeholder="card number" required/>
                        <input type="text" name="CVC" id="CVC" placeholder="CVC" required/>
                        <input type="date" name="Date" id="Date" placeholder="mm/dd" required/>
                    </td>
                </tr>
              
            </table>
            <div>
            
               <input type="submit" value=" complete Payment" name="completePayment" id="complete Payment" />
            
           </div>
        </form>
        <?php }?>
      
    </div>
</div>
<?php include "footer.php"; ?>