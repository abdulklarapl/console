<?php

namespace Abdulklarapl\Components\Console;

use Abdulklarapl\Components\Bag\Bag;
use Abdulklarapl\Components\Console\Application\ConsoleApplicationInterface;
use Abdulklarapl\Components\Console\Application\InternalApplication;
use Abdulklarapl\Components\Console\Event\ConsoleEvent;
use Abdulklarapl\Components\Console\Input\Prompt\Prompt;
use Abdulklarapl\Components\Console\Input\Input;
use Abdulklarapl\Components\Console\Output\Output;
use Abdulklarapl\Components\Console\Output\Printer\Printer;
use Abdulklarapl\Components\EventDispatcher\Dispatcher\DispatcherInterface;
use Abdulklarapl\Components\EventDispatcher\Dispatcher\Dispatcher;

/**
 * Console
 *
 * @package Console
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
class Console
{

    /**
     * @var Bag
     */
    private $applications;

    /**
     * @var DispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @param DispatcherInterface $eventDispatcher
     */
    public function __construct(DispatcherInterface $eventDispatcher = null)
    {
        if (!$eventDispatcher) {
            $eventDispatcher = new Dispatcher();
        }

        $this->eventDispatcher = $eventDispatcher;
        $this->applications = new Bag();
    }

    /**
     * @param ConsoleApplicationInterface $application
     */
    public function registerApplication(ConsoleApplicationInterface $application)
    {
        foreach ($application->getSubscribedEvents() as $event => $method) {
            $this->applications->set($event, $application);
        }
    }

    /**
     * register internal application, register subscribers, fire the event
     */
    public function run()
    {
        $this->registerApplication(new InternalApplication());
        $this->registerSubscribers();

        $input = new Input(new Prompt());
        $calledApp = $input->getOptions()->get(0, InternalApplication::EVENT_HELP);

        $event = new ConsoleEvent($calledApp);
        $event->setInput($input);
        $event->setOutput(new Output(new Printer()));
        $event->setApplications($this->applications);

        $this->eventDispatcher->fire($calledApp, $event);
    }

    /**
     * for each application, register eventsubscriber (application)
     */
    private function registerSubscribers()
    {
        foreach ($this->applications->all() as $event => $application) {
            $this->eventDispatcher->addSubscriber($application);
        }
    }
}