<?php require_once 'core/dbConfig.php'; ?>

<!Doctype HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $query = "SELECT * FROM stock WHERE purchase_date BETWEEN '2024-01-01' AND '2024-12-31'
  GROUP BY purchase_date";

  $stmt = $pdo->prepare($query); #sql query is now var

  echo "<pre>"; #preformatted, as instructed
  if ($stmt->execute()) {
    print_r($stmt->fetch()); #prints the table, makes it array
  }
  echo "<pre>";
  ?>
</body>
</html>


