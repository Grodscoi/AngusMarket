<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngusMarkets - contact</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9; 
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start; 
            min-height: 100vh; 
        }

        header {
            background-color: #4CAF50;
            color: white; 
            padding: 20px 0; 
            text-align: center;
            width: 100%; 
        }

        h1 {
            margin: 0; 
            font-size: 28px; 
        }
        nav {
            background-color: #333;
            width: 100%;
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

        .contact-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 800px;
            margin: 50px auto; 
            padding: 30px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            background-color: white;
            text-align: center;
        }

        .contact-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #4CAF50;
            margin-bottom: 20px;
        }

        .contact-info {
            text-align: center;
        }
        h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #555;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
            width: 100%;
            position: fixed;
            bottom: 0; 
        }

        @media (min-width: 768px) {
            .contact-container {
                flex-direction: row; 
                align-items: center; 
                justify-content: center; 
            }

            .contact-info {
                text-align: left; 
                margin-left: 30px; 
            }

            .contact-photo {
                margin-bottom: 0; 
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Контакты</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.html">Главная</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
    </nav>

    <div class="contact-container">
        <img src="загрузка — копия.png" class="contact-photo">
        <div class="contact-info">
            <h2>Контактная информация</h2>
            <strong>Telegram :</strong>
            <p><strong><a href="https://t.me/V1ctory14">Написать мне лично в Telegram</a></strong></p>
            <p><strong><a href="https://t.me/+pK1PVnyETuRlYWVi">Telegram канал</a></strong></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 AngusMarkets</p>
    </footer>
</body>
</html>
