<?php

namespace common\models;

class Telegram
{

//    my chat id = 500366482
    public $text;
    private $_token = '1070775492:AAHTd2lxC9RInJtWH3Fj2h8vLYMRRO2wk_Y';
//    private $_chatId = '500366482';
    private $_chatId = '@miracle_notifications';
    private $_params = [];

    public function __construct($text = null)
    {
        $this->_params = [
            'chat_id' => $this->_chatId,
            'parse_mode' => 'HTML',
            'text' => $text ?: 'Bugun ' . date('d.m.Y') . 'yil ' . date('H:i:s') . 'da miracle.uz sayti faol ishlamoqda!',
        ];
    }


    public function sendMessage()
    {
        return file_get_contents('https://api.telegram.org/bot' . $this->_token . '/sendMessage?' . http_build_query($this->_params));

    }


}