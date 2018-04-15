<?php

namespace App\Messages;

use App\Messages\Message;
use DateTime;

class TwitterMessage extends Message
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $text;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $likes;

    /**
     * @var string
     */
    private $type;

    /**
     * TwitterMessage constructor
     *
     * @param stdClass $message Message object
     */
    public function __construct($message)
    {
        $this->username = '@' . $message->user->screen_name;
        $this->text = $message->text;
        $this->date = new DateTime($message->created_at);
        $this->likes = $message->favorite_count;
    }

    /**
     * Get message username
     *
     * @return string Username
     */
    public function username()
    {
        return $this->username;
    }

    /**
     * Get message text body
     *
     * @return string Message text
     */
    public function text()
    {
        return $this->text;
    }

    /**
     * Get message date
     *
     * @return DateTime Message date value
     */
    public function date()
    {
        return $this->date;
    }

    /**
     * Get count of likes
     *
     * @return integer Count of likes
     */
    public function likes()
    {
        return $this->likes;
    }

    /**
     * Get type of message
     *
     * @return string Type of message
     */
    public function type()
    {
        return 'twitter';
    }
}
