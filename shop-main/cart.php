<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/cart.css">
</head>
<body>
    <?php include "html/header.html"; ?>

    <main>
        <h1>Корзина</h1>
        <div class="goods">
            <a href="good.php" class="good">
                <div class="image">
                    <img src="https://picsum.photos/id/1/300/300" alt="">
                </div>
                <div class="text">
                    <p class="name">Lorem ipsum dolor sit.</p>
                    <p class="id">123123</p>
                </div>
                <div class="price">
                    <p>123 123</p>
                    <button class="delet_button">
                        <img src="assets/images/delete-1487-svgrepo-com.svg" alt="">
                    </button>
                </div>
            </a>
        </div>
        <div class="actions">
            <button>Удалить всё</button>
        </div>
        <div class="total">
            <p class="text">Общая стоимость:</p>
            <p class="price">112 980</p>
        </div>
        <div class="order">
            <form action="" autocomplete="off">
                <label for="phone">Телефон</label>
                <input id="phone" type="text">
                <label for="email">Почта</label>
                <input id="email" type="text">
                <label for="comment">Коментарий</label>
                <textarea name="" id="comment" cols="30" rows="10"></textarea>
                <button>Заказать</button>
            </form>
        </div>
    </main>



    <?php include "html/footer.html"; ?>

<script src="assets/js/common.js"></script>

</body>
</html>