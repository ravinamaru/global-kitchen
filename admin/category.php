<?php include("aheader.php") ?>
<html>
    <body><br><br>
    <form method="post" action="categorycon.php">
        <table border="3" align="center" width="30%">
            <tr>
                <th colspan="2"><h2><center>Category<center></h2></th>
            </tr>
            <tr>
                <td>Category Name</td>
                <td><input type="text" name="catname"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Category"></td>
            </tr>
            </table>
        </form>
    </body>
</html>
<?php include("afooter.php") ?>