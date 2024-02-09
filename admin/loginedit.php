<?php include("aheader.php"); ?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="select * from login where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{?>
	 <br><br><br>
<form method="post" action="logineditcon.php">
<table class="tbl" border="3" cellpadding="5" cellspacing="5" align="center">
<tr>
    <td colspan="2" align="center" class="hed"><strong>Admin Edit</strong></td>
</tr>
    <input type="hidden" name="id" value="<?php echo $_GET["id"]?>" />
  
  <tr>
    <td>UserName</td>
    <td><label>
      <input type="text" name="username" value="<?php echo $row['1'];?>" >
    </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label>
      <input type="password" name="password" value="<?php echo $row['2'];?>" />
    </label></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><label>
      <input type="submit" name="Submit" value="Login" class="btn" />
    </label></td>
  </tr>
</table>
</form>
<?php }?>
 <?php include("afooter.php"); ?>