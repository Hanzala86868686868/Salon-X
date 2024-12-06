<?php
include("dbconn.php");
$id=  $_GET['id'];
$name=  $_GET['Name'];
$phonenumber=  $_GET['PhoneNumber'];
$email=  $_GET['Email'];
$amount=  $_GET['Amount'];
$number=  $_GET['Number'];
?>

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
    </style>
</head>
<body>
<div class="container">
        <div class="form-area">
            <form class="form" method="post">
            <p class="title">Appointment</p>
            <p class="message">Update Your Appointment.</p>
              <label>
                  <input class="input" type="hidden" placeholder="" required name="id" value="<?php echo $id  ?>">
              </label>
              <label>
            <input class="input" type="name" name="Name" placeholder="" required value="<?php echo $name  ?>">
            <span>Name</span>
            </label>
            <label>
            <input class="input" type="phone" name="PhoneNumber" placeholder="" required value="<?php echo $phonenumber  ?>">
            <span>Phone Number</span>
            </label>
            <label>
            <input class="input" type="email" name="Email" placeholder="" required value="<?php echo $email  ?>">
            <span>Email</span>
            </label>
            <label>
            <input class="input" type="amount" name="Amount" placeholder="" required value="<?php echo $amount  ?>">
            <span>Amount</span>
            </label>
            <label>
            <input class="input" type="number" name="Number" placeholder="" required value="<?php echo $number  ?>">
            <span>Number</span>
            </label>
            <button class="submit" name="button">Update</button>     
            </form>
        </div>
    </div>
<?php

if (isset($_POST['button'])) {
    # code...
    $id= $_POST['id'];
   $name= $_POST['Name'];
   $phonenumber=  $_POST['PhoneNumber'];
   $email= $_POST['Email'];
   $amount= $_POST['Amount'];
   $number= $_POST['Number'];
   
   $updatequery="UPDATE `payment` SET `ID`='$id',`Name`='$name',`PhoneNumber`='$phonenumber',
   `Email`='$email',`Amount`='$amount',`Number`='$number' WHERE id=$id";
    $runquery=mysqli_query($conn,$updatequery);
    if ($runquery) {
        # code...
        echo "<script> alert('Data Updated')
        window.location.href='admin.php'</script>
         ";
    }
    else {
        # code...
        echo "<script> alert('Data Not Updated')</script>";
    }
}

?>