<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss4";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tables (id,name,email,password)
VALUES 
    (1,'Tin','truongchitin@gmail.com','123456a'),
    (2,'tuan','vantuan@gmail.com','123456b'),
    (3,'tuyen','dinhtuyen@gmail.com','123456c'),
    (4,'huy','vanhuy@gmail.com','123456d'),
    (5,'ky','tangky@gmail.com','123456e')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>