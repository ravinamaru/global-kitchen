<?php include("aheader.php"); ?>
<br>
<br>
<br>
<br>
<form method="post" action="logincon.php">
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center" width="30%">
<tr>
  <td colspan="2" align="center" class="hed"><strong>Admin Login</strong></td>
</tr>
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
    <td align="center" colspan="2"><label>
      <input type="submit" name="Submit" value="Login" class="btn" />
    </label></td>
  </tr>
</table>
</form>
  <?php include("afooter.php"); ?>