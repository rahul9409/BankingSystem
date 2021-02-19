<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
<center>
  <h1 class="ab">Select the Customer to transfer to</h1>
<?php
$conn = new mysqli("localhost", "root","" , "banking");
$query="select * from transfarents";
$result=$conn->query($query);?>
  <form class="" action="bank4.php" method="post">
      <select name="ind">
<?php  while($row = $result->fetch_assoc()){?>
    <option id="dropdown" value="<?php  echo " " . $row["Name"] . " ";?>"> <?php  echo " " . $row["Name"] . " ";
  ?>
  <?php
  }
 ?>
 <input type="submit" name="submit"  value="Submit">
</form>
</body>
<style>
  body{
    background-image: url("https://www.desktopbackground.org/download/1680x1050/2014/01/21/704717_simple-backgrounds-hd-wallpapers-desktop-backgrounds-mobile_1920x1080_h.jpg");
  }
  #dropdown{
    width: 1000px;
   border-radius:1000px;
   background-color:#D2B48C;
  }
  .ab{
    color: #808000;
  }
</style>
</html>
