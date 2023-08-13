<?php
$servername = "localhost";
$database = "test";
$username = "root";
$password = "113380";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// Запрос на создание
if(isset($_POST['name']) && isset($_POST['phone'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, phone) VALUES ('$name', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
mysqli_close($conn);