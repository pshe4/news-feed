<?php

namespace App\Messages;
use DateTime;

class Message
{

    /**
     * Get message username
     *
     * @return string Username
     */
    public function username()
    {
        return '';
    }

    /**
     * Get message text body
     *
     * @return string Message text
     */
    public function text()
    {
        return '-';
    }

    /**
     * Get message date
     *
     * @return DateTime Message date value
     */
    public function date()
    {
        return new DateTime();
    }

    /**
     * Get count of likes
     *
     * @return integer Count of likes
     */
    public function likes()
    {
        return 0;
    }

    /**
     * Get type of message
     *
     * @return string Type of message
     */
    public function type()
    {
        return '-';
    }

    /**
     * Get message data
     *
     * @return array Message data
     */
    public function getMessage()
    {
        return [
            'username'  => $this->username(),
            'text'      => $this->text(),
            'likes'     => $this->likes(),
            'date'      => $this->date()->format('Y-m-d H:i:s'),
            'type'      => $this->type(),
        ];
    }
}
