<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon X</title>
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
        <div class="form-area">
            <form class="form" method="post">
            <p class="title">Appointment</p>
            <p class="message">Book Your Appointment As Per Your Want.</p>
            <label>
            <input class="input" type="name" name="Name" placeholder="" required>
            <span>Name</span>
            </label>
            <label>
            <input class="input" type="phone" name="PhoneNumber" placeholder="" required>
            <span>Phone Number</span>
            </label>
            <label>
            <input class="input" type="email" name="Email" placeholder="" required>
            <span>Email</span>
            </label>
            <label>
            <input class="input" type="date" name="Date" placeholder="" required>
            <span>Date</span>
            </label>
            <label>
            <input class="input" type="time" name="Time" placeholder="" required>
            <span>Time</span>
            </label>
            <label>
            <input class="input" type="Category" name="Category" placeholder="" required>
            <span>Category</span>
            </label>
            <button class="submit" name="button">Book Now</button>     
            </form>
        </div>
    </div>
</body>
</html>
<?php
include("dbconn.php");

if (isset($_POST['button'])) {
    $name = $_POST['Name'];
    $phonenumber = $_POST['PhoneNumber'];
    $email = $_POST['Email'];
    $date = $_POST['Date'];
    $time = $_POST['Time'];
    $category = $_POST['Category'];
    $insert = "INSERT INTO `appointment`(`Name`, `Phone Numer`, `Email`, `Date`, `Time`, `Category`) 
    VALUES ('$name','$phonenumber','$email','$date','$time','$category')";
    $run = mysqli_query($conn, $insert);

    if ($run) {
        echo "<script> alert('Appointment Booked'); window.location.href='user.php'</script>";
    } else {
        echo "<script> alert('Appointment Not Booked')</script>";
    }
}
?>