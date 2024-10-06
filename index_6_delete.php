<?php require_once 'core/dbConfig.php'; ?>

<!Doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php #noo dont thanos snap me
    $query = "DELETE FROM purchase WHERE purchase_id = 11";

    $stmt = $pdo->prepare($query); #query is still var

    $executeQuery = $stmt->execute(); #rip data that was just here
    

    if($executeQuery) { #reflects in localhost/folder_name
        echo "Query deleted";
    } else {
        echo "Query error";
    }
    ?>
</body>
</html>