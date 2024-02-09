<?php include("header.php")?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br> 
             
<form method="post" action="checklogin.php">
<table align="center" cellpadding='6' border="5" cellspacing='6' class='fonts' background='images/bg_bot.jpg' width='900px'>
<th  colspan="2"><center><h2>Login Now</h2></center></th>
    <tr>
    <td>UserName</td>
    <td><label>
      <input type="text" name="username" />
    </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label>
      <input type="password" name="password" />
    </label></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input class="btn" type="submit" name="Submit" value="Login" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><a href="registration.php">New User?</a></td>
    </tr>
</table>
</form>         
<?php include("footer.php");?>
