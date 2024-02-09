<?php
include("con1.php");
$id=$_POST['id'];
$catname=$_POST['catname'];
$query="update category set catname='$catname' where id=".$id;
$result=mysqli_query($con,$query);
if($result==NULL)
{
    ?>
    <script>
        alert("record not updated");
        window.location="categorymaster.php";
    </script>
    <?php
}
else
{
    header("location:categorymaster.php");
}
?>