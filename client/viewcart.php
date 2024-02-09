<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
}
else
{
?>
<?php
include("header.php") 
?>
<br>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["viewcart"]["quantity"].value;
if (a==null || a=="")
{
  alert("quantity must be filled out");
  return false;
}
}
</script>
<form id="form1" method="post" action="deletecart.php">
<table align="center" border="2">
<?php
include("con1.php");
$tot=0;
$user=$_SESSION['user'];
$query="select * from addtocart where username='$user'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<tr>
  <td rowspan="5"><img src="<?php echo $row[5]?>" height=200 width=200></td>
</tr>
<tr>
  <td><font color='#520675' size="+2"><input type="text" name="nm" value="<?php echo $row[1];?>"></font></td>
</tr>
<tr>
  <td><font size="+2"><input type="text"name="pr"id="textfield"value="<?php echo $row[2];?>"/></td>
</tr>
<tr>
  <td><font size="+2"><input type="text"name="qu"id="textfield"value="<?php echo $row[3];?>"onSubmit="return validateForm()"/></td>
</tr>
<tr>
  <td><font size="+2"><input type="text"name="tot"id="textfield"value="<?php echo $row[4];?>"/></td>
</tr>
<tr>
  <td>
    <?php echo "<a href='deletecartitem.php?id=".$row['0']."'><h4><font color='#1AB088'>Delete</font></h4></a>"?>
  </td>
</tr>
<?php
$a=$row['4'];
$tot=$tot+$a;
?><?php
}
?>
<tr>
  <td><center><font color='#2A33BA' size='+3'>Total Amount=</font></center></td>
  <td><font color='#2A33BA' size='+3'><?php echo $tot;?></font></td>
</tr>
<tr>
  <td><input align="middle" name="submit" value="purchase"/id="bt" type="submit" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft"></td>
</tr>
</table>
</form>    
<?php
include("footer.php") 
?>
<?php }?> 