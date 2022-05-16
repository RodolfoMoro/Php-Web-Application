<?php
//it will start the session to connect with the database
session_start();
?>

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
  <a href="http://localhost/GYM/timetable.php">Time Table</a>
  <a href="http://localhost/GYM/bookings.php">Bookings</a>
  <a href="http://localhost/GYM/feedback.php">Feedback</a>
  <a  id="log-out" href="http://localhost/GYM/log-out.php">Log-out</a>
  <p id="welcome"><?php echo "user:". "  ". $_SESSION['user'];?></p>
  
</div>


<div class="front-page">

<div class="text">Welcome</div>
      
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

#welcome{
  margin-right: 60px;
  color: lightgreen;
  float: right;
}

#log-out{
  margin-right: 15px;
  float: right;
  background-color: red;
}



.front-page {
    display: flex;
    width: 100%;
    height: 900px;
    background-color: whitesmoke;
    display: flex;
  justify-content: center;
  align-items: center;
  font-size: 60px;
  position: absolute;
  background-image: url('/GYM/images/member-page.jpg ');
  background-size:cover;
  
}

.text {
 
  text-align: center;
  color: white;
  font-size: 1.5em;
}








</style>
</html>
