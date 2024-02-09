<?php include("header.php"); ?>
<br>
<?php
include("con1.php");
$id=$_GET['id'];
$query="select * from item where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<form method="post" action="purchase.php">
<h2 align="center"><font color="#2A00AA"><u>Add your product</u></font></h2>
<table>
    <tr>
        <td><input type="hidden" name="id" value="<?php echo $id;?>"/>
        <label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item Name</h4></label></td>
        <td><font size='+2'><input type="text" name="itemnm" value="<?php echo $row['2'];?>"/></td>
    </tr>
    <tr>
        <td><label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price</h4></label></td>
        <td><font size='+2'><input type="text"name="price" height="100%" value="<?php echo $row['4'];?>"/></td>
    </tr>
    <tr>
        <td><label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity</h4></label></td>
        <td><font size='+2'><input type="text" name="quantity" /></td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo "$row[5]"?>" height=200 width=200 />
        <?php
            $img="$row[5]";
        ?>
        <input type="hidden" name="im" value="<?php echo $img;?>"/></td>
    </tr>
    <br><br>
    <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input align="middle" name="Add to cart" type="submit" value="Add to cart"  class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft"></td>
    </tr>
</table>
</form> 
<?php
}
?>
<?php include("footer.php"); ?>