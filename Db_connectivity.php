<?php
$conn= new mysqli("localhost","root","","elitmusdb");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pswd'];
$cnfpass=$_POST['cnfpswd'];


$sql="SELECT * FROM users WHERE username='$user' ";
$res=mysqli_query($conn,$sql);
if($res->num_rows>0)
{    
    echo "<script> alert('$user already present Try changing the name');
    window.location.href='SignUp.php';</script> ";
}

$sql="SELECT * FROM users WHERE email='$email' ";
$res = mysqli_query($conn,$sql);
if($res->num_rows>0)
{    
    echo "<script> alert('$email already present');
    window.location.href='SignUp.php';</script> ";
}

if ($pass == $cnfpass)
{
  $sql="INSERT INTO users(username,email,password) VALUES('$user','$email','$pass')";
  $res=mysqli_query($conn,$sql);
  if($res)
  {
    echo '<script>alert("Succesfull!!");
    window.location.href = "SignIn.php"; </script>';
  }
  else
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
} 
else
{
    echo '<script>alert("password and the confirm password should be same");
    window.location.href="SignUp.php";</script>';
}
$conn->close();
?>