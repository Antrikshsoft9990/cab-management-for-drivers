<?php
include 'conn.php';
if(isset($_GET['submit'])){
 $sno=$_GET['sno'];
 $select="SELECT * FROM driver_details WHERE sno='$sno'";
 $query=mysqli_query($con,$select);
 $row=mysqli_fetch_array($query);

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
            <input value="<?php $row['name'] ?>" type="text" id="Driver" placeholder="name" name="name" required>
            <br>
            <label for="Driverid">Driver ID number: </label>
            <input value="<?php $row['Id_number'] ?>" type="text" id="number" placeholder="ID number" name="Id_number" required>
            <br>
            <label for="Driveremail">Driver Email: </label>
            <input value="<?php $row['email'] ?>" type="text" id="email" placeholder="email" name="email" required>
            <br>
            <label for="phonenum">Driver Phone Number: </label>
            <input value="<?php $row['phone'] ?>" type="text"  id="phone" placeholder="phone number" name="phone" required>
            <br>
            <button type="submit" id="submit" name="updatebtn" value="update">submit</button>
           <button><a href="select.php" id="show">back</a></button>
        </form>
    </div>
</body>
</html>

<?php
include 'conn.php';
if(isset($_POST['updatebtn'])){
$name=$_POST['name'];
$Id_number=$_POST['Id_number'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$updatequery="UPDATE  driver_details SET name='$name',Id_number='$Id_number',email='$email',phone='$phone' WHERE sno='$sno'";

$query=mysqli_query($con,$updateqeuery);

if($query){
    ?>
<script>
    alert("update");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("not update");
        </script>
        <?php
}
}
?>