<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);

$name = urldecode($name);
$tel = urldecode($tel);
$email = urldecode($email);

$name = trim($name);
$tel = trim($tel);
$email = trim($email);

// echo $name;
// echo "<br>";
// echo $tel;
// echo "<br>";
// echo $email;

if (mail("Apartments-Santori@yandex.ru", "Заявка с сайта", "ФИО:".$name.". Tel:".$tel.". E-mail: ".$email ,"From: Apartments-Santori@yandex.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>