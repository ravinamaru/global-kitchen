<?php
include("con1.php");
$item_id=$_POST["id"];
$pname=$_POST["itemnm"];
$price=$_POST["price"];
$image=$_POST["image"];
move_uploaded_file($_FILES['image']['tmp_name'],"image/".$image);
$imagepath="image/".$image;
$category=$_POST["catname"];
$description=$_POST["itemdes"];
$query="UPDATE `item` SET `itemnm` = '$pname', `itemdes` = '$description', `price` = '$price', `category` = '$category',`image` = '$imagepath' WHERE `item`.`id` =". $item_id;
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
	alert("Record Not Updated");
	window location="Itemmaster.php";
</script>
<?php
}
else
{
	header("location:Itemmaster.php");
}
?>