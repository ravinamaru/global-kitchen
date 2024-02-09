<?php
include("con1.php");
$name=$_POST['name'];
$email=$_POST['email'];
$ques=$_POST['question'];
$query="INSERT INTO `faq` (`name`, `email`, `question`) VALUES ('$name', '$email', '$ques')";
$result=mysqli_query($con,$query);
if($result!=NULL)
{
    header("location:faq.php");
}
else
{
    ?>
    <script>
       alert("FaQ not inserted");
       window.location="faq.php";
    </script>
    <?php
}
?>