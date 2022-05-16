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
  <a  class="active" href="#">Time Table</a>
  <a href="http://localhost/GYM/bookings.php">Bookings</a>
  <a href="http://localhost/GYM/feedback.php">Feedback</a>
  <a  id="log-out" href="http://localhost/GYM/log-out.php">Log-out</a>
  <p id="welcome"><?php echo "user:". "  ". $_SESSION['user'];?></p>
  
</div>

<?php
$result = mysqli_query($conn,"SELECT * FROM timetable");
if (mysqli_num_rows($result) > 0) {
?>
<div class="front-page">
<div class="table-container">
        <table>
            <tr>
                <th>TIME</th>
                <th>MONDAY</th>
                <th>TUESDAY</th>
                <th>WEDNESDAY</th>
                <th>THURSDAY</th>
                <th>FRIDAY</th>
            </tr>
            <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
            <tr>
                <td id="first-row"><?php echo $row['Time'];?></td>
                <td><?php echo $row['Monday'];?></td>
                <td><?php echo $row['Tuesday'];?></td>
                <td><?php echo $row['Wednesday'];?></td>
                <td><?php echo $row['Thursday'];?></td>
                <td><?php echo $row['Friday'];?></td>
            </tr>
            <?php
$i++;
}

?>
        </table>
        <?php
  }
  else{
      echo "No result found";
  }
  ?>


  <?php 
  
  if(isset($_POST['submit'])){

    if(!empty($_POST['time'])  && !empty($_POST['day']) && !empty($_POST['class'])) {

        $time= $_POST['time'] ;
        $day = $_POST['day'];
        $class = $_POST['class'];


        $query = "insert into bookings(time,day,class) values ('$time' , '$day', '$class') ";
        $run = mysqli_query($conn,$query);{
            header("location:confirmation.php");
            
        }

        
    } 
    
  }
 

  ?>

        <form class="select-slot" action="" method="POST">
         <h2>Book your Session</h2>
        <label></label><input class="input-slot"type="text" name="time" placeholder="TIME"><br><br>
        <label></label><input class="input-slot" type="text" name="day"placeholder="DAY"><br><br>
        <label></label><input class="input-slot" type="text" name="class" placeholder="CLASS"><br><br>

        <button class="book-button" type="submit" name="submit">Submit</button>
            
        </form>


    </div>

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
 
  
}

.table-container{

display: flex;
position: absolute;
top: 35%;
left: 50%;
transform: translate(-60%, -50%);
}

table {
padding-right: 50px;
width: 800px;
overflow: hidden;



}


td {
padding: 15px;
background-color: rgba(14, 13, 13, 0.507);
color: #fff;

}

th {
background-color: #55608f;

}

#first-row{
background-color: green;
}


tr:nth-child(even) {
background-color: white;
}


.select-slot{
padding-top: 10px;
width: 300px;
border-radius: 10px;

text-align: center;
height: 250px;
background-color: #EAE130;


}

.select-slot h2{
font-style: italic;
}


.book-button{
    width: 50%;
    background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5PX;
}



.input-slot{
    width: 60%;   
}




</style>
</html>
