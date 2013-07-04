<?php

namespace Abdulklarapl\Components\Console\Input;

use Abdulklarapl\Components\Bag\Bag;
use Abdulklarapl\Components\Console\Input\Prompt\PromptInterface;

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
     * @var Bag
     */
    private $parameters;

    /**
     * @var Bag
     */
    private $options;

    /**
     * @param PromptInterface $prompt
     */
    public function __construct(PromptInterface $prompt)
    {
        $this->prompt = $prompt;

        if (empty($argv)) {
            $argv = $_SERVER['argv'];
        }

        array_shift($argv);
        $this->parameters = new Bag();
        $this->options = new Bag();
        $this->prepareArguments($argv);
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
        return $this->parameters;
    }

    /**
     * @return Bag
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string $name
     * @return string
     */
    public function getParameter($name)
    {
        return $this->parameters->get($name);
    }

    /**
     * @param string $name
     * @return string
     */
    public function getOption($name)
    {
        return $this->options->get($name);
    }

    /**
     * Prepare arguments, rewrite parameters and options to properties
     *
     * @param array $argv
     */
    private function prepareArguments(array $argv)
    {
        $optionsCount=0;
        foreach($argv as $arg) {
            if(preg_match_all("/^--([a-zA-Z0-9.]+)=([^.*]+)$/", $arg, $matches)) {
                $this->parameters->set($matches[1][0], $matches[2][0]);
            }

            if(preg_match_all("/^(-|)([a-zA-Z0-9.]+)/", $arg, $matches)) {
                $this->options->set($optionsCount, $matches[2][0]);
                $optionsCount++;
            }
        }
    }
}
