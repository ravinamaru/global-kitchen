<?php include("aheader.php") ?>
<br>
<h1 align="center">Feedback Master</h1>
<?php 
include("con1.php");
$query="select * from feedback"; 
$result=mysqli_query($con,$query);
echo"<table border='3' align='center' cellpadding='5' cellspacing='5'>
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Feedback</th>
<th>Delete</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr><td>";
    echo $row["id"];
    echo "</td><td>";
    echo $row["firstname"];
    echo "</td><td>";
    echo $row["lastname"];
    echo "</td><td>";
    echo $row["email"];
    echo "</td><td>";
    echo $row["feedback"];
    echo "</td><td><a href='feedbackdelete.php?id=".$row[0]."'>Delete</a></td></tr>";
}
echo "</tr></table>";
?>

<?php include ("afooter.php") ?>