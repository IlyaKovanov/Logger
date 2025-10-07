<?php

namespace App\Logger;

class LogToFile implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        $event = $subject->getEvent();
        if ($event->level === 'warning') {
            echo 'log to file '.PHP_EOL;
//            file_put_contents('log.txt', "[{$event->level}] {$event->message}\n", FILE_APPEND);
        }
    }
}