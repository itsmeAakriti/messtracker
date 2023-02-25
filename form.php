<?php
session_start();
if (!isset($_SESSION['login']))
{
  ?>
  <script>
    alert("You are not logged in");
    window.location.href = "attend_login.php";
  </script>

  <?php
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylescss.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Attendance</div>
    <div class="content">
      <form action="../backend/formsave.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Serial Number</span>
            <input type="text" placeholder="serial number" required name="serial_number">
          </div>
        </div>
        <div class="meal-details">
          <input type="radio" name="meal" value="breakfast" id="dot-1">
          <input type="radio" name="meal" value="lunch"  id="dot-2">
          <input type="radio" name="meal" value="dinner"  id="dot-3">
          <span class="meal-title">Meal</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="meal">Breakfast</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="meal">Lunch</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="meal">Dinner</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Save" name="save" >
        </div>
        <div class="button">
            <input type="submit" value="Next">
          </div>
      </form>
    </div>
  </div>

</body>
</html>
