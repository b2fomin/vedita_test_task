<?php

class CProduct {
    public static function get_data(int $number, string $order='DESC') {
        $conn = new mysqli('localhost', 'root', 'root');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT * FROM test_task_db.products ORDER BY date_create " . $order . " LIMIT " . $number;
        if ($data = $conn->query($query)->fetch_all(MYSQLI_ASSOC)) {
            return $data;
        } else {
        echo "Ошибка: " . $conn->error;
    }

    $conn->close();
    return false;

    }
};