<?php

namespace App\Logger;

class Logger implements \SplSubject
{
    private \SplObjectStorage $observers;
    private ?LogEvent $event = null;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function log(string $level, string $message, array $context = []): void
    {
        $this->event = new LogEvent($level, $message, $context);
        $this->notify();
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getEvent(): ?LogEvent
    {
        return $this->event;
    }
}