<?php
include("con1.php");
$id=$_GET['id'];
$query="delete from feedback where id=".$id;
$result=mysqli_query($con,$query);
if($result!=NULL)
{
    header("location:feedbackmaster.php");
}
else
{
    ?>
    <script>
        alert("record not deleted");
        window.location="feedbackmaster.php";
    </script>
    <?php
}
?>