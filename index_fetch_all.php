<?php require_once 'core/dbConfig.php'; ?>

<!Doctype HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name=viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
  $stmt = $pdo->prepare("SELECT * FROM stockreport"); #select table, sql

  echo "<pre>"; #preformatted, as instructed
  if ($stmt->execute()) {
    print_r($stmt->fetchAll()); #prints the table, makes it array
  }
  echo "<pre>";
  ?>
</body>
</html>