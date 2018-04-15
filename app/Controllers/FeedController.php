<?php

namespace App\Controllers;

use App\Helpers;
use App\Systems\TwitterSystem;

class FeedController
{

    /**
     * List of the connected systems
     *
     * @var array
     */
    protected $feedSystems = [
        TwitterSystem::class
    ];

    /**
     * Get fetched messages
     *
     * @return array list of the messages
     */
    public function fetchMessages()
    {
        $messages = [];
        foreach ($this->feedSystems as $systemClassName) {
            $system = new $systemClassName();
            $messages[] = $system->fetching();
        }

        if (!count($messages)) {
            return [];
        }

        $messages = call_user_func_array('array_merge', $messages);

        $newsLimit = 25;
        $messages = Helpers::filterLastMessages($messages, $newsLimit);

        return $messages;
    }
}
