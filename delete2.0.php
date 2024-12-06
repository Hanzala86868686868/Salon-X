<?php
include("dbconn.php");
$id=  $_GET['id'];
$name=  $_GET['Name'];
$phonenumber=  $_GET['PhoneNumber'];
$email=  $_GET['Email'];
$amount=  $_GET['Amount'];
$number=  $_GET['Number'];

$deletequery="DELETE FROM `Payment` WHERE ID=$id";
$runquery=mysqli_query($conn,$deletequery);
if ($runquery) {

    # code...
    echo "<script> alert('Data Deleted')
    window.location.href='admin.php'</script>
     ";
}
else {
    # code...
    echo "<script> alert('Data Not Deleted')</script>";
}

?>