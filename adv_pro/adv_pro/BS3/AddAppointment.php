<?php
$conn=mysqli_connect("localhost","root","","advocate");
extract($_POST);
$sql="insert into appointment VALUES('$id','$name','$email','$mobile','$add_line1','$add_line2','$city','$zip','$date','$selector1','$case','Pending')";
$result=mysqli_query($conn,$sql);
if ($result) {
	echo "<script>alert('Inserted Successfully');window.location.href='index.html';</script>";
}else{
	echo "<script>alert('Not Inserted');</script>";
}
?>
