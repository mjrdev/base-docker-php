<?php

use App\Core\Domain\Message;

class SendMessage
{
    public function __contruct()
    {
        
    }

    public static function execute($payload): Message
    {
        $message = new Message();
        $message->setPayload($payload);
        return $message;
    }
}
?>