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
  <a  href="http://localhost/GYM/manager-time.php">Manager-Timetable</a>
  <a  class="active"  href="http://localhost/GYM/Create-classes.php">Create Classes</a>
  <a  id="log-out" href="http://localhost/GYM/log-out.php">Log-out</a>
  <p id="welcome"><?php echo "Manager:". "  ". $_SESSION['user'];?></p>
  
</div>


<div class="front-page">
 

<?php 
  
  if(isset($_POST['submit'])){

    if(!empty($_POST['time'])  && !empty($_POST['monday']) && !empty($_POST['tuesday'])  
    && !empty($_POST['wednesday']) && !empty($_POST['thursday']) && !empty($_POST['friday']
    )) {

        $time= $_POST['time'] ;
        $monday = $_POST['monday'];
        $tuesday = $_POST['tuesday'];
        $wednesday = $_POST['wednesday'];
        $thursday = $_POST['thursday'];
        $friday = $_POST['friday'];


        $query = "insert into timetable(time,monday,tuesday,wednesday,thursday,friday) 
        values (' $time' ,' $monday' , ' $tuesday', '$$wednesday', '$thursday', '$friday') ";
        $run = mysqli_query($conn,$query);{
            header("location:manager-time.php");
            
        }

        
    } 
    
  }
 
?>



<div class="create-container">

<form class="select-slot" action="" method="POST">
         <h2>Create a class</h2>
        <label></label><input class="input-slot"type="text" name="time" placeholder="TIME"><br><br>
        <label></label><input class="input-slot"type="text" name="monday" placeholder="MONDAY"><br><br>
        <label></label><input class="input-slot"type="text" name="tuesday" placeholder="TUESDAY"><br><br>
        <label></label><input class="input-slot" type="text" name="wednesday"placeholder="WEDNESDAY"><br><br>
        <label></label><input class="input-slot" type="text" name="thursday" placeholder="THURSDAY"><br><br>
        <label></label><input class="input-slot"type="text" name="friday" placeholder="FRIDAY"><br><br>

        <button class="book-button" type="submit" name="submit">Create</button>
            
        </form>

        </div>
    </div>

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



.create-container{
    display: flex;
position: absolute;
top: 35%;
left: 50%;
transform: translate(-60%, -50%); 
}


.select-slot{
padding-top: 10px;
width: 500px;
border-radius: 10px;

text-align: center;
height: 450px;
background-color: #cc66ff;


}

.select-slot h2{
font-style: italic;
text-decoration: underline;
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
