<?php
include 'conn.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$Id_number=$_POST['Id_number'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$insertquery="INSERT INTO `driver_details`(name, Id_number, email, phone) VALUES ('$name','$Id_number','$email','$phone')";

$query=mysqli_query($con,$insertquery);

if($query){
    ?>
    <script>
    alert('inserted');
        </script>
    <?php
    }
    else{
        ?>
    <script>
    alert('not insert');
        </script>
    <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cab management app</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="text">
            Driver details 
        </div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
            <label for="Drivername">Driver Name: </label>
            <input type="text" id="Driver" placeholder="name" name="name" required>
            <br>
            <label for="Driverid">Driver ID number: </label>
            <input type="text" id="number" placeholder="ID number" name="Id_number" required>
            <br>
            <label for="Driveremail">Driver Email: </label>
            <input type="text" id="email" placeholder="email" name="email" required>
            <br>
            <label for="phonenum">Driver Phone Number: </label>
            <input type="text"  id="phone" placeholder="phone number" name="phone" required>
            <br>
            <button type="submit" id="submit" name="submit">submit</button>
            <!-- <button id="show" link="select.php">show drivers</button> -->
            <a href="select.php" class="button" target="_blank">Show</a>
        </form>
    </div>
</body>
</html>