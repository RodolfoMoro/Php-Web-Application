<?php
//it will start the session to connect with the database
include_once('connect.php');
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
  <a href="http://localhost/GYM/user-member.php">Time Table</a>
  <a class="active" href=>Bookings</a>
  <a href="http://localhost/GYM/feedback.php">Feedback</a>
  <a  id="log-out" href="http://localhost/GYM/log-out.php">Log-out</a>
  <p id="welcome"><?php echo "user:". "  ". $_SESSION['user'];?></p>
  
</div>


<?php

if(isset($_GET['id'])){
$id= $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from bookings where id = '$id'"); // delete query
}
?>

<div class="front-page"></div>

<div class="booking-container">
<table class="booking-table">
<tr>
    <th>Booking-ID</th>
    <th>Time</th>
    <th>Day</th>
    <th>Class</th>
    <th>Operations</th>
</tr>

<?php

$records = mysqli_query($conn,"select * from bookings"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['time']; ?></td>
    <td><?php echo $data['day']; ?></td>    
    <td><?php echo $data['class']; ?></td>    
    <td><a href="bookings.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>


</table>
</div>
</div>

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
 
  
}

.booking-container{

position: absolute;
top: 40%;
left: 40%;
transform: translate(-40%, -90%);
border: 5px solid black;

}

.booking-container h1{
font-size: 40px;
text-align: center;
text-decoration: underline;
}


.booking-table td{
text-align: center;
padding: 15px;
background-color: rgba(255, 180, 17, 0.719);
color: black;
width: 200px;
} 

.booking-table th{
background-color: yellow;
}

.delete{
    background-color: pink;
    
}

.delete a{
    text-align: center;
    color:black;
    text-decoration: none;
}

.delete-button{
    padding: 10px 15px;
    background-color: red;
    border-radius: 10px;
}



</style>
</html>
