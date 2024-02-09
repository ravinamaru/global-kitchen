<?php include("header.php") ?>
<html>
    <head>
        <title>global kitchen</title>
    </head>
    <body>
        <br><br>
       <form method="post" action="feedbackcon.php">
        <table border="3" align="center" width="30%">
            <tr>
                <th colspan="2"><h2><center>Feedback<center></h2></th>
            </tr>
            <tr>
                <td> First Name</td>
                <td><input type="text" name="fnm"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lnm"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Feedback</td>
                <td><input type="text" name="feedback"></td>
            </tr>
            <tr>
                <td colspan="2"><center><input type="submit" name="submit" value="submit" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill"><center></td>
            </tr>
        </table>
       </form>
    <body>
</html>
<?php include("footer.php") ?>