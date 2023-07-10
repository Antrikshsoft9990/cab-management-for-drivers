<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<a href="login.php">update</a>
<h1>Driver details</h1>

<table id="customers">
  <tr>
    <th>sno</th>
    <th>Name</th>
    <th>Id_number</th>
    <th>email</th>
    <th>Phone</th>
    <th colspan="2">Action</th>
  </tr>
  <?php
include 'conn.php';
$selectquery="select * from driver_details";
$query=mysqli_query($con,$selectquery);
while($result=mysqli_fetch_assoc($query)){
  ?>
  <tr>
    <td><?php echo $result['sno'];?></td>
    <td><?php echo $result['name'];?></td>
    <td><?php echo $result['Id_number'];?></td>
    <td><?php echo $result['email'];?></td>
    <td><?php echo $result['phone'];?></td>
    <td><a href="update.php?id=<?php  $result['sno']?>">update</a></td>
    <td><a onclick="return confirm('ARE YOU SURE!')" href="delete.php?id=<?php  $result['sno']?>">delete</a></td>
  </tr>
  <?php
}
?>
  </body>
</html>