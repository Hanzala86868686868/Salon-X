<?php
include("dbconn.php");
$id=  $_GET['id'];
$name=  $_GET['Name'];
$phonenumber=  $_GET['PhoneNumber'];
$email=  $_GET['Email'];
$date=  $_GET['Date'];
$time=  $_GET['Time'];
$category=  $_GET['Category'];

$deletequery="DELETE FROM `appointment` WHERE ID=$id";
$runquery=mysqli_query($conn,$deletequery);
if ($runquery) {

    # code...
    echo "<script> alert('Data Deleted')
    window.location.href='iadmin.php'</script>
     ";
}
else {
    # code...
    echo "<script> alert('Data Not Deleted')</script>";
}

?>