<?php
include("con1.php");
$id=$_GET['id'];
$query="delete from item where id=".$id;
$result=mysqli_query($con,$query);
if($result!=NULL)
{
    header("location:itemmaster.php");
}
else
{
    ?>
    <script>
        alert("record not deleted");
        window.location="itemmaster.php";
    </script>
    <?php
}
?>