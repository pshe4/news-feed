<?php

namespace App;

class Helpers
{
    /**
     * Get main config file data
     *
     * @return array Config data
     */
    public static function getConfig()
    {
        $configPath = $_SERVER['DOCUMENT_ROOT'] . '/../app/config.php';
        return require($configPath);
    }

    /**
     * Filter last messages by posted dates
     *
     * @param  array  $messages List of the messages
     * @param  integer $count    Count limit
     * @return array            Sliced array with messages
     */
    public static function filterLastMessages($messages, $count = 25)
    {
        $messages = array_reduce($messages, function ($result, $message) {
            $result[$message['date']] = $message;
            return $result;
        }, array());

        krsort($messages);

        return array_slice($messages, 0, $count);
    }
}
