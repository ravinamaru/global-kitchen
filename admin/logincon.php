<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:../login.php");
}
else
{

include("con1.php");
$username=$_POST["username"];
$password=$_POST["password"];

$query="insert into login(username,password) values('$username','$password')";
$result=mysqli_query($con,$query);
if($result!=NULL)
{
	header("location:loginmaster.php");
}
else
{
?>
	<script>
	alert("record not inserted");
	window.location="loginmaster.php";
	</script>
<?php
}}
?>