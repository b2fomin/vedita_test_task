<?php

class CProduct {
    public static function get_data(int $number, string $order='DESC') {
        $conn = new mysqli('localhost', 'root', 'root');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT * FROM test_task_db.products ORDER BY date_create " . $order . " LIMIT " . $number;
        if ($data = $conn->query($query)->fetch_all(MYSQLI_ASSOC)) {
            $columns = array_keys($data[0]);
            unset($columns[array_search('id', $columns)]);
            unset($columns[array_search('is_hidden', $columns)]);
            for($i = 0; $i < count($data); ++$i) {
                $row = &$data[$i];
                unset($row['id']);
                unset($row['is_hidden']);
            }
            return [$columns, $data];
        } else {
        echo "Ошибка: " . $conn->error;
    }

    $conn->close();
    return false;

    }
};