
      <?php include("header.php");?>
  
   <table cellpadding='6'  cellspacing='6' border='5' width="100%" class="fonts" background='images/bg_bot.jpg'>
		<tr><td align="center"><h2>****************View Products****************</h2></td></tr>
		<tr><td align="center">
		  <form action="" method="post">
			 <select name="productname" class='fonts'>
        <option>Wood</option>
		<option>Metal</option>
		<option>Buffalo Horn</option>
		<option>Screwpine</option>
		<option>Other</option>
		<input type="submit" name="submit" class="btn" value="search"/>
       </select>
			</form><br><br>
		<?php
		if(isset($_POST['submit']))
		{
			$pname=$_POST['productname'];
		
include("con1.php");
$query="select * from product where productname='".$pname."'";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
{?>

<ul class="service-list"><li> <?php
	
	echo "<a href='productsub.php?id=".$row[0]."'><img src='admin/".$row['productimage']."' height='200' width='360'></a>";
	?>
	</ul></li>
	<?php
}
}
?>

</td></tr></table>		
		<!--##############################-->
<?php include("footer.php");?>