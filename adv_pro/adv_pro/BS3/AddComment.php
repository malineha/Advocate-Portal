<?php
$conn=mysqli_connect("localhost","root","","advocate");
extract($_POST);
$comments=mysqli_real_escape_string($conn, $_POST['comments']);
$sql="insert into comments VALUES('','$name','$email','$comments')";
$result=mysqli_query($conn,$sql);
if ($result) {
	echo "<script>alert('Inserted Successfully');window.location.href='index.html';</script>";
}else{
	echo "<script>alert('Not Inserted');</script>";
}
?>