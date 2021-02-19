<!DOCTYPE html>
<html lang="en" dir="ltr">
<center>
  <h1>Select And View one Customer</h1>
<?php
$conn = new mysqli("sql203.epizy.com", "epiz_27877403", "EBqe2t0NSFc", "epiz_27877403_banking");
$query="select * from banktable";
$result=$conn->query($query);?>
  <form class="" action="" method="post">
      <select name='ind'>
<?php  while($row = $result->fetch_assoc()){?>
    <option value="<?php  echo "Name:  " . $row["Name"] . " <br> Email:  " .$row["Email"]. " <br> CurrentBallance:  " .$row["CurrentBallance"]. " ";?>"> <?php  echo " " . $row["Name"] . " ";
  ?>
  <?php
  }

 ?>
 <input type="submit" name="submit"  value="Submit">
</form>
<br><br><br>
 <br><br><br>
<?php
  if(isset($_POST["submit"])){
  $value=$_POST['ind'];
  echo "Details <br>";
  echo($value);
    $query1="SELECT Name, Email, CurrentBallance FROM banktable WHERE Name = '$value'";
    $result = $conn->query($query1);
      // output data of each row
      while($row = $result->fetch_assoc()){
        echo " Name: ".$row['Name']. " Email: ".$row['Email']. " CurrentBallance: ".$row['CurrentBallance']. "<br>";

}
}
 ?>
 <br><br><br>
 <br>
 <?php if(isset($_POST["submit"])){ ?>
 <form class="" action="bank3.php" method="post">
 <button type="submit" name="button">Transfer Money</button>
 </form>
 <?php } ?>
</center>
 </html>
