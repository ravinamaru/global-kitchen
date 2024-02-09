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
<?php
include("con1.php");
$user=$_SESSION['user'];
$date=date('y-m-d');
$result=mysqli_query($con,"select b.id,productname,productimage,name, productid,amt,date from item as a inner join order1 as b on a.id=b.productid where b.date='$date' and b.name='$user'") or die(mysqli_error());

$count=mysqli_num_rows($result);
if($count!=NULL)
{
echo"<table cellpadding='6' frame='box' width='100%' cellspacing='6' class='fonts' background='images/bg_bot.jpg' width='900px'>
 <tr>
    <td colspan='7' align='center'><h2>**********************View Your Orders**********************</h2></td>   
  </tr>
  <tr><td colspan='5'><hr></td></tr>
  <tr><th colspan='2' align='left'>Name:-".$user."</th><th colspan='3' align='right'>Date:-".$date."</th></tr>
  <tr><td colspan='5'><hr></td></tr>
  
<tr><th>ProductId</th><th>ProductName</th><th>Productimage</th><th>Amount</th><th>Delete</th></tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr><td align='center'>";
	echo $row["productid"];
	echo"</td><td align='center'>";
	echo $row["productname"];
	echo"</td><td align='center'>";
	echo "<img src='admin/".$row['productimage']."' height='100' width='100'>&nbsp;&nbsp;";
	echo"</td><td align='center'>";
	echo $row["amt"];
	echo"</td>";
	echo"<td align='center'><a href='order1delete.php?id=".$row[0]."'>Delete</a></td></tr>";
}
echo"<tr><td colspan='5'><hr></td></tr><tr><td colspan='2' align='left'><a href='proinfo.php'>More Shope</a></td><td colspan='3' align='right'><a href='bill.php'>Finish Shopping</a></td></tr><tr><td colspan='5'><hr></td></tr></table>";
}
else
{?>
	<script>
		alert("There Is No Product Purchased By You Today");
		window.location="proinfo.php";
	</script>
<?php }
	?>
		<!--##########################-->
<?php include("footer.php");?>
<?php }?>