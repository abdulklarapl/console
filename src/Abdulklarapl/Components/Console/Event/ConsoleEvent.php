<?php

namespace Abdulklarapl\Components\Console\Event;

use Abdulklarapl\Components\EventDispatcher\Event\EventInterface;
use Abdulklarapl\Components\EventDispatcher\Event\Event;
use Abdulklarapl\Components\Console\Input\InputInterface;
use Abdulklarapl\Components\Console\Output\OutputInterface;

class ConsoleEvent extends Event implements EventInterface
{

    /**
     * @var InputInterface
     */
    private $input;

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @param InputInterface $input
     */
    public function setInput($input)
    {
        $this->input = $input;
    }

    /**
     * @return InputInterface
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @param OutputInterface $output
     */
    public function setOutput($output)
    {
        $this->output = $output;
    }

    /**
     * @return OutputInterface
     */
    public function getOutput()
    {
        return $this->output;
    }
}