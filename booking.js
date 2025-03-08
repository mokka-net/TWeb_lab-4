        function updateCheckoutDate() {
            let checkInDate = document.getElementById('checkin').value;
            let checkOutDate = document.getElementById('checkout');
            checkOutDate.min = checkInDate;
        }

        function resetForm() {
            document.getElementById('bookingForm').reset();
        } <<
        ? php
        $servername = "localhost";
        $username = "root";
        $password = ""; // Если у вас установлен пароль, укажите его
        $dbname = "hotel_booking";

        // Создание соединения
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Проверка соединения
        if ($conn - > connect_error) {
            die("Connection failed: ".$conn - > connect_error);
        }