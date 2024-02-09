<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:/login.php");
}
else
{


include("con1.php");
$id=$_GET["id"];
$user=$_SESSION['user'];
$query="delete from order1 where id=".$id;
$result=mysqli_query($con,$query);
if($result!=NULL)
{
	header("location:myorder.php");
}
else
{
?>
	<script>
	alert("order not deleted");
	window.location="myorder.php";
	</script>
<?php
}}
?>
