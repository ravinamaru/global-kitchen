<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
}
else
{


?>    <?php include("header.php");?>
  		<?php 
include("con1.php");
$id=$_GET['id'];
$query="select * from product where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{?>
				
        <form action="order1con.php" method="post">
        <table cellpadding='6' cellspacing='6' border='5' class="fonts" background='images/bg_bot.jpg' width="900px">
		 <tr>
    <td colspan='2' align='center'><h2>*********GiveYourOrderHere*********</h2></td>
    
  </tr>
        
          <tr>
            <td>ProductName</td>
            <td><label>
				<?php echo $_SESSION['user'];?>
              <input type="hidden" name="name" value="<?php echo $_SESSION['user'];?>"/>
            </label></td>
          </tr>
          <tr>
            <td>ContactNo</td>
            <td><label>
              <input type="text" name="contactno" />
            </label></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><label>
              <textarea name="address"></textarea>
            </label></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><label>
              <input type="text" name="email" />
            </label></td>
          </tr>
          <tr>
            <td>Productid</td>
            <td><label><?php echo $_GET['id'];?>
              <input type="hidden" name="productid" value="<?php echo $_GET['id'];?>"/>
            </label></td>
          </tr>
         
          <tr>
            <td>Amt</td>
            <td><label><?php echo $row['price'];?>
              <input type="hidden" name="amt" value="<?php echo $row['price'];?>" />
            </label></td>
          </tr>
          <tr>
            <td>Date</td>
            <td><label>
			<?php echo date('y-m-d');?>
              <input type="hidden" name="date" value='<?php echo date('y-m-d');?>'/>
            </label></td>
          </tr>
          <tr>
            
            <td colspan="2" align="center"><label>
            <input type="submit" name="Submit" value="Submit" class="btn" />
            <input type="submit" name="Reset" value="Reset" class='btn'/>
            </label></td>
          </tr>
        </table>
      </form>
	  <?php }?>
             
  
<?php include("footer.php");?>
<?php } ?>