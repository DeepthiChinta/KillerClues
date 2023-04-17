<?php
$conn=new mysqli("localhost","root","","elitmusdb");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$user=$_POST['username'];
$pass=$_POST['pswd'];

if(isset($_POST['cb']) && $user=='ADMIN' && $pass=='PASSWORD')
{
    echo "<script>alert('Hello Admin');
    window.location.href='AdminDashboard.php';</script>";
}

$sql="SELECT * FROM users WHERE username='$user' AND password='$pass'";
$res=mysqli_query($conn,$sql);

if($res->num_rows>0)
{
    session_start();
    $_SESSION['username']=$user;
    
    echo "<script> alert('Hello $user');
    window.location.href='Homepg.php'; </script>";
}
else
{   
    echo '<script> alert("Username/Password is Invalid");
    window.location.href="SignIn.php" </script>' ;

}
$conn->close();
?>