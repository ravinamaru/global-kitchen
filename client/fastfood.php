<?php
include("header.php") 
?>  
      <!-- items -->     
  <br>     
<?php
include("con1.php");
$query="select * from item where category='fast food'";
$result=mysqli_query($con,$query);

echo"<table style='margin-left:50px' bordar='3'>
<h1 align='center'>Fast Food</h1>";
while($row=mysqli_fetch_array($result))
{

echo "<td>";
echo " <img src='$row[5]' height=200 width=200 style='margin-right:100px'>"; 
echo "<br>";
echo "<font size='+2'>";
echo "<br><font size='+2' color='blue'>Itemname: </font>";
echo $row["itemnm"];
echo "<br><font size='+2' color='blue'>Description: </font>";
echo $row["itemdes"];
echo "<br><font size='+2' color='blue'>Category: </font>";
echo $row["category"];
echo "<br><font size='+2' color='blue'>Price: </font>";
echo $row["price"];
echo "</font><font size='+2' color='blue'>";
echo "<a href='addtocart.php?id=".$row[0]."'><font color='#33FFF3' size='+3'><ul>Add to Cart</ul></font></a>";
echo "</td>";
}

echo"</tr></table>";
?>
  
<?php
include("footer.php") 
?> 