<?php

class CProduct {
    public static function get_data(int $number) {
        $conn = new mysqli('localhost', 'root', 'root');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT * FROM test_task_db.products ORDER BY date_create DESC LIMIT " . $number;
        if ($data = $conn->query($query)) {
            return $data;
        } else {
        echo "Ошибка: " . $conn->error;
    }

    $conn->close();
    return false;

    }
};