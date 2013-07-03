<?php

namespace Abdulklarapl\Components\Console;

use Abdulklarapl\Components\Bag\Bag;
use Abdulklarapl\Components\Console\Application\ConsoleApplicationInterface;
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
    }

    /**
     * @param ConsoleApplicationInterface $application
     */
    public function registerApplication(ConsoleApplicationInterface $application)
    {
        $this->applications->set($application->getNamespace(), $application);
    }
}