<?php
include 'connection.php';
if(isset($_GET['deleteId'])){
  $id = $_GET['deleteId'];
  $sql = "delete from `club` where id_club=$id";
  $result = mysqli_query($con,$sql);
  if($result){
    // echo "deleted";
    header ('location:dashboardClubs.php');
  }else{
    die(mysqli_error($con));
  }
}

?>