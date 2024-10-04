<?php 

$contents = [
    "one" => ["video" => "https://www.youtube.com/watch?v=4YgcJvvdv8w", "date" => "17.09.2024", "name" => "SOOQA", "buy" => "160 руб"],
    "two" => ["video" => "https://youtu.be/Wl7KmPebq6Y?si=pkYgyrDLyi9fBKlp", "date" => "21.08.2024", "name" => "2Hollis", "buy" => "150 руб"],
    "three" => ["video" => "https://www.youtube.com/watch?si=Z-208GIsMo3xfL7H&v=zLjQoWyfMq0&feature=youtu.be", "date" => "15.08.2024", "name" => "Mista Play", "buy" => "150 руб"]
];

$selectedContent = null; 

foreach ($contents as $key => $content) {
    if (isset($_GET[$key])) {
        $selectedContent = $content;
        break;
    }
}

if ($selectedContent === null) {
    echo "Контент не найден.";
    exit;
}

$contentVideo = $selectedContent["video"];
$contentDate = $selectedContent["date"];
$contentName = $selectedContent["name"];
$contentBuy = $selectedContent["buy"];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AngusMarkets - project order</title>
    <style>
        .project form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .cart-panel {
            position: fixed;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            width: 300px; 
            display: none; 
        }

        .cart-panel.show {
            display: block; 
        }

        .cart-panel h3 {
            margin-top: 0;
        }

        .cart-item {
            border-bottom: 1px solid #eee;
            padding: 10px 0;
        }

        .cart-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cart-button:hover {
            background-color: #45a049;
        }

        .cart-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .cart-close:hover {
            color: red;
        }

        .open-cart-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .open-cart-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Заказ проекта</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Главная</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
    </nav>
    <main>
        <div class="video-container">

        <iframe width="560" height="315" src="<?php echo str_replace("watch?v=", "embed/", $contentVideo); ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="description-container">
            <h2><?php echo $contentName; ?></h2>
            <p><strong>Дата выпуска : </strong> <?php echo $contentDate; ?></p>
            <p><strong>Цена : </strong> <?php echo $contentBuy; ?></p>
            <p><strong>Ссылка на видео : </strong><a href="<?= $contentVideo ?>"><strong>Видео</strong></a> / 
            <a href="https://t.me/V1ctory14"><strong>Если хотите заказать, нажмите на эту надпись</strong></a></p>
            <button id="add-to-cart-button">Добавить в корзину</button>
        </div>

        <div class="cart-panel" id="cart-panel">
            <span class="cart-close" onclick="closeCart()">&times;</span>
            <h3>Корзина</h3>
            <div id="cart-items">
                
            </div>
            <form action="help.php" method="GET" onsubmit="return saveCartData()">
                <input type="hidden" name="cartData" id="cartData" value="">
                <input type="submit" value="Перейти в корзину">
            </form>
        </div>

        
        <button class="open-cart-button" onclick="toggleCart()">🛒</button>
    </main>

    <footer>
        <p>&copy; 2024 AngusMarkets </p>
    </footer>

    <script>
        let cart = [];

        const cartPanel = document.getElementById("cart-panel");
        const cartItems = document.getElementById("cart-items");

        function loadCart() {
            cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.forEach(item => {
                addCartItem(item.name, item.price);
            });
        }

        function addCartItem(name, price) {
            const cartItem = document.createElement("div");
            cartItem.classList.add("cart-item");
            cartItem.innerHTML = `
                <p><strong>${name}</strong></p>
                <p>${price}</p>
                <button onclick="removeFromCart('${name}')">Удалить</button>
            `;
            cartItems.appendChild(cartItem);
        }

        function closeCart() {
            cartPanel.classList.remove("show");
        }

        function toggleCart() {
            cartPanel.classList.toggle("show");
        }

        function saveCartData() {
            document.getElementById('cartData').value = JSON.stringify(cart); 
            return true; 
        }

        document.getElementById('add-to-cart-button').addEventListener('click', function() {
            const product = {
                name: "<?php echo $contentName; ?>",
                price: "<?php echo $contentBuy; ?>"
            };
            cart.push(product); 
            addCartItem(product.name, product.price);
            localStorage.setItem('cart', JSON.stringify(cart)); 
            toggleCart(); 
        });

        function removeFromCart(name) {
            cart = cart.filter(item => item.name !== name); 
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCart(); 
        }

        function updateCart() {
            cartItems.innerHTML = '';
            cart.forEach(item => {
                addCartItem(item.name, item.price); 
            });
        }

        document.addEventListener('DOMContentLoaded', loadCart); 
    </script>
</body>
</html>
