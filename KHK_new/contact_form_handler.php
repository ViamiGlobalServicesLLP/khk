<?php

include "db_config/db_connect.php";
if(isset($_POST['submit']))
{

    $username = $_POST["username"];
$company = $_POST["company"];
$phone_no = $_POST['phone_no'];
$designation = $_POST['designation'];
$email = $_POST['email'];
$country = $_POST['country'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$message = $_POST["message"];


if(empty($username) || empty($company) || empty($phone_no) || empty($designation) || empty($email) ||
	empty($country) || empty($product) || empty($quantity) || empty($message))
    {
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
	} 
    else
{

$sql="INSERT into `contact_details`(`name`, `company`, `contact_no`, `designation`, `email`, `country`, `product`, `quantity`, `message`)
VALUES('$username','$company','$phone_no','$designation','$email','$country','$product','$quantity','$message')";

if(mysqli_query($conn, $sql)){  
   
    echo "
			<div class='border border-2 border-success p-1 m-4' role='alert'>
				<b>Thank you! your message has been sent..!</b>
			</div>
		"; 
   }else{  
   echo "Could not insert record: ". mysqli_error($conn);  
   }  
 
  //header("location:contact.php");
}

}

?>
