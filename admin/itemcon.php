<?php
include("con1.php");
$catname=$_POST["category"];
$itemnm=$_POST['itemnm'];
$itemdes=$_POST['itemdes'];
$price=$_POST['price'];
$image=$_POST["image"];
move_uploaded_file($_FILES['image']['tmp_name'],"image/".$image);
$imagepath="image/".$image;
$query="insert into item(category,itemnm,itemdes,price,image)values('$catname','$itemnm','$itemdes','$price','$imagepath')";
$result=mysqli_query($con,$query);
if($result!=NULL)
{
	header("location:itemmaster.php");
}
else
{
?>
	<script>
	alert("record not inserted");
	window.location="itemmaster.php";
	</script>
<?php
}
?>