<?php include("aheader.php") ?>
<br>
<h1 align="center">Login Master</h1>
<?php 
include("con1.php");
$query="select * from login"; 
$result=mysqli_query($con,$query);
echo"<table border='3' align='center' cellpadding='5' cellspacing='5'>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr><td>";
    echo $row["id"];
    echo "</td><td>";
    echo $row["username"];
    echo "</td><td>";
    echo $row["password"];
    echo "</td><td><a href='loginedit.php?id=".$row[0]."'>Edit</a></td><td><a href='logindelete.php?id=".$row[0]."'>Delete</a></td></tr>";
}
echo "<tr><td colspan='5' align='center'><a href='login.php'>Insert</a></td></tr></table>"
?>

<?php include ("afooter.php") ?>