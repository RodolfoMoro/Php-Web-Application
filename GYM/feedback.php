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
  <a  href="http://localhost/GYM/user-member.php">Home</a>
  <a href="http://localhost/GYM/timetable.php">Time Table</a>
  <a href="http://localhost/GYM/bookings.php">Bookings</a>
  <a class="active">Feedback</a>
  <a  id="log-out" href="http://localhost/GYM/log-out.php">Log-out</a>
  <p id="welcome"><?php echo "user:". "  ". $_SESSION['user'];?></p>
  
</div>


<div class="front-page">

<form>
<h2>Contact Form</h2>      
  <input name="name" type="text" class="feedback-input" placeholder="Name" />   
  <input name="email" type="text" class="feedback-input" placeholder="Email" />
  <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
  <input type="submit" value="SUBMIT"/>
</form>
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
  
  
  
}



form { 
    max-width:420px; 
    margin-bottom: 14%;
 }

form h2{
    text-align: center;
    text-transform: uppercase;
    font-family: 'Courier New', Courier, monospace;
    font-size: 40px;
}

.feedback-input {
  color:black;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }








</style>
</html>
