<?php

namespace App\Systems;

class System
{
    /**
     * Start fetching from the system
     *
     * @param  integer $count Count limit
     * @return array List of the fetched messages
     */
    public function fetching($count = 25)
    {
        return [];
    }
}
