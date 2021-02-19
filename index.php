<!DOCTYPE html>
<?php
$conn = new mysqli("localhost", "root", "", "banking");
 ?>
<html>
<body>
  <center>
    <div class="abc">
  <h1><strong>Basic Banking System</strong></h1>
</div>
</center>
  <div class="topnav">
  <a class= href="#">Contact</a>
  <a href="bank2.php">view all customer</a>
  <a href="#">About</a>
  <a class="active" href="#">Home</a>
</div>
</body>
<style>
body {
  background-image: url('https://devathon.com/wp-content/uploads/2020/02/Top-10-Payment-Gateways-Devathon.png');
}
.abc{
  background-color: #FAEBD7;
  color: #A9A9A9;
}
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 26px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</html>
