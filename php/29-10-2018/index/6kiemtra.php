<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss4";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];
$sql ="SELECT * FROM tables WHERE email ='$email' and password ='$password'";
$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0) {
    echo "Bạn đã đăng nhập thành công";
    }
else
{
    echo "Bạn đã đăng nhập thất bại";
}
