<?php
    require_once "vendor/autoload.php";
    use App\Admin_db;
    session_start();
    $admin = isset($_SESSION["admin"]);
    $db = new Admin_db();
    $orders = $db->get_orders();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <title>Админ понель</title>
</head>
<body>

<?php if (!$admin): ?>
    <div class="login">
        <form id="login_form" action="ajax/login_admin.php" method="post">
            <div>
                <label for="login">Логин</label>
                <input name="login" id="login" type="text">
                <label for="password">Пароль</label>
                <input name="password" id="password" type="password">
            </div>
            <button>Войти</button>
        </form>
    </div>

<?php else: ?>


    <header>
        <nav>
            <div>
                <button class="switch_tab" data-id="1">Заказы</button>
            </div>
            <div>
                <button class="switch_tab" data-id="2">Товары</button>
            </div>
            <div>
                <button class="switch_tab" data-id="3">Отзывы</button>
            </div>
            <div>
                <a href="ajax/logout.php">
                    <button>Выход</button>
                </a>
            </div>
        </nav>
    </header>

    <main>
        <div class="tab" style="display: block;" id="orders" data-id="1">
            <h2>Заказы</h2>
        <?php foreach ($orders as $order): ?>
            <div class="order">
                <p><strong>Имя заказчика:</strong> <?= $order["Name"] ?></p>
                <p><strong>Логин:</strong><?= $order["Login"] ?></p>
                <p><strong>Телефон:</strong><?= $order["Phone"] ?></p>
                <p><strong>Дата:</strong><?= DateTime::createFromFormat("Y-m-d", $order["Date"])->format("d.m.Y") ?></p>
                <p><strong>Товары:</strong></p>
            <?php foreach($order["Goods"] as $good): ?>
                <p><?= $good["Name"] ?>, <?= $good["Price"] ?> * <?= $good["Count"] ?> = <?= $good["Price"] ?> * <?= $good["Count"] ?></p>
            <?php endforeach ?>
                <p><strong>Итоговая стоимость:</strong><?= $order["Total_price"] ?></p>
                <p><strong>Товары:</strong><?= $order["Comment"] ?></p>
            </div>

        <?php endforeach; ?>
        </div>

        <div class="tab" id="goods" data-id="2">
            <h2>Товары</h2>
        </div>

        <div class="tab" id="reviews" data-id="3">
            <h2>Отзывы</h2>
        </div>
    </main>

<?php endif; ?>

<script src="assets/js/admin.js"></script>
</body>
</html>