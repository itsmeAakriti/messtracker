<?php

require '../dynamic_full_cal/database_connection.php'; 
if(isset($_POST["submit"]))
 $user_id=mysqli_real_escape_string($con,$_POST["userid"]);
 $Password=mysqli_real_escape_string($con,$_POST["password"]);
 $get_query="select * from attendant where user_id='$user_id' && password ='$Password'";
 $check_query=mysqli_query($con,$get_query);
 $row=mysqli_num_rows($check_query);
 if($row)
 { 
   session_start();
   $_SESSION['login'] = $user_id;
   header ("Location:../frontend/form.php");
   
 }
 else{
    ?>

    <script>
    alert("Login insuccessful");
    window.location.href = "../frontend/attend_login.php";
    </script>
     <?php 
 }

?>