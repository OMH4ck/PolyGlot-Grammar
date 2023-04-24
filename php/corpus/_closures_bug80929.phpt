<?php
class DefaultListener
{
    public function handleDefaultEvent($event) { }
}

class SubscriberProxy
{
    private array $subscribedEvents;
    private object $subscriber;
    private Closure $listener;

    public function __construct(array $subscribedEvents, object $subscriber)
    {
        $this->subscribedEvents = $subscribedEvents;
        $this->subscriber = $subscriber;
        foreach ($this->subscribedEvents as $eventName => $params) {
            $this->listener = Closure::fromCallable([$this, $params]);
        }
    }

    public function __call(string $name, array $arguments)
    {
        return $this->subscriber->$name(...$arguments);
    }

    public function dispatch($event, string $eventName)
    {
        ($this->listener)($event, $eventName, null);
    }
}

$proxy = new SubscriberProxy(
    ['defaultEvent' => 'handleDefaultEvent'],
    new DefaultListener()
);

for ($i = 0; $i < 10; $i++) {
    echo $i . PHP_EOL;
    $proxy->dispatch(null, 'defaultEvent');
}
