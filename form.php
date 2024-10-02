<?

/*получаем значения полей из формы*/
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


/*функция для создания запроса на сервер Telegram */
function parser($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    if ($result == false) {     
      echo "Ошибка отправки запроса: " . curl_error($curl);
      return false;
    }
    else {
      return true;
    }
}

function orderSendTelegram($message) {

    /*токен который выдаётся при регистрации бота */
    $token = "7633312262:AAEkc4NguLm3cUy3sbaVs8iFl13eCDeUccs";
    /*идентификатор группы*/
    $chat_id = "-4519183749";

    /*делаем запрос*/
    parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}");

}
