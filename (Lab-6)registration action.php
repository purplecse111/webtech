<?php
  $conn = mysqli_connect("localhost", "root", "", "tutorial");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $user_name = $_POST['user_name'];
	  $email= $_POST['email'];
	  $password = $_POST['password'];
	  $address= $_POST['address'];
	  $phone_no= $_POST['phone_no'];
	  
   $sql = "select * from user_registration where user_name= '$user_name' ,email='$email',password = '$password',address='$address',phone='$phone_no'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   
   if($count ==1){
	   echo "Submit";
   }
   else{
	   echo "Error";
   }
   
  }

?>