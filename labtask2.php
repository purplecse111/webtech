<!DOCTYPE html>
<html>
<body>
<?php


myTest();

echo "<p>username: $x</p>";
echo "<p>password: $x</p>";
echo "<p>gender: $x</p>";
echo "<p>email: $x</p>";
echo "<p>phoneCode: $x</p>";
echo "<p>phone: $x</p>";



?>

<?php
$username = $_POST["username"];
$password =$_POST["password"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$phoneCode = $_POST["phoneCode"];
$phone = $_POST["phone"];

if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)) {
	$host = "localhost" ;
	$dbUsername = "frontacc" ;
	$dbPassword = ""
	$dbname = "frontacc"

	$conn = new mysqli($host, $dbUsername,$dbPassword,$dbname);
	if(mysqli connect error()){
		die('Connect Error('. musqli_connect_error().')'. mysqli_connect_error());
	} else {
		
		$INSERT = "INSERT Into register (username,password,gender,email,phonecode,phone) values (?,?,?,?,?,?)" ;
		
        $stmt->bind_result($email);
		$stmt->store_result();
		$rrum = $stmt->num_rows;	
		$stmt = $conn->prepared($SELECT);
	
		$stmt->bind_param("s",$email);$Select = "Select email From register Where email=? Limit 1";
		$stmt->execute();
		
		

		if ($rrum==0){
			$stmt->close();
			$stmt = $conn->prpared($INSERT);
			$stmt->bind_param("ssssii",$username,$password,$gender,$email,$phonecode,$phone);
			$stmt->execute();
			echo "New record inserted successfully" ;
					}
					else {
						echo "somebody already register using this email";
					}
					
					$conn->close();
					$stmt->close();
					
	}

}else {
	echo "All field are required";
	die();
}
?>
</body>
</html>