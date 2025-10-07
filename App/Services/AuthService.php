<?php

namespace App\Services;

use App\Logger\Logger;
use SplObserver;

class AuthService
{

    public function __construct(private Logger $logger) {}

    public function login(string $user, string $password): bool
    {
        if (empty($user)) {
            $this->logger->log('warning', 'Empty username', ['user' => $user]);
            return false;
        }

        // Логика логина
        $this->logger->log('info', 'User logged in', ['user' => $user]);
        return true;
    }
}