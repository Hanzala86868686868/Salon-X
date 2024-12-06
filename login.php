<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Management</title>
    <style>
      body{
        background-color:dodgerblue;
      }
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width:300px;
  padding: 20px;
  border-radius: 20px;
  position: relative;
  background-color:black;
  color: white;
  border: 5px solid white;
  margin:auto;
  margin-top: 50px;
}

.title {
  font-size: 25px;
  font-weight: 500;
  letter-spacing: 1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 25px;
  color: dodgerblue;
}

.title::before {
  width: 25px;
  height: 25px;
}

.title::after {
  width: 30px;
  height: 30px;
  animation: pulse 1s linear infinite;
}

.title::before,
.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: dodgerblue;
}

.message, 
.signin {
  font-size: 16px;
  color: white;
}

.signin {
  text-align: center;
}

.signin a:hover {
  text-decoration: underline dodgerblue;
}

.signin a {
  color: dodgerblue;
}

.flex {
  display: flex;
  width: 100%;
  gap: 5px;
}

.form label {
  position: relative;
}

.form label .input {
    background: linear-gradient(rgba(29, 36, 52, 1), rgba(29, 36, 52, .5), rgba(29, 36, 52, 1));
  color: white;
  width: 93%;
  padding: 20px 05px 05px 10px;
  outline: 0;
  border: 2px solid dodgerblue;
  border-radius: 10px;
}

.form label .input + span {
  color: white;
  position: absolute;
  left: 10px;
  top: 0px;
  font-size:16px;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 12.5px;
  font-size: 16px;
}
.form label .input:focus + span,
.form label .input:valid + span {
  color: dodgerblue;
  top: 0px;
  font-size: 16px;
  font-weight: 500;
}

.input {
  font-size: medium;
}
.submit {
  border: 2px solid white;
  outline: none;
  padding: 10px;
  border-radius: 10px;
  color: white;
  font-size: 16px;
  transform: .3s ease;
  background-color:dodgerblue;
}

.submit:hover {
    background: linear-gradient(rgba(29, 36, 52, 1), rgba(29, 36, 52, .5), rgba(29, 36, 52, 1));
    color: white;
    border: 2px solid dodgerblue;
  
}
@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}
.h1{
  text-align:center;
  font-size:50px;
  color:white;
  }
</style>
</head>
<body>
<h1 class="h1">Salon X</h1>
<div class="container">
  <div class="form_area">
  <form class="form" method="post">
    <p class="title">Login</p>
    <p class="message">Login now and get full access to our Website.</p>
              
    <label>
        <input class="input" type="email" placeholder="" required name="email">
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" type="password" placeholder="" required name="Password">
        <span>Password</span>
    </label>

  

    <button class="submit" name="button">Login</button>
    <p class="register">Don't have an acount ? <a href="register.php">Register</a> </p>
</form>
  </div>
</div>
</body>
</html>


<?php
include("dbconn.php");
session_start();
if(isset($_POST['button'])){
  $email = $_POST['email'];
  $Password = $_POST['Password'];
  $runselect="SELECT * FROM `register` WHERE Email='$email' and Password='$Password'";
  $run=mysqli_query($conn,$runselect);
  $fetch=mysqli_fetch_array($run);
  // print_r($fetch);
$_SESSION['uemail'] = $fetch[3];
$_SESSION['upassword'] = $fetch[4];
$_SESSION['urole'] = $fetch[5];
header("location:user.php");
}
?>

