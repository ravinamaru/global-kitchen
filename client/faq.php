<?php include("header.php") ?>
<html>
    <head>
        <title>global kitchen</title>
    </head>
    <body>
        <br><br>
       <form method="post" action="faqcon.php">
        <table border="3" align="center" width="30%">
            <tr>
                <th colspan="2"><h2><center>FaQ<center></h2></th>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Question</td>
                <td><input type="text" name="question"></td>
            </tr>
            <tr>
                <td>Answer</td>
                <td><input type="text" name="answer"></td>
            </tr>
            <tr>
                <td><center><input type="submit" name="submit" value="submit" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">
                <td><b><a href="">View FaQ</a></b></td></center></td>
            </tr>
        </table>
       </form>
    <body>
</html>
<?php include("footer.php") ?>