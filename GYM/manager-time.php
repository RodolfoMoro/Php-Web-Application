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
  <a  href="http://localhost/GYM/manager.php">Home</a>
  <a  class="active" href="http://localhost/GYM/manager-time.php">Manager-Timetable</a>
  <a href="http://localhost/GYM/Create-classes.php">Create Classes</a>
  <a  id="log-out" href="http://localhost/GYM/log-out.php">Log-out</a>
  <p id="welcome"><?php echo "Manager:". "  ". $_SESSION['user'];?></p>
  
</div>



<?php

if(isset($_GET['Time'])){
$Time= $_GET['Time']; // get id through query string

$del = mysqli_query($conn,"delete from timetable where Time = '$Time'"); // delete query
}
?>

<div class="front-page"></div>

<div class="booking-container">
<table class="booking-table">
<tr>
<th>TIME</th>
                <th>MONDAY</th>
                <th>TUESDAY</th>
                <th>WEDNESDAY</th>
                <th>THURSDAY</th>
                <th>FRIDAY</th>
    <th>Operations</th>
</tr>

<?php

$records = mysqli_query($conn,"select * from timetable"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
 <tr>
                <td id="first-row"><?php echo $data['Time'];?></td>
                <td><?php echo $data['Monday'];?></td>
                <td><?php echo $data['Tuesday'];?></td>
                <td><?php echo $data['Wednesday'];?></td>
                <td><?php echo $data['Thursday'];?></td>
                <td><?php echo $data['Friday'];?></td>
                <td id="delete" ><a href="manager-time.php?id=<?php echo $data['Time']; ?>">Delete</a></td>
            </tr>
<?php
}
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
 
  
}

.booking-container{

position: absolute;
top: 60%;
left: 40%;
transform: translate(-40%, -90%);


}

.booking-container h1{
font-size: 40px;
text-align: center;
text-decoration: underline;
}


.booking-table td{
text-align: center;
padding: 15px;
background-color: rgba(14, 13, 13, 0.507);
color: #fff;
width: 200px;
} 

#first-row{
background-color: green;
}


.booking-table th{

    background-color: #55608f;
}

#delete{
    border-bottom: 1px solid black;;
    background-color: whitesmoke;
    
}

#delete a{
    text-align: center;
    color:black;
    text-decoration: none;
    padding: 10px 15px;
    background-color: red;
    border-radius: 10px;
}

#delete-button{
    padding: 10px 15px;
    background-color: red;
    border-radius: 10px;
}
</style>
</html>