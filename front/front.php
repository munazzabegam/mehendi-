<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../includes/db.php';


$result = $conn->query("SELECT * FROM Front_hand");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Designs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/design.css">
</head>
<body>
    <h1>Front Designs</h1>

    <div class="design-container">
        <?php
        while($row = $result->fetch_assoc()) {
            echo "<div class='design-card'>";
            echo "<img src='../front_img/{$row['image_path']}' alt='{$row['design_name']}'>";
            echo "<h3>{$row['design_name']}</h3>";
            echo "</div>";
        }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
