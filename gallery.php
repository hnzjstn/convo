<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Memory Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Section Memory Gallery</h1>
    <a href="index.html">Upload New Image</a>
    <div class="gallery">
        <?php
        $conn = new mysqli("localhost", "root", "", "memory_gallery");
        $result = $conn->query("SELECT * FROM memories ORDER BY uploaded_at DESC");

        while ($row = $result->fetch_assoc()) {
            echo "<div class='image-box'>";
            echo "<img src='" . $row['image_path'] . "' alt='" . $row['image_name'] . "'>";
            echo "<p>" . $row['image_name'] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
