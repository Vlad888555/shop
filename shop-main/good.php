<?php
    session_start();
    require_once "vendor/autoload.php";
    use App\{DB, Helpers};
    $db = new DB();
    $user_id = $_SESSION["user_id"] ?? false;
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

    $reviews = $db->get_good_reviews($id);
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

    <?php include "html/header.php"; ?>

    <?php include "html/popup_message.php"; ?>

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
                    <p><?= number_format($good["Price"], 0, null, " ") ?></p>
                    <button class="add_to_cart" data-id="<?= $id ?>">Купить</button>
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
                   <?= $good["Description"] ?>
                </div>
                <div class="tab" data-id="3">
                    <h2>Отзывы</h2>
                    <div class="reviews">
                    <?php if($user_id): ?>
                        <form action="ajax/send_review.php" method="post">
                            <div>
                                <input name="good_id" type="hidden" value="<?= $id ?>">
                                <label for="rate">Оценка</label>
                                <select name="rate" id="rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected>5</option>
                                </select>
                                <label for="review">Текст</label>
                                <textarea name="review" id="review" rows="5"></textarea>
                            </div>
                            <button>Отправить</button>
                        </form>
                    <?php endif; ?>
                    <?php foreach($reviews as $review): ?>
                        <div class="review">
                            <div class="score"><?= $review["Rate"] ?></div>
                            <div class="text">
                                <p class="name"><?= $review["Name"] ?></p>
                                <p class="date"><?=Helpers::get_d_f_date((DateTime::createFromFormat("Y-m-d", $review["Date"])))?></p>
                                <p><?= $review["Text"] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
    </main>

    <?php include "html/footer.html"; ?>

<script src="assets/js/common.js"></script>
<script src="assets/js/good.js"></script>

</body>
</html>