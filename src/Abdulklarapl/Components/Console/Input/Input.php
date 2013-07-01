<?php

namespace Abdulklarapl\Console\Input;

use Abdulklarapl\Components\Bag\Bag;
use Abdulklarapl\Console\Prompt\PromptInterface;

/**
 * Input
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
     */
    public function read($msg = null)
    {
        return new Bag($this->prompt->read($msg));
    }

    public function getParameters()
    {
        return new Bag();
    }

    public function getOptions()
    {
        return new Bag();
    }
}
