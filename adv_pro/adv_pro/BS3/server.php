<?php
$conn=mysqli_connect("localhost","root","","advocate");
$errors=array();
extract($_POST);

if($password_1 != $password_2)
{
	array_push($errors,"Two passwords do not match");

}

if(count($errors) == 0){
	$password=md5($password_1);
$sql="insert into admin VALUES('','$email','$password')";
$result=mysqli_query($conn,$sql);
if ($result) {
	echo "<script>alert('Password Reset Successfully');window.location.href='login.php';</script>";
}else{
	echo "<script>alert('Not Inserted');</script>";
}
}
else
{
	echo "<script>alert('Two passwords do not match');window.location.href='password.php';</script>";

}
?>
