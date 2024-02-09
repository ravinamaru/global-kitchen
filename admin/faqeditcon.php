<?php
include("con1.php");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$ques=$_POST['question'];
$ans=$_POST['answer'];
$query="update faq set name='$name',email='$email',question='$ques',answer='$ans' where id=".$id;
$result=mysqli_query($con,$query);
if($result==NULL)
{
    ?>
    <script>
        alert("record not updated");
        window.location="faqmaster.php";
    </script>
    <?php
}
else
{
    header("location:faqmaster.php");
}
?>