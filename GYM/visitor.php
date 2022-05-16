<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/xampp/htdocs/GYM/CSS/style.css">
<style>

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="http://localhost/GYM/classes.php">Classes</a>
  <a href="http://localhost/GYM/profiles.php">Trainers</a>
  <a href="http://localhost/GYM/log.php">Login</a>
</div>

<div class="front-page">
<img src='/GYM/images/front-page.jpg'>
</div>


<?php
include_once '/xampp/htdocs/GYM/footer1.php';
?>
</body>


<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.front-page {
    display: flex;
    width: 100%;
    height: 900px;
    background-color: whitesmoke;
}

.front-page img {
  width: 100%;
  height: auto;
}
</style>
</html>
