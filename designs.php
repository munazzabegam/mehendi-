<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'includes/db.php';


$result = $conn->query("SELECT * FROM mehendi_designs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehendi Designs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style.css">
    <style>
        body {
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }

        .design-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .design-card {
            width: 300px;
            text-align: center;
            background-color: #fff; 
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .design-card:hover {
           transform: scale(1.05);
        }

        .design-card img {
            width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .design-card h3 {
            margin-top: 10px;
        }

        @media (max-width: 768px) {
        .design-card {
        width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Mehendi Designs</h1>

   
    <div class="design-container">
        <?php
        while($row = $result->fetch_assoc()) {
            echo "<div class='design-card'>";
            echo "<img src='./uploads/{$row['image_path']}' alt='{$row['design_name']}'>";
            echo "<h3>{$row['design_name']}</h3>";
            echo "</div>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
