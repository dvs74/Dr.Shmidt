<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = trim($_POST["name"]);
    $phone   = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    // Куда отправлять
    $to = "ТВОЙ_EMAIL_СЮДА";

    // Тема письма
    $subject = "Заявка с сайта";

    // Текст письма
    $body = "Имя: $name\nТелефон: $phone\nСообщение:\n$message";

    // Заголовки
    $headers = "From: no-reply@" . $_SERVER['SERVER_NAME'] . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Отправка
    mail($to, $subject, $body, $headers);

    // Редирект после отправки
    header("Location: thankyou.html");
    exit;
}
?>
