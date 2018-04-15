<?php

namespace App\Systems;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Systems\System;
use App\Messages\TwitterMessage;
use App\Helpers;

class TwitterSystem extends System
{

    /**
     * Fetching twitter message
     *
     * @param  integer $count Count limit
     * @return array Fetched messages
     */
    public function fetching($count = 25)
    {
        $config = Helpers::getConfig();

        $twitterApi = new TwitterOAuth(
            $config['TWITTER']['CONSUMER_KEY'],
            $config['TWITTER']['CONSUMER_SECRET'],
            $config['TWITTER']['ACCESS_TOKEN'],
            $config['TWITTER']['ACCESS_SECRET']
        );

        $response = $twitterApi->get('/statuses/user_timeline', [
            'count'       => $count,
            'screen_name' => $config['TWITTER']['SOURCE'],
        ]);

        return array_map(function ($message) {
            $twitterMessage = new TwitterMessage($message);
            return $twitterMessage->getMessage();
        }, $response);
    }
}
