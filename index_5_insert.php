<?php require_once 'core/dbConfig.php'; ?>

<!Doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php #where the data go?
    $query = "INSERT INTO purchase (purchase_id, drug_id, supplier_id, purchase_date,
    delivery_date, amount, status) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($query); #query is now var

    $executeQuery = $stmt->execute( #the data is here, reflects in db
        [11, 24, 3, '2024-11-05', '2024-11-25', 500, "Ongoing"]
    );

    if($executeQuery) { #reflects in localhost/folder_name
        echo "Query successful";
    } else {
        echo "Query error";
    }
    ?>
</body>
</html>