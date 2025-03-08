<?php
$servername = "localhost";
$username = "root";
$password = ""; // Если у вас установлен пароль, укажите его
$dbname = "hotel_booking";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$destination = $_POST['destination'];
$hotel = $_POST['hotel'];
$rooms = $_POST['rooms'];
$balcony = $_POST['balcony'];
$meal_type = $_POST['meal_type'];
$email = $_POST['email'];

// SQL-запрос для вставки данных
$sql = "INSERT INTO bookings (checkin, checkout, destination, hotel, rooms, balcony, meal_type, email) VALUES ('$checkin', '$checkout', '$destination', '$hotel', '$rooms', '$balcony', '$meal_type', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Бронирование успешно оформлено!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>