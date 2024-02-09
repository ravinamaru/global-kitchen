<?php include("aheader.php") ?>
<br>
<h1 align="center">Itam Master</h1>
<?php 
include("con1.php");
$query="select * from item"; 
$result=mysqli_query($con,$query);
echo"<table border='3' align='center' cellpadding='5' cellspacing='5'>
<tr>
<th>Id</th>
<th>Category</th>
<th>Item Name</th>
<th>Item Description</th>
<th>Price</th>
<th>Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr><td>";
    echo $row["id"];
    echo "</td><td>";
    echo $row["category"];
    echo "</td><td>";
    echo $row["itemnm"];
    echo "</td><td>";
    echo $row["itemdes"];
    echo "</td><td>";
    echo $row["price"];
    echo "</td><td>";
    echo"<img src='".$row['image']."' height=50 width=50>";
    echo "</td><td><a href='itemedit.php?id=".$row[0]."'>Edit</a></td><td><a href='itemdelete.php?id=".$row[0]."'>Delete</a></td></tr>";
}
echo "<td colspan='8'><center><a href='item.php'>Insert new item</a></center></td></tr></table>";
?>
<?php include("afooter.php")?>