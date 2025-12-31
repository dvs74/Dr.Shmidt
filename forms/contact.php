<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? 'Без имени';
    $phone = $_POST['phone'] ?? ''; // Обязательный номер
    $message = $_POST['message'] ?? '';

    // Проверка обязательного поля
    if (empty($phone)) {
        echo "Телефон обязателен!";
        exit;
    }

    // Твой Telegram-бот токен и chat_id (твой ID)
    $token = "123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11"; // Замени на свой токен
    $chat_id = "123456789"; // Твой Telegram ID (узнай ниже)

    // Текст сообщения
    $text = "Новая заявка!\nИмя: $name\nТелефон: $phone\nСообщение: $message";

    // Отправка в Telegram
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text);
    file_get_contents($url);

    echo "Заявка отправлена! Мы свяжемся в ближайшее время.";
} else {
    echo "Ошибка отправки.";
}
?>
<?php
// Тестовый блок — запусти просто открыв contact.php в браузере
$token = "8081022302:AAHTp-t81XS02EgARATMRQmpS2msGdi-qg4"; // ТВОЙ ТОКЕН
$chat_id = "5962269674"; // ТВОЙ ID (узнай через @userinfobot)

$text = "Тестовое сообщение из локалки!\nВремя: " . date('Y-m-d H:i:s');

$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text);

$response = file_get_contents($url);

echo "<pre>";
echo "Ответ от Telegram:\n";
print_r($response);
echo "</pre>";
?>