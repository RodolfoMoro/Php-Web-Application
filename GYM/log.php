<!-- Structure of the page html -->
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
    <a href="http://localhost/GYM/visitor.php">Home</a>
    <a href="http://localhost/GYM/classes.php">Classes</a>
    <a href="http://localhost/GYM/profiles.php">Trainers</a>
    <a class="active" href="#about">Login</a>
  </div>

  <div class="front-page">
    <div class="login">
      <h1>Login</h1>
      <form action="log.php?op=in" method="post">
        <label for="username">

        </label>
        <input type="text" name="user" placeholder="Username" id="username" required>
        <label for="password">

        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="Login">
      </form>
    </div>
  </div>


  <?php
include_once '/xampp/htdocs/GYM/footer1.php';

?>

  <?php
// The function to check the user credentails and level of access and return to the page. 
session_start();
include "/xampp/htdocs/GYM/connect.php";
$user = $_POST['user'];
$password = $_POST['password'];
$op = $_GET['op'];

// the if statment it will check 
if($op=="in"){
    $sql = mysqli_query($conn,"SELECT * FROM login WHERE user='$user' AND password='$password'");
    if(mysqli_num_rows($sql)==1){
        $qry = mysqli_fetch_array($sql);
        $_SESSION['user'] = $qry['user'];
        $_SESSION['name'] = $qry['name'];
        $_SESSION['level'] = $qry['level'];

        if($qry['level']=="member"){
            $_SESSION['user'] = $_SESSION['name'];
            header("location:user-member.php");
            
        }else if($qry['level']=="trainer"){
            header("location:user-trainer.php");
        }
        else if($qry['level']=="manager"){
            header("location:manager.php");
        }

    }else{

        ?>
  <script language="JavaScript">
    alert('Login failed');
    document.location = 'log.php';
  </script>
  <?php
    }
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

  .front-page {
    display: flex;
    width: 100%;
    height: 900px;
    background-color: whitesmoke;
  }

  .login {
    width: 420px;
    background-color: #ffffff;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    margin: 100px auto;
    height: 450px;
    border-radius: 20px;
  }

  .login h1 {
    text-align: center;
    color: #5b6574;
    font-size: 24px;
    padding: 20px 0 20px 0;
    border-bottom: 1px solid #dee0e4;
  }

  .login form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px;
  }

  .login form label {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    background-color: #3274d6;
    color: #ffffff;
  }

  .login form input[type="password"],
  .login form input[type="text"] {
    width: 310px;
    height: 50px;
    border: 1px solid #dee0e4;
    margin-bottom: 20px;
    padding: 0 15px;
  }

  .login form input[type="submit"] {
    width: 100%;
    padding: 15px;
    margin-top: 20px;
    background-color: #3274d6;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: #ffffff;
    transition: background-color 0.2s;
  }

  .login form input[type="submit"]:hover {
    background-color: #2868c7;
    transition: background-color 0.2s;
  }
</style>

</html>