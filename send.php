<?php
$to = "Alexandr300789@yandex.ru"; // емайл получателя данных из формы
$tema = "Заявка"; // тема полученного емайла
$message = "ФИО заказчика: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['tel']."<br>"; //полученное из формы name=phone
$headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
//mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
if (mail($to, $tema, $message, $headers))
 {     echo "Ваша завяка успешно отправлена. Мы с Вами обязательно свяжемся!";
} else {
    echo "При отправке завки возникли ошибки! Обратитесь по адресу электронной почты: Alexandr300789@yandex.ru";
}
?>