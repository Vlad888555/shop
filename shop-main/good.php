<?php
    require_once "vendor/autoload.php";
    use App\DB;
    $db = new DB();
    if (isset($_GET["id"])){
        $id = $_GET["id"];
        $good = $db->get_good_by_id($id);
        if(count($good)){
            $good["Images"] = json_decode($good["Images"], true);
            $good["Spesc"] = json_decode($good["Spesc"], true);
            $good["Info"] = explode("\n", $good["Info"]);
        }
        else{
            header("Location: index.php");
            exit;
        }
    }
    else {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/good.css">
</head>
<body>

    <?php include "html/header.html"; ?>

    <main>
        <div class="genaral">
            <div class="photos">
                <div class="current">
                    <div class="image">
                        <img src="assets/goods/<?= $good["Images"][0] ?>" alt="">
                    </div>
                </div>
                <div class="preview">
                    <div class="image active">
                        <img src="assets/goods/<?= $good["Images"][0] ?>" alt="">
                    </div>
                    <?php for ($index = 1; $index < count($good["Images"]); $index++): ?>
                    <div class="image">
                        <img src="assets/goods/<?=$good["Images"][$index] ?> " alt="">
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="info">
                <h1><?= $good["Name"] ?></h1>
                <div class="price">
                    <p><?=$good["Price"] ?></p>
                    <button>Купить</button>
                </div>
                <ul>
                <?php foreach ($good["Info"] as $info): ?>
                    <li><?= $info ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="detail">
            <div class="tab_names">
                <div class="tab_name active" data-id="1">Характеристики</div>
                <div class="tab_name" data-id="2">Описания</div>
                <div class="tab_name" data-id="3">Отзывы</div>
            </div>
            <div class="tabs">
                <div class="tab active" data-id="1">
                    <h2>Технические Характеристики</h2>
                    <div class="table">
                        <?php foreach ($good["Spesc"] as $spec): ?>
                        <p><?= $spec["name"] ?></p> 
                        <p><?= $spec["value"] ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="tab" data-id="2">
                    <h2>Описания</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus quia fuga quidem, voluptates laudantium nihil cupiditate commodi repudiandae, distinctio consectetur doloribus assumenda. Voluptate soluta adipisci qui labore, corporis nemo provident enim optio odio animi laborum, quae veritatis fuga earum.</p>
                </div>
                <div class="tab" data-id="3">
                    <h2>Отзывы</h2>
                    <div class="reviews">
                        <div class="review">
                            <div class="score">5</div>
                            <div class="text">
                                <p class="name">Орий</p>
                                <p class="date">11 ноябьря</p>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur excepturi blanditiis 
                                    optio tenetur fuga veritatis accusantium iste dignissimos, autem, ullam corrupti modi illo porro? Repudiandae!</p>
                            </div>
                        </div>
                        <div class="review">
                            <div class="score">5</div>
                            <div class="text">
                                <p class="name">юрий</p>
                                <p class="date">11 ноябьря</p>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur excepturi blanditiis 
                                    optio tenetur fuga veritatis accusantium iste dignissimos, autem, ullam corrupti modi illo porro? Repudiandae!</p>
                            </div>
                        </div>
                        <div class="review">
                            <div class="score">5</div>
                            <div class="text">
                                <p class="name">юрий</p>
                                <p class="date">11 ноябьря</p>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur excepturi blanditiis 
                                    optio tenetur fuga veritatis accusantium iste dignissimos, autem, ullam corrupti modi illo porro? Repudiandae!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <?php include "html/footer.html"; ?>

<script src="assets/js/common.js"></script>
<script src="assets/js/good.js"></script>

</body>
</html>