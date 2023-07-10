<?php
include 'conn.php';
if(isset($_GET['sno'])){
    $sno=$_GET['sno'];
  $query="DELETE FROM driver_details WHERE sno='$sno'";
  $data=mysqli_query($con,$query);
  if($data){
    ?>
<script>
    alert("delete successfully");
</script>
    <?php
  }  
  else{
    ?>
    <script>
        alert("not delete successfully");
    </script>
        <?php
  }
}
?>