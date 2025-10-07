<?php

namespace App\Logger;

use SplSubject;

class LogToEmail implements \SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(\SplSubject $subject): void
    {
        $event = $subject->getEvent();
        if (in_array($event->level, ['warning', 'error'])) {
            // Отправка email
            echo "Email: {$event->message}\n";
        }
    }
}