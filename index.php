<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css" />
    <script src="index.js" type="module"></script>
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            require_once('./CProduct.php');
            $data = CProduct::get_data(20);
            $columns = array_keys($data[0]);
            unset($columns[array_search("id", $columns)]);
            unset($columns[array_search("is_hidden", $columns)]);
            echo "<thead>";
            foreach($columns as $column) {
                echo "<th>" . $column . "</th>";
            }
            echo "</thead>";
            foreach($data as $row) {
                if ($row["is_hidden"]) 
                    continue;
                        
                echo "<tr>";
                foreach($row as $key => $cell) {
                    if ($key === "id" || $key === "is_hidden")
                        continue;
                    echo "<td>" . $cell . "</td>";
                }
                echo "<td><button>Hide</button></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>