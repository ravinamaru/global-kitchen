<?php include("aheader.php") ?>
<br>
<h1 align="center">Category Master</h1>
<?php 
include("con1.php");
$query="select * from category"; 
$result=mysqli_query($con,$query);
echo"<table border='3' align='center' cellpadding='5' cellspacing='5'>
<tr>
<th>Id</th>
<th>Category Name</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr><td>";
    echo $row["id"];
    echo "</td><td>";
    echo $row["catname"];
    echo "</td><td><a href='categoryedit.php?id=".$row[0]."'>Edit</a></td><td><a href='categorydelete.php?id=".$row[0]."'>Delete</a></td></tr>";
}
echo "<td colspan='4'><center><a href='category.php'>Insert new category</a></center></td></tr></table>";
?>
<?php include("afooter.php")?>