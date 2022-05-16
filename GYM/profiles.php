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
  <a  href="http://localhost/GYM/classes.php">Classes</a>
  <a class="active" href="#classes">Trainers</a>
  <a href="http://localhost/GYM/log.php">Login</a>
</div>

<div class="front-page">

<div class="class-1">
                    <?php
                    echo "
                    <h2>Hanna</h2>
                    <img src='/img/profile-hanna.jpg'>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id volutpat lacus laoreet non curabitur. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend.</p>
                    <h3>Teaching : YOGA </h3> "
                 ?>
                </div>

                <div class="class-2">
                    <?php
                    echo "
                    <h2>Rodolfo</h2>
                    <img src='/img/profile-rodolfo.jpg'>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id volutpat lacus laoreet non curabitur. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend. </p>
                    <h3>Trainer : BOXING</h3> "
                 ?>
                </div>

                <div class="class-3">
                    <?php
                    echo "
                    <h2>Diego</h2>
                    <img src='/img/profile-diego.jpg'>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id volutpat lacus laoreet non curabitur. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend.</p>
                    <h3>Trainer : CROSS-FIT </h3> "
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
    width: 50%;
    border-radius: 80px;
}
</style>
</html>
