<?php

namespace Abdulklarapl\Components\Console;

use Abdulklarapl\Components\Bag\Bag;
use Abdulklarapl\Components\Console\Application\ConsoleApplicationInterface;

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
     * @param ConsoleApplicationInterface $application
     */
    public function registerApplication(ConsoleApplicationInterface $application)
    {
        $this->applications->set($application->getNamespace(), $application);
    }
}