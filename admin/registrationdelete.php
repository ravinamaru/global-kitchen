<?php
include("con1.php");
$id=$_GET['id'];
$query="delete from registration where id=".$id;
$result=mysqli_query($con,$query);
if($result!=NULL)
{
    header("location:registrationmaster.php");
}
else
{
    ?>
    <script>
        alert("record not deleted");
        window.location="registrationmaster.php";
    </script>
    <?php
}
?>