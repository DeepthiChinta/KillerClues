<?php
session_start();
$conn=new mysqli("localhost","root","","elitmusdb");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$timer = time();

$u = $_SESSION['username'];

$sql = "UPDATE users SET start_9 = '$timer' WHERE username = '$u' ";
$res = mysqli_query($conn, $sql);

if($res)
  {
    echo ' <script> window.location.href = "Page9.php"; </script>';
  }
  else
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>