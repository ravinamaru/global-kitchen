<?php

include("con1.php");
$id=$_GET["id"];
$query="delete from login where id=".$id;
$result=mysqli_query($con,$query);
if($result!=NULL)
{
	header("location:loginmaster.php");
}
else
{
?>
	<script>
	alert("Record Not Deleted");
	window.location="loginmaster.php";
	</script>
<?php
}
?>