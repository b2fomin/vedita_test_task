<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style='border: 3px solid; border-collapse: collapse; width: 100%;'>
        <?php
            require_once('./CProduct.php');
            [$columns, $data] = CProduct::get_data(20);
            echo "<thead>";
            foreach($columns as $column) {
                echo "<th style='border: 3px solid; border-collapse: collapse;'>" . $column . "</th>";
            }
            echo "</thead>";
            foreach($data as $row) {
                echo "<tr style='border: 3px solid; border-collapse: collapse;'>";
                foreach($row as $cell) {
                    echo "<td style='border: 3px solid; border-collapse: collapse;'>" . $cell . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>