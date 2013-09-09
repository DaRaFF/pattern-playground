<?php

class Subject implements SplSubject
{
    protected $observers = array();

    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        $key = array_search($observer, $this->observers);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

class MyObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo "I was updated by " . get_class($subject);
    }
}

$subject = new Subject;
$subject->attach(new MyObserver);
$subject->notify(); // prints "I was updated by Subject"