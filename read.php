<?php
 include("dbconn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Salon X</title>
</head>
<body>
<div class="container">
<table class="table">
  <thead>

  <?php
   $selectQuery="SELECT * FROM `appointment`";
   $query=mysqli_query($conn,$selectQuery);
   $row=mysqli_num_rows($query);
   ?>
  <h1>Appointment</h1>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">PhoneNumber</th>
    <th scope="col">Email</th>
    <th scope="col">Date</th>
    <th scope="col">Time</th>
    <th scope="col">Category</th>
    <th scope="col">UPDATE</th>
    <th scope="col">DELETE</th>
  </tr>
</thead>
    
      <tbody>
        <?php 
        while ( $fetch=mysqli_fetch_assoc($query)) {  ?>

          <tr>
      
          <td><?php echo $fetch['ID'] ; ?></td>
          <td><?php echo  $fetch['Name'] ;  ?></td>
          <td><?php echo  $fetch['Phone Numer'] ;  ?></td>
          <td><?php echo  $fetch['Email'] ;  ?></td>
          <td><?php echo $fetch['Date'] ;  ?></td>
          <td><?php echo $fetch['Time'] ;  ?></td>
          <td><?php echo $fetch['Category'] ;  ?></td>
          <td><a href="update.php?id=
          <?php echo $fetch['ID'] ;  ?>
          & Name=<?php echo $fetch['Name'] ;  ?>
           & PhoneNumber=<?php echo $fetch['Phone Numer'] ;  ?>
            & Email=<?php echo $fetch['Email'] ;  ?>
            & Date=<?php echo $fetch['Date'] ;  ?>
            & Time=<?php echo $fetch['Time'] ;  ?>
            & Category=<?php echo $fetch['Category'] ;  ?>">Update</a></td>
            <td><a href="delete.php?id=
            <?php echo $fetch['ID'] ;  ?>
          & Name=<?php echo $fetch['Name'] ;  ?>
           & PhoneNumber=<?php echo $fetch['Phone Numer'] ;  ?>
            & Email=<?php echo $fetch['Email'] ;  ?>
            & Date=<?php echo $fetch['Date'] ;  ?>
            & Time=<?php echo $fetch['Time'] ;  ?>
            & Category=<?php echo $fetch['Category'] ;  ?>">Delete</a></td>
          
         
        </tr>

        <?php
        }
        
        
        ?>
   

  </tbody>

  

</table>
</div>


<div class="container">
<table class="table">
  <thead>

  <?php
   $selectQuery="SELECT * FROM `payment`";
   $query=mysqli_query($conn,$selectQuery);
   $row=mysqli_num_rows($query);
   ?>
  <h1>Payment</h1>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">PhoneNumber</th>
    <th scope="col">Email</th>
    <th scope="col">Amount</th>
    <th scope="col">Number</th>
    <th scope="col">UPDATE</th>
    <th scope="col">DELETE</th>
  </tr>
</thead>
    
      <tbody>
        <?php 
        while ( $fetch=mysqli_fetch_assoc($query)) {  ?>

          <tr>
      
          <td><?php echo $fetch['ID'] ; ?></td>
          <td><?php echo  $fetch['Name'] ;  ?></td>
          <td><?php echo  $fetch['PhoneNumber'] ;  ?></td>
          <td><?php echo  $fetch['Email'] ;  ?></td>
          <td><?php echo $fetch['Amount'] ;  ?></td>
          <td><?php echo $fetch['Number'] ;  ?></td>
          <td><a href="update2.0.php?id=
          <?php echo $fetch['ID'] ;  ?>
          & Name=<?php echo $fetch['Name'] ;  ?>
           & PhoneNumber=<?php echo $fetch['PhoneNumber'] ;  ?>
            & Email=<?php echo $fetch['Email'] ;  ?>
            & Amount=<?php echo $fetch['Amount'] ;  ?>
            & Number=<?php echo $fetch['Number'] ;  ?>">Update</a></td>
            <td><a href="delete2.0.php?id=
            <?php echo $fetch['ID'] ;  ?>
          & Name=<?php echo $fetch['Name'] ;  ?>
           & PhoneNumber=<?php echo $fetch['PhoneNumber'] ;  ?>
            & Email=<?php echo $fetch['Email'] ;  ?>
            & Amount=<?php echo $fetch['Amount'] ;  ?>
            & Number=<?php echo $fetch['Number'] ;  ?>">Delete</a></td>
          
         
        </tr>

        <?php
        }
        
        
        ?>
   

  </tbody>

  

</table>
</div>



</body>
</html>


        