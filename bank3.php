<!DOCTYPE html>
<html lang="en" dir="ltr">
<center>
  <h1>Select the Customer to transfer to</h1>
<?php
$conn = new mysqli("sql203.epizy.com", "epiz_27877403", "EBqe2t0NSFc", "epiz_27877403_banking");
$query="select * from banktable";
$result=$conn->query($query);?>
  <form class="" action="bank4.php" method="post">
      <select name="ind">
<?php  while($row = $result->fetch_assoc()){?>
    <option value="<?php  echo " " . $row["Name"] . " ";?>"> <?php  echo " " . $row["Name"] . " ";
  ?>
  <?php
  }
 ?>
 <input type="submit" name="submit"  value="Submit">
</form>
