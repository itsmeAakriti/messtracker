<?php 
require '../dynamic_full_cal/database_connection.php';
if(isset($_POST['save']))
{  
    $sr_no=$_POST['serial_number'];
    $date=date('Y-m-d');
    $mealname=$_POST['meal'];
    $insert_query = "insert into mealsinfo(srl_id,date,meal) values ('$sr_no','$date','$mealname')";
    $res = mysqli_query($con, $insert_query);
     if($res)
 {
    ?>
    <script>
    if(confirm("entry Successful"))
     {
    window.location.href = "../frontend/form.php";
     }
    </script>
    <?php 
 }
 else{
    ?>

    <script>
    alert("Login insuccessful");
    </script>
     <?php 
 }
}
?>
