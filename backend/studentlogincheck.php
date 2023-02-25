<?php
require '../dynamic_full_cal/database_connection.php'; 
if(isset($_POST["submit"]))
 $user_id=mysqli_real_escape_string($con,$_POST["userid"]);
 $Password=mysqli_real_escape_string($con,$_POST["password"]);
 $get_query="select * from student where student_id='$user_id' && password ='$Password'";
 $check_query=mysqli_query($con,$get_query);
 $row=mysqli_num_rows($check_query);
 if($row)
 {
    session_start();
    $_SESSION['stu_login'] = "1";
    header ("Location:../dynamic_full_cal/dynamic_full_calender.php");

 }
 else{
    ?>
    <script>
    alert("Login insuccessful");
    window.location.href = "../frontend/student_login.php";
    </script>
    <?php
 }

?>