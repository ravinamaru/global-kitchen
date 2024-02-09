<?php
include("con1.php");
$id=$_GET['id'];
$query="delete from category where id=".$id;
$result=mysqli_query($con,$query);
if($result!=NULL)
{
    header("location:categorymaster.php");
}
else
{
    ?>
    <script>
        alert("record not deleted");
        window.location="categorymaster.php";
    </script>
    <?php
}
?>