<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Адрес, на который нужно отправить письмо
    $to = "s.ryabinin123@gmail.com";

    // Тема письма
    $subject = "Новая заявка с сайта";

    // Текст письма
    $message = "Имя: " . $name . "\n"
        . "Email: " . $email . "\n"
        . "Номер телефона: " . $phone;

    // Отправка письма
    if (mail($to, $subject, $message)) {
        echo "Письмо успешно отправлено.";
    } else {
        echo "Ошибка при отправке письма.";
    }
}
?>
