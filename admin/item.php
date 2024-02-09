<?php include("aheader.php") ?>
<html>
    <body><br><br>
    <form method="post" action="itemcon.php">
        <table border="5" align="center" width="30%" cellspacing='3' cellpadding='3'>
            <tr>
                <th colspan="2"><h2><center>Item<center></h2></th>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                <?php
                include("con1.php");
                $query="select * from category";
                $result=mysqli_query($con,$query);
                echo "<select name='category'>";
                while($row=mysqli_fetch_array($result))
                {
                    echo "<option>";
                    echo  $row['catname'];
                    echo "</option>";
                }
                echo "</select>"
                ?>
                </td>
            </tr>
            <tr>
                <td>Itemname</td>
                <td><input type="text" name="itemnm"></td>
            </tr>
            <tr>
                <td>Item Description</td>
                <td><input type="text" name="itemdes"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input name="image" type="file" id="image"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Insert"></td>
            </tr>
            </table>
        </form>
    </body>
</html>
<?php include("afooter.php") ?>