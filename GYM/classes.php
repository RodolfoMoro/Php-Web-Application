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
  <a  href="http://localhost/GYM/visitor.php">Home</a>
  <a class="active" href="#classes">Classes</a>
  <a href="http://localhost/GYM/profiles.php">Trainers</a>
  <a href="http://localhost/GYM/log.php">Login</a>
</div>

<div class="front-page">
<div class="class-1">
                    <?php
                    echo "
                    <h2>YOGA</h2>
                    <img src='/img/kike-vega-F2qh3yjz6Jk-unsplash.jpg'>
                    <p>Yoga is essentially a spiritual discipline based on an extremely subtle science, which focuses on bringing harmony between mind and body. It is an art and scince of healthy living. The word 'Yoga' is derived from the Sanskrit root 'Yuj', meaning 'to join' or 'to yoke' or 'to unite'</p>
                    <h3>Trainer : Hanna </h3> "
                 ?>
                </div>

                <div class="class-2">
                
                    <?php
                    echo "
                    <h2>BOX</h2>
                    <img src='/img/lorenzo-fatto-offidani-de5OZMjb5ww-unsplash.jpg'>
                    <p>
                    Boxing is a combat game played throughout the world. The history of the combat sports game seems to be more interesting and the participation of people get increased day by day. It is a pre-historic game which founds its origin in ancient Greek period </p>
                    <h3>Trainer : Rodolfo</h3> "
                 ?>
                </div>

                <div class="class-3">
                    <?php
                    echo "
                    <h2>CORSS-FIT</h2>
                    <img src='/img/sam-moghadam-khamseh-vOZP2LojrHI-unsplash.jpg'>
                    <p>CrossFit is a strength and conditioning workout that is made up of functional movement performed at a high intensity level. These movements are actions that you perform in your day-to-day life, like squatting, pulling, pushing etc</p>
                    <h3>Trainer : Diego </h3> "
                 ?>
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
  background-color: whitesmoke;
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


.class-1, .class-2,.class-3{
      text-align: center;
      padding-top: 90px;
      
      width: 50%;
      background-color: #bdbdbd;
  }

  
  .class-1 h2 , .class-2 h2 ,.class-3 h2{
      font-family:'Times New Roman', Times, serif;
      text-decoration: underline;
}


  .class-1 p , .class-2 p ,.class-3 p{
      font-family:'Times New Roman', Times, serif;
      margin-left: 55px;
      width: 80%;
     
}

 

.class-1 img ,
 .class-2 img ,
 .class-3 img{
    width: 80%;
}
</style>
</html>
