<?php

/* Получаем значения полей из формы */
$name = $_POST['name'];
$weight = $_POST['weight'];
$old = $_POST['old'];
$weight_loss = $_POST['weight-loss'];
$weight_gain = $_POST['weight-gain'];
$advice = $_POST['advice'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
$sweetener = $_POST['sweetener'];
$water = $_POST['water'];
$milk = $_POST['milk'];
$vitamins = $_POST['vitamins'];

/* Формируем сообщение */
$message = "Имя: $name\nВес: $weight\nВозраст: $old\nПотеря веса: $weight_loss\nПрибавка веса: $weight_gain\nСовет: $advice\nEmail: $email\nТелефон: $phone\nКомментарий: $comment\nСахарозаменитель: $sweetener\nВода: $water\nМолоко: $milk\nВитамины: $vitamins";

/* Функция для создания запроса на сервер Telegram */
function parser($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    if ($result === false) {
        echo "Ошибка отправки запроса: " . curl_error($curl);
        return false;
    }
    return true;
}

function orderSendTelegram($message) {
    /* Токен, который выдаётся при регистрации бота */
    $token = "7633312262:AAEkc4NguLm3cUy3sbaVs8iFl13eCDeUccs";
    /* Идентификатор группы */
    $chat_id = "-4519183749";

    /* Делаем запрос */
    parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text=" . urlencode($message));
}

/* Отправляем сообщение в Telegram */
orderSendTelegram($message);

/* Всплывающее окно с сообщением об успешной отправке */
echo "<script>
        alert('Ваша заявка успешно отправлена!');
        window.location.href = 'index.html';
      </script>";
