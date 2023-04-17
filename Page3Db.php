<?php
session_start();
$conn=new mysqli("localhost","root","","elitmusdb");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$ans = $_POST['t1'];

echo "strtolower($ans)";

if (strtolower($ans)=='lawyer')
{

    $timer = time();

    $u = $_SESSION['username'];

    $sql = "UPDATE users SET end_3 = '$timer' WHERE username = '$u' ";
    $res = mysqli_query($conn, $sql);

    $s1 = "SELECT start_3 FROM users WHERE username='$u'";
    $res1 = mysqli_query($conn, $s1);
    $row1 = mysqli_fetch_assoc($res1);
    $start_3 = $row1['start_3'];

    $s2 = "SELECT end_3 FROM users WHERE username='$u'";
    $res2 = mysqli_query($conn, $s2);
    $row2 = mysqli_fetch_assoc($res2);
    $end_3 = $row2['end_3'];

    if ($res1 && $res2) {
        $m = $end_3 - $start_3;
        $s3 = "UPDATE users SET score_3 = '$m' WHERE username = '$u'";
        $res3 = mysqli_query($conn, $s3);
        echo '<script>window.location.href = "Page4.php";</script>';
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