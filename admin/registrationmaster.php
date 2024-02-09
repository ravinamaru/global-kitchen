<?php include("aheader.php") ?>
<br>
<h1 align="center">Registration Master</h1>
<?php 
include("con1.php");
$query="select * from registration"; 
$result=mysqli_query($con,$query);
echo"<table border='3' align='center' cellpadding='5' cellspacing='5'>
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Address</th>
<th>Country</th>
<th>State</th>
<th>City</th>
<th>Date of Birth</th>
<th>Gender</th>
<th>Mobile no</th>
<th>Email</th>
<th>Username</th>
<th>Password</th>
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
    echo $row["address"];
    echo "</td><td>";
    echo $row["country"];
    echo "</td><td>";
    echo $row["state"];
    echo "</td><td>";
    echo $row["city"];
    echo "</td><td>";
    echo $row["dob"];
    echo "</td><td>";
    echo $row["gender"];
    echo "</td><td>";
    echo $row["mobileno"];
    echo "</td><td>";
    echo $row["email"];
    echo "</td><td>";
    echo $row["username"];
    echo "</td><td>";
    echo $row["password"];
    echo "</td><td><a href='registrationdelete.php?id=".$row[0]."'>Delete</a></td></tr>";
    
}
echo "</tr></table>";
?>

<?php include ("afooter.php") ?>