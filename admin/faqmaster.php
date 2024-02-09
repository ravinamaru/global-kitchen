<?php include("aheader.php") ?>
<br>
<h1 align="center">FaQ Master</h1>
<?php 
include("con1.php");
$query="select * from faq"; 
$result=mysqli_query($con,$query);
echo"<table border='3' align='center' cellpadding='5' cellspacing='5'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Question</th>
<th>Answer</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr><td>";
    echo $row["id"];
    echo "</td><td>";
    echo $row["name"];
    echo "</td><td>";
    echo $row["email"];
    echo "</td><td>";
    echo $row["question"];
    echo "</td><td>";
    echo $row["answer"];
    echo "</td><td><a href='faqedit.php?id=".$row[0]."'>Give answer or edit</a></td><td><a href='faqdelete.php?id=".$row[0]."'>Delete</a></td></tr>";
}
echo "</tr></table>";
?>
<?php include("afooter.php")?>