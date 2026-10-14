<h1>Практическая 4</h1>
<h2>Задача №1</h2>
<form action="">
    <p>введите число:</p>
    <input name = number>
    <input type = "submit" value = "отправить">
</form>
<?php
if (isset($_GET['number'])){
    $a = $_GET['number'];
switch ($a){
     case 0:
        echo 'zero';
        break;
    case 1:
        echo 'one';
        break;
    case 2:
        echo 'two';
        break;
    case 3:
        echo 'three';
        break;
    case 4:
        echo 'four';
        break;
    case 5:
        echo 'five';
        break;
    case 6:
        echo 'six';
        break;
    case 7:
        echo 'seven';
        break;
    case 8:
        echo 'eight';
        break;
    case 9:
        echo 'nine';
        break;
}
}
?>
<h2>Задача №2</h2>
<form action="">
    <p>введите число:</p>
    <input name = New>
    <input type = "submit" value = "отправить">
</form>
<?php
if (isset($_GET['New'])){
    $a = $_GET['New'];
switch ($a){
    case 1:
        echo '1 января — Новый год. 7 января — Рождество Христово. 25 января — Татьянин день (День российского студенчества). 28 января — Международный день защиты персональных данных.';
        break;
    case 2:
        echo '23 февраля — День защитника Отечества. ';
        break;
    case 3:
        echo '8 марта — Международный женский день.';
        break;
    case 4:
        echo '12 апреля — День космонавтики.';
        break;
    case 5:
        echo '1 мая — Праздник Весны и Труда. 9 мая — День Победы.';
        break;
    case 6:
        echo '12 июня — День России. ';
        break;
    case 7:
        echo '22 июля — День Государственного флага Российской Федерации.';
        break;
    case 8:
        echo '2 августа — День ВДВ. Последнее воскресенье августа — День Шахтёра (дата плавающая, в 2026 году — 30 августа).';
        break;
    case 9:
        echo '1 сентября — День знаний. 3 сентября — День солидарности в борьбе с терроризмом';
        break;
    case 10:
        echo '1 октября — День пожилого человека. 5 октября — День учителя.';
        break;
    case 11:
        echo '4 ноября — День народного единства. Последнее воскресенье ноября — День матери (дата плавающая, в 2026 году — 22 ноября).';
        break;
    case 12:
        echo'3 декабря — День юриста, День Неизвестного Солдата 12 декабря — День Конституции Российской Федерации.';
        break;
}
}
?>
<h2>Задача №3</h2>
<form action="">
    <p>введите число:</p>
    <input name = york>
    <input type = "submit" value = "отправить">
</form>
<?php
if (isset($_GET['york'])){
    $a = $_GET['york'];
switch ($a){
    case 1:
        echo '1';
        break;
    case 2:
        echo '4 ';
        break;
    case 3:
        echo '9';
        break;
    case 4:
        echo '6';
        break;
    case 5:
        echo '5';
        break;
    case 6:
        echo '6';
        break;
    case 7:
        echo '9';
        break;
    case 8:
        echo '4';
        break;
    case 9:
        echo '1';
        break;
}
}
?>
<h2>Задача №4</h2>
<form action="">
    <p>введите число:</p>
    <input name = Zeno>
    <input type = "submit" value = "отправить">
</form>
<?php
if (isset($_GET['Zeno'])){
    $a = $_GET['Zeno'];
switch ($a){
    case 1:
        echo '1';
        break;
    case 2:
        echo '4 ';
        break;
}
}