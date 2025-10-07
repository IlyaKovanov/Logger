<?php

namespace App\Logger;

class LogEvent
{
    public function __construct(
        public string $level,    // 'warning', 'error', 'info'
        public string $message,
        public array $context = [] // доп. данные: user, ip, etc
    ) {}
}