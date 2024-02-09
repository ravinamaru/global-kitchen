<?php include("aheader.php") ?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="select * from item where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<html>
    <body><br><br>
        <form action="itemeditcon.php" method="post">
            <table border="3" align="center" cellpadding="3" cellspacing="3" width="30%">
                <tr>
                    <td colspan="2"><h2><center>Category Edit</center></h2></td>
                </tr>
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <tr>
                    <td>Category</td>
                    <td><input type="text" name="catname" value="<?php echo $row['category'] ?>"></td>
                </tr>
                <tr>
                    <td>Itemname</td>
                    <td><input type="text" name="itemnm" value="<?php echo $row['2'] ?>"></td>
                </tr>
                <tr>
                    <td>Item Description</td>
                    <td><input type="text" name="itemdes" value="<?php echo $row['3'] ?>"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" value="<?php echo $row['4'] ?>"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" id="image" value="<?php echo $row['5'] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" name="submit" value="submit"></center></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
}
?>
<?php include("afooter.php") ?>