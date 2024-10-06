<?php require_once 'core/dbConfig.php'; ?>

<!Doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php #query of lists of brands that are capsules
    $query = "SELECT brand, generic_name, dosage_form
              FROM drug
              WHERE dosage_form LIKE ?";

    $stmt = $pdo->prepare($query); #varvar

    $search = "Capsule";
    $executeQuery = $stmt->execute( #reflects in db
        [$search."%"] #concat
    );
    
    if($executeQuery) { #reflects in localhost/folder_name
        $capsuleList = $stmt->fetchAll();
    } else {
        echo "Query error";
    }
    ?>

    <!-- table, sana gumawa nalang ako ng css file  -->
    <div style="display: flex; justify-content: center;">
        <table border="1" style="border-collapse: collapse; margin-top: 10px; font-family: Arial; width: 80%; text-align: left;">
            <thead>
                <tr>
                    <th style="text-align:center;">Brand</th>
                    <th style="text-align:center;">Generic Name</th>
                    <th style="text-align:center;">Dosage Form</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($capsuleList as $row) { ?>
                <tr>
                    <td style="padding: 10px;"><?php echo $row['brand']; ?></td>
                    <td style="padding: 10px;"><?php echo $row['generic_name']; ?></td>
                    <td style="padding: 10px;"><?php echo $row['dosage_form']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>