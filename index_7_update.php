<?php require_once 'core/dbConfig.php'; ?>

<!Doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php #haha naol inaupdate
    $query = "UPDATE expiryalert
              SET status = ?
              WHERE alert_id = 19
              ";

    $stmt = $pdo->prepare($query); #varrrrrr

    $executeQuery = $stmt->execute( #reflects in db
        ["Will notify soon"] 
    ); #alert_date is last days ng oct so soon yan yay
    
    if($executeQuery) { #reflects in localhost/folder_name
        echo "Query updated";
    } else {
        echo "Query error";
    }
    ?>
</body>
</html>