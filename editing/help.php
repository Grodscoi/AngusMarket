<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngusMarkets - Корзина</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; 
            color: #333; 
            margin: 0; 
            padding: 0;
        }
        .container {
            margin: 20px auto; 
            padding: 20px;
            border: 1px solid #ccc; 
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        h1 {
            text-align: center; 
            color: #4CAF50; 
        }
        h2 {
            text-align: center; 
            color: #555; 
        }
        ul {
            list-style-type: none;
            padding: 0; 
        }
        li {
            padding: 10px; 
            border-bottom: 1px solid #eee; 
        }
        a {
            color: #4CAF50; 
            text-decoration: none; 
        }
        a:hover {
            text-decoration: underline; 
        }
        header {
    background-color: #4CAF50;
    color: white;
    text-align: center; 
    padding: 1em 0;
}

nav {
    background-color: #333;
}

nav ul {
    list-style-type: none;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: white;
    padding: 14px 20px;
    text-decoration: none;
    display: inline-block;
}

nav ul li a:hover {
    background-color: #575757;
}
    </style>
</head>
<body>
    <header>
        <h1>AngusMarkets</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Данные Корзины</h1>
        <?php
        if (!empty($_GET)) {
            echo "<h2>Полученные данные:</h2>";
            echo "<ul>";

            foreach ($_GET as $key => $value) {
                echo "<li><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</li>";
            }

            echo "</ul>";
        } else {
            echo "<p>Корзина пуста.</p>";
        }
        ?>
    </div>

    <h2>Для заказа проекта напишите мне в тг : <a href="https://t.me/V1ctory14">Telegram</a></h2>
</body>
</html>
