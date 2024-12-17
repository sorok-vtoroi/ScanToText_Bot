<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ваш_адрес_почты@example.com"; // Укажите ваш email
    $subject = "Рекламное предложение от $name";
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Ваше сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке сообщения. Попробуйте позже.";
    }
} else {
    echo "Неверный метод отправки данных.";
}
?>
