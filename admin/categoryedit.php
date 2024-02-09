<?php include("aheader.php") ?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="select * from category where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<html>
    <body><br><br>
        <form action="categoryeditcon.php" method="post">
            <table border="3" align="center" cellpadding="3" cellspacing="3" width="30%">
                <tr>
                    <td colspan="2"><h2><center>Category Edit</center></h2></td>
                </tr>
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <tr>
                    <td>Category Name</td>
                    <td><input type="text" name="catname" value="<?php echo $row['1'] ?>"></td>
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