<?php
$token = "8574633233:AAEUyUJ-34LMVkoONJOIh14go9Au68TaqQM";
$chat_id = "8574633233";

$name = $_POST['name'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$text = "📩 Новое сообщение:\n\n👤 Имя: $name\n📞 Контакт: $contact\n💬 Сообщение: $message";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($text));

header("Location: index.html");
?>
