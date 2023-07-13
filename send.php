<?php 
require_once 'vendor/autoload.php';
use TelegramBot\Api\BotApi;

class Alert1{
  const TELEGRAM_BOT_TOKEN = '5076675149:AAHlRzJuVFrAJf_bTNq8oSx9dWD9Q65eGiM';
  const TELEGRAM_CHAT_ID = '1663512081'; 
 
  private $sentChats;
  
  public static function sendMessage($m) {
    $telegram = new TelegramBot\Api\BotApi(self::TELEGRAM_BOT_TOKEN);
    return $telegram->sendMessage(self::TELEGRAM_CHAT_ID, [
        'text' => $m
    ]);
    }

    public function getUsers() {
        $telegram = new TelegramBot\Api\BotApi(self::TELEGRAM_BOT_TOKEN);
        
        $response = $telegram->getUpdates();
        $user_ids = array();

        foreach ($response as $update) {
            $user_id = $update->getMessage()->getChat()->getId();
            if (!in_array($user_id, $user_ids)) {
                $user_ids[] = $user_id;
            }
        }

        return $user_ids;
    }
        

    public function __construct() {
        $this->sentChats = array();
    }

    public function allSend($n) {
        $telegram = new TelegramBot\Api\BotApi(self::TELEGRAM_BOT_TOKEN);
        $response = $telegram->getUpdates();
        foreach ($response as $update) {
            $chatId = $update->getMessage()->getChat()->getId();
            if (!in_array($chatId, $this->sentChats)) {
                
                $telegram->sendMessage(
                    $chatId,[
                    'text' => $n
                ]);
                $this->sentChats[] = $chatId;
            }
        }
}
}


//Mensage p2p
//Alert1::sendMessage('kaizen aqui,ve se foi');

//get the user list
$alert = new Alert1();
$user_ids = $alert->getUsers();
print_r($user_ids);

//mensage for all
//$alert->allSend('teste 4');