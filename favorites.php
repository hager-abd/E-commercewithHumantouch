<?php
session_start();

// If no favorites exist, create an empty array
if (!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = [];
}

// If product data is received from the link, add it to favorites
if (isset($_GET['name']) && isset($_GET['image'])) {
    $product = [
        'name' => $_GET['name'],
        'image' => $_GET['image']
    ];
    
    // Add product to favorites
    $_SESSION['favorites'][] = $product;
}

// Get the favorite products from session
$favorites = $_SESSION['favorites'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Favorites</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #b60;
            color: white;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 20px;
            padding: 30px 40px;
            max-width: 800px;
            width: 100%;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 20px;
            animation: fadeIn 1s ease forwards;
            opacity: 0;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
            from {
                opacity: 0;
                transform: translateY(20px);
            }
        }

        h2 {
            font-size: 2em;
            color: #b60;
            margin-bottom: 20px;
            border-left: 5px solid #b60;
            padding-left: 10px;
        }

        .favorite-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .favorite-item img {
            width: 80px;
            height: 80px;
            border-radius: 10px;
        }

        .favorite-item h4 {
            font-size: 1.2em;
            color: #333;
        }

        .empty-message {
            text-align: center;
            font-size: 1.5em;
            color: #333;
        }
    </style>
</head>
<body>
<a href="index.html" style="position: fixed; top: 30px; right: 20px; background-color: #fff; color: orange; padding: 10px 20px; border-radius: 10px; text-decoration: none; font-weight: bold; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
  Go Home
</a>
<div class="container">
    <h2>Your Favorites ❤</h2>

    <?php if (empty($favorites)): ?>
        <p class="empty-message">You have no items in your favorites yet.</p>
    <?php else: ?>
        <?php foreach ($favorites as $item): ?>
            <div class="favorite-item">
                <img src="<?= htmlspecialchars($item['image']) ?>" alt="Product Image">
                <h4><?= htmlspecialchars($item['name']) ?></h4>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

</body>
</html>
