<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:../login.php");
}
else
{
include("con1.php");
$id=$_POST["id"];
$username=$_POST["username"];
$password=$_POST["password"];
$query="update login set username='$username',password='$password' where id=".$id;
$result=mysqli_query($con,$query);
if($result!=NULL)
{
	header("location:loginmaster.php");
}
else
{
	echo"Record is not updated";
}
?>
<?php }?>