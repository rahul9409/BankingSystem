<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
<center>
  <h1 class="ab">Select And View one Customer</h1>
<?php
$conn = new mysqli("localhost", "root","" , "banking");
$query="select * from customers";
$result=$conn->query($query);?>
  <form class="" action="" method="post">
      <select name='ind'>
<?php  while($row = $result->fetch_assoc()){?>
    <option id="dropdown" value="<?php  echo "Name:  " . $row["Name"] . " <br> Email:  " .$row["Email"]. " <br> CurrentBallance:  " .$row["CurrentBallance"]. " ";?>"> <?php  echo " " . $row["Name"] . " ";
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
  ?>
  <div class="abc">
    <?php
  echo "Details <br>";
  echo($value);

}
 ?>
</div>
 <br><br><br>
 <br>
 <?php if(isset($_POST["submit"])){ ?>
 <form class="" action="bank3.php" method="post">
 <button class="sub" type="submit" name="button">Transfer Money</button>
 </form>
 <?php } ?>
</center>
</body>
<style>
body {
  background-image: url('https://wallpapercave.com/wp/wp2561067.jpg');
}
#dropdown{
  width: 1000px;
 border-radius:1000px;
 background-color:#D2B48C;
}
.abc{
  color: #8B4513;
}
.ab{
  color: #808000;
}
.sub{
  background: #F0E68C;
  width: 250px;
  height: 40px;
}
</style>
 </html>
