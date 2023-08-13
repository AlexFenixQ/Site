<?php
$servername = "localhost";
$database = "test";
$username = "root";
$password = "113380";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Выбираем информацию о пользователе (имя и телефон)
$sql = "SELECT name, phone FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Имя: " . $row["name"]. " - Телефон: " . $row["phone"]. "<br>";
    }
} else {
    echo "Нет результатов";
}

$conn->close();