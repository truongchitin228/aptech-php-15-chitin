<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss4";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = "";
$email = "";
$password="";
    if(isset($_POST["name"])) { $name = $_POST['name']; }
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["password"])) { $password = $_POST['password']; }
    $sql = "SELECT *FROM users(name, email, password)
    VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
    echo "Thêm thành công";
    } else {
    echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }   
mysqli_close($conn);
?>
