<?php
include("con1.php");
$name=$_POST["name"];
$contactno=$_POST["contactno"];
$address=$_POST["address"];
$email=$_POST["email"];
$productid=$_POST["productid"];
$amt=$_POST["amt"];
$date=$_POST["date"];

$query="insert into    order1(name,contactno,address,email,productid,amt,
date) values('$name','$contactno','$address','$email','$productid','$amt','$date')";
$result=mysqli_query($con,$query);
if($result!=NULL)
{
	?>
	<script>
	alert("order Done");
	window.location="myorder.php";
	</script>
<?php
}
else
{
?>
	<script>
	alert("Order not Done");
	window.location="proinfo.php";
	</script>
<?php
}
?>
