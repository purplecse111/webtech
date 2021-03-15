<?php
$con = mysql_connect('localhost','root');

if($con){
	echo "Connection is successful";
}else{
	echo " No connection";
}
mysql_select_db($con,'foodexpressuserdata')
$user = $_POST['user'];

$mobile = $_POST['mobile'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$query = "insert into userinfodata (user,mobile,email,comments)"
values('$user','$mobile','$email','$comments')

mysql_query($con,$query);

?>