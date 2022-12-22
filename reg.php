<?php
session_start();
error_reporting(0);
include('lib/dbcon.php');
// Code user Registration
if(isset($_POST['submit']))
{

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$lname=$_POST['lname'];
$Gender=$_POST['Gender'];
$birthday=$_POST['birthday'];
$residence=$_POST['residence'];
$pob=$_POST['pob'];
$ministry=$_POST['ministry'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];




$query=mysqli_query($con,"insert into members (fname,sname,lname,Gender,birthday,residence,pob,ministry,mobile,email,thumbnail,password,id) values('$fname','$sname','$lname','$Gender','$birthday','$residence','$pob','$ministry','$mobile','$email','uploads/none.png','$password','2')");
if($query)
{
	header("Location: index.php");
}
else{
echo "<script>alert('Not register something went worng');</script>";
}
}




?>