<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Slide Gallery with Array</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
        }
        .image-gallery img {
            width: 80px;
            margin: 10px;
            cursor: pointer;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        .image-gallery img:hover {
            transform: scale(1.1);
            opacity: 0.7;
        }
        .main-image {
            width: 500px;
            height: 400px;
            overflow: hidden;
            border: 4px solid #f8ff2afe;
        }
        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<?php
// PHP array to store image paths
$images = [
    "shopping.webp",
    "shopping (1).webp",
    "shopping (2).webp",
    "download (1).jfif"
];

// Set the default main image (first image in the array)
$mainImage = isset($_GET['image']) ? $_GET['image'] : $images[0];
?>

<div class="container">
    <!-- Side images (Thumbnails) -->
    <div class="image-gallery">
        <?php foreach ($images as $image): ?>
            <a href="?image=<?php echo $image; ?>">
                <img src="<?php echo $image; ?>" alt="Thumbnail">
            </a>
        <?php endforeach; ?>
    </div>

    <!-- Main image -->
    <div class="main-image">
        <img src="<?php echo $mainImage; ?>" alt="Main Image">
    </div>
</div>

</body>
</html>
