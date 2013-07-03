<?php

namespace Abdulklarapl\Components\Console\Input;

use Abdulklarapl\Components\Bag\Bag;
use Abdulklarapl\Components\Console\Prompt\PromptInterface;

/**
 * Input
 *
 * @package Input
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
class Input implements InputInterface
{

    /**
     * @var PromptInterface
     */
    private $prompt;

    /**
     * @param PromptInterface $prompt
     */
    public function __construct(PromptInterface $prompt)
    {
        $this->prompt = $prompt;
    }

    /**
     * @param string $msg
     * @return string
     */
    public function confirm($msg = null)
    {
        return $this->prompt->confirm($msg);
    }

    /**
     * @param string $msg
     * @return string
     */
    public function readln($msg = null)
    {
        return $this->prompt->readln($msg);
    }

    /**
     * @param string $msg
     * @return string
     */
    public function read($msg = null)
    {
        return $this->prompt->read($msg);
    }

    /**
     * @return Bag
     */
    public function getParameters()
    {
        return new Bag();
    }

    /**
     * @return Bag
     */
    public function getOptions()
    {
        return new Bag();
    }
}
