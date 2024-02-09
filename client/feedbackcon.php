<?php
include("con1.php");
$fnm=$_POST['fnm'];
$lnm=$_POST['lnm'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
$query="INSERT INTO `feedback` (`firstname`, `lastname`, `email`, `feedback`) VALUES ('$fnm', '$lnm', '$email', '$feedback')";
$result=mysqli_query($con,$query);
if($result!=NULL)
{
    header("location:feedback.php");
}
else
{
    ?>
    <script>
       alert("Feedback not inserted");
       window.location="feedback.php";
    </script>
    <?php
}
?>