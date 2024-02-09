<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
}
else
{


?>
      <?php include("header.php");?>
        <!--##############################-->
		<?php
include("con1.php");
$date=date('y-m-d');
$user=$_SESSION['user'];
$result=mysqli_query($con,"select productname,name,productimage, productid,amt,date from product as a inner join order1 as b on a.id=b.productid where b.date='$date' and b.name='$user'") or die(mysqli_error());
$count=mysqli_num_rows($result);
if($count!=NULL)
{
echo"<table cellpadding='6' cellspacing='6' frame='box'  class='fonts' background='images/bg_bot.jpg' width='100%' >
 <tr>
    <td colspan='4' align='center'><h2>*************View Products Bill*************</h2></td>
      </tr>
	  <tr><td colspan='4'><hr></td></tr>
	  <tr><th colspan='3' align='left'>Name:-".$user."</th><th align='right'>Date:-".$date."</th></tr>
	   <tr><td colspan='4'><hr></td></tr>
<tr><th>ProductId</th><th>ProductName</th><th>ProductImage</th><th>ProductAmount</th></tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr><td align='center'>";
	echo $row['productid'];
	echo"</td><td align='center'>";
	echo $row['productname'];
	echo"</td><td align='center'>";
	echo "<img src='admin/".$row['productimage']."' height='100' width='100'>&nbsp;&nbsp;";
	echo"</td>";
	echo"<td align='center'>";
	echo $row['amt'];
	echo"</td>";
	echo"</td></tr>";
	}
?>
<?php

	$result1=mysqli_query($con,"SELECT sum(amt) FROM order1 where name='$user' and date='$date'") or die(mysqli_error());
	while($row1=mysqli_fetch_array($result1))
	{
		$total=$row1['sum(amt)'];
	}
	echo" <tr><td colspan='4'><hr></td></tr>
	<tr><th colspan='4' align='center'> Total Amount:-".$total."</th></tr><tr><td colspan='4'><hr></td></tr></table>";
}
else
{?>
	<script>
		alert("There Is No Product Purchased By You Today");
		window.location="proinfo.php";
	</script>
<?php }
	?>
		<!--##############################-->
             
<?php include("footer.php");?>
<?php }?>