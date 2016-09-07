<?php 
// если была нажата кнопка "Отправить" 
if($_POST['submit']) {
        $fn = substr(htmlspecialchars(trim($_POST['fn'])), 0, 1000);
        $tel =  substr(htmlspecialchars(trim($_POST['tel'])), 0, 1000000);
        $note =  substr(htmlspecialchars(trim($_POST['note'])), 0, 1000000);
        // $to - кому отправляем 
        $to = 'serlou@mail.ru';
        // функция, которая отправляет наше письмо
        mail($to, $fn, $tel, $note);
        echo 'Спасибо! Ваше письмо отправлено.'; 
} 
?>