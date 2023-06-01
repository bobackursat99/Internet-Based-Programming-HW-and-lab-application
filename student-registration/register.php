<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// POST verilerini al
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];

// Veritabanına bağlan
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Veri ekleme sorgusu
$sql = "INSERT INTO students (full_name, email, gender) VALUES ('$fullname', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
