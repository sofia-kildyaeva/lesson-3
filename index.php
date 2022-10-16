<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Занятие 3</title>
</head>
<body>
    <div class="container">
        <h2>Самостоятельные задачи</h2>
        <div class="task">
            <h3>Артикул</h3>
            <?php
                $arcticle = 123;
                printf('%06d', $arcticle);
            ?>
        </div>
        <div class="task">
            <h3>Часы</h3>
            <?php
                $countSek = 20490;
                $h = $countSek / 3600;
                $countSek = $countSek % 3600;
                $m = $countSek / 60;
                $countSek = $countSek % 60;
                printf('%02d:%02d:%02d', $h, $m, $countSek);
            ?>
        </div>
        <div class="task">
            <h3>ФИО</h3>
            <?php
                $F = 'Кильдяева';
                $I = 'Софья';
                $O = 'Николаевна';
                $ISoc = mb_substr($I, 0, 1);
                $OSoc = mb_substr($O, 0, 1);
                echo "$F $ISoc.$OSoc.";
            ?>
        </div>
        <div class="task">
            <h3>Короткий пароль</h3>
            <?php
                $password = 'qwer';
                if (strlen($password) < 8) {
                    echo ("Слишком короткий пароль");
                } else {
                    echo $password;
                }
            ?>
        </div>
        <div class="task">
            <h3>Пробел</h3>
            <?php
                $password = 'qwer ghhg';
                if (mb_substr_count($password, ' ') == 0) {
                    echo $password;
                } else {
                    echo 'В пароле не должно содержаться пробелов!';
                }
            ?>
        </div>
        <div class="task">
            <h3>Ровно</h3>
            <?php
                $line1 = 'qwer';
                $line2 = 'zxcvb';
                if (mb_strlen($line1) == mb_strlen($line2)) {
                    echo 'Количество букв совпадает';
                } else {
                    echo 'Количество букв НЕ совпадает';
                }
            ?>
        </div>
        <div class="task">
            <h3>Подробнее</h3>
            <?php
                $text = 'qwertyuiopagfghgfhgfdhrtghdrthytyhftyjyujyfjgyukiuikilio;iop;opcdsefesrhbtgyhtyghythjgyujuyjkuyikuidr';
                if (mb_strlen($text) > 100) {
                    echo mb_substr($text, 0, 50);
                    echo "<a href=#> Подробнее</a>";
                }
                else {
                    echo $text;
                }
            ?>
        </div>
        <div class="task">
            <h3>Короче</h3>
            <?php
                $text = 'Обороноспособность';
                if (mb_strlen($text) > 7) {
                    $textNew = mb_substr($text, 0, 4);
                    $textNews = mb_substr($text, -2);
                    echo "$textNew-$textNews";
                }
                else {
                    echo $text;
                }
            ?>
        </div>
        <div class="task">
            <h3>Коровы</h3>
            <?php
                $text = 'Обороноспособность';
                $enter_symbol = 'о';
                $count_symbol = mb_substr_count($text, $enter_symbol);
                echo "Символ $enter_symbol в слове '$text' встречается $count_symbol раз";
            ?>
        </div>
        <div class="task">
            <h3>Caps Lock</h3>
            <?php
                $password = 'qwerty123';
                $enter_password = 'QWERTY123';
                if ($password == $enter_password) {
                    echo 'Добро пожаловать!';
                } elseif (mb_convert_case($password, 0) == $enter_password) {
                    echo 'Возможно нажата клавиша Caps Lock...';
                } else {
                    echo 'Ошибка! Пароль неверный';
                }
            ?>
        </div>
        <div class="task">
            <h3>Регистронезависимые коровы</h3>
            <?php
                $text = 'EEEEEhhgghe';
                $enter_symbol = 'H';

                $enter_symbol_upper = mb_convert_case($enter_symbol, 0);
                $count_symbol = mb_substr_count($text, $enter_symbol_upper);

                $enter_symbol_lower = mb_convert_case($enter_symbol, 1);
                $count_symbol += mb_substr_count($text, $enter_symbol_lower);

                echo "Символ '$enter_symbol' встречается в строке '$text' $count_symbol раз";
            ?>
        </div>
        <div class="task">
            <h3>Курсив</h3>
            <?php
                $text = 'Серия «Куриный бульон для души» славится своими историями о маленьких радостях и чудесах, на которые способны люди. радостях радостях';
                $enter_word = 'радостях';

                $enter_word_upper = mb_convert_case($enter_word, 0);
                $enter_word_lower = mb_convert_case($enter_word, 1);

                $replace_word = str_replace($enter_word_upper, "<i>$enter_word</i>", $text);
                $replace_word = str_replace($enter_word_lower, "<i>$enter_word</i>", $text);

                echo "<b>Текст до: </b>'$text'<b> и после: </b>'$replace_word'";
            ?>
        </div>
        <div class="task">
            <h3>Тег</h3>
            <?php
                $text = "<p>Lorem ipsum dolor.</p>";
                $start = mb_strpos($text, ">") + 1;
                $end = mb_strpos($text, "<", $start);
                echo mb_substr($text, $start, $end - $start);
            ?>
        </div>
        <div class="task">
            <h3>MVC</h3>
            <?php
                $page_name = 'TEXT';
                if (!empty($page_name)) {
                    $page_name_lower = mb_convert_case($page_name, 1);
                    echo $page_name_lower, "_model.php и ";
                    echo $page_name_lower, "_view.php";
                } else {
                    echo 'main_model.php и ';
                    echo 'main_view.php';
                }
            ?>
        </div>
    </div>
</body>
</html>