
Back (accesskey b)    Save (accesskey s)    	File: /htdocs/psouzabot.php
 	Status: Saved on 2017-09-12 16:03:29 using mode FTP_ASCII

<?php
//Exibir erros
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');
date_default_timezone_set("America/Recife");

//Variaveis Telegram
$bot_id = '446328009:AAEbI_Sl-0wy0iDtPVZL5w3Z908DjzlH1lQ';
define('API_URL', 'https://api.telegram.org/bot'.$bot_id.'/');

//Adiciona funcao
include("Telegram.php");

//Instancia a classe
$telegram = new Telegram($bot_id);

file_get_contents("https://api.telegram.org/bot446328009:AAEbI_Sl-0wy0iDtPVZL5w3Z908DjzlH1lQ/sendMessage?chat_id=133619209&text=teste123");

//Pega o chat_id
//$chat_id = $telegram->ChatID();
$chat_id='133619209';//pablo

//Variaveis Text
$text = $telegram->Text();
//envia mensag

    $content = ['chat_id' => $chat_id, 'text' => 'texto'];
    $telegram->sendMessage($content);

$date = date('Y-m-d H:i');
echo $date;

$token = "446328009:AAEbI_Sl-0wy0iDtPVZL5w3Z908DjzlH1lQ";

$data = [
    'text' => 'your message here',
    'chat_id' => '133619209'
];

file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?" . http_build_query($data) );

?>
