<?php include("aheader.php") ?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="select * from faq where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<html>
    <body><br><br>
        <form action="faqeditcon.php" method="post">
            <table border="3" align="center" cellpadding="3" cellspacing="3" width="30%">
                <tr>
                    <td colspan="2"><h2><center>FaQ Edit</center></h2></td>
                </tr>
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $row['1'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $row['2'] ?>"></td>
                </tr>
                <tr>
                    <td>Question</td>
                    <td><input type="text" name="question" value="<?php echo $row['3'] ?>"></td>
                </tr>
                <tr>
                    <td>Answer</td>
                    <td><input type="text" name="answer" value="<?php echo $row['4'] ?>"></td>
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