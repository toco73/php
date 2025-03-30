<?php
require_once('config/status_codes.php');

$random_numbers=array_rand($status_codes,4);
     //連想配列から４つランダムに取り出す
foreach($random_numbers as $index){
    $options[]=$status_codes[$index];
}   //新しい配列にランダムに取得された配列のキーの要素を代入して選択肢用の配列を作成
$question=$options[mt_rand(0,3)];
    //新しい配列に正解となる１つを代入
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下のないように当てはまるステータスコードを選んでください</p>
                <p class="question__text"><?php echo $question['description']?></p>
            </div>
        </div>
        <form class="quiz-form" action="result.php" method="post">
            <input type="hidden" name="answer_code" value="<?php echo $question['code']?>">
            <div class="quiz-form__item">
                <?php foreach ($options as $option): ?>
                <div class="quiz-form__group">
                    <input class="quiz-form__radio" id="<?php echo $option['code']?>" type="radio" name="option" value="<?php echo $option['code']?>">
                    <label class="quiz-form__label" for="<?php echo $option['code']?>"><?php echo $option['code']?></label>
                    <!-- inputのid属性とlabelのfor属性に同じものを指定する -->
                </div>
                <?php endforeach; ?>
            </div>
            <div class="quiz-form__button">
                <button class="quiz-form__button-submit" type="submit">
                    回答
                </button>
            </div>
        </form>
    </main>
</body>
</html>