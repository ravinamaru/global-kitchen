      <?php include("header.php");?>
        <!--##############################-->
		<?php
include("con1.php");
$id=$_GET["id"];
$query="select * from product where id=".$id;
$result=mysqli_query($con,$query);
echo "<table cellpadding='6' cellspacing='6' border='5' class='fonts' background='images/bg_bot.jpg'>
<tr>
    <td colspan='6' align='center'><h2>*********Product Information*********</h2></td>
    
  </tr>";
while($row=mysqli_fetch_array($result))
{	
	echo "<tr><td>Product Name</td><td>";
	echo $row["productname"]."</td></tr>";
	echo "<tr><td>Product Image</td><td>";
	echo "<img src='admin/".$row['productimage']."' height='100' width='100'>&nbsp;&nbsp;"."</td></tr>";
	echo "<tr><td>Product Price</td><td>";
	echo $row["price"]."</td></tr>";
	echo "<tr><td>Product Description</td><td>";
	echo $row["discription"]."</td></tr>";
	echo "<tr><td colspan='2' align='center'>";
	echo "<a href='order.php?id=".$row[0]."'>Oredr Now</a>";
	echo "</td></tr>";
}
echo "</table>";
?>
		
		<!--##############################-->
             
<?php include("footer.php");?>
