<?php
session_start();
$conn=new mysqli("localhost","root","","elitmusdb");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$ans = $_POST['t1'];

if (strtolower($ans)=='doctor')
{

    $timer = time();

    $u = $_SESSION['username'];

    $sql = "UPDATE users SET end_7 = '$timer' WHERE username = '$u' ";
    $res = mysqli_query($conn, $sql);

    $s1 = "SELECT start_7 FROM users WHERE username='$u'";
    $res1 = mysqli_query($conn, $s1);
    $row1 = mysqli_fetch_assoc($res1);
    $start_7 = $row1['start_7'];

    $s2 = "SELECT end_7 FROM users WHERE username='$u'";
    $res2 = mysqli_query($conn, $s2);
    $row2 = mysqli_fetch_assoc($res2);
    $end_7 = $row2['end_7'];

    if ($res && $res1 && $res2) {
        $m = $end_7 - $start_7;
        $s3 = "UPDATE users SET score_7 = '$m' WHERE username = '$u'";
        $res3 = mysqli_query($conn, $s3);
        echo '<script>window.location.href = "Page8.php";</script>';
    }

    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

else
{
    echo ' <script> window.location.href = "DeadEnd.php"; </script>';
}


?>