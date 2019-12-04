<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$fio = urldecode($fio);
$email = urldecode($email);
$phone = urldecode($phone);
$fio = trim($fio);
$email = trim($email);
$phone = trim($phone);
//echo $fio;
//echo "<br>";
//echo $email;
//echo "<br>;
//echo $phone;
if (mail("info@moctex.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email.".phone: ".$phone ,"From: send@moctex.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>