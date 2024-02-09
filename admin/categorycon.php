<?php
include("con1.php");
$catname=$_POST["catname"];
$query="insert into category(catname) values('$catname')";
$result=mysqli_query($con,$query);
if($result!=NULL)
{
	header("location:categorymaster.php");
}
else
{
?>
	<script>
	alert("record not inserted");
	window.location="categorymaster.php";
	</script>
<?php
}
?>