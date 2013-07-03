<?php

namespace Abdulklarapl\Components\Console\Input\Prompt;

/**
 * PromptInterface
 *
 * @package Prompt
 * @subpackage Interface
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
interface PromptInterface
{

    /**
     * Read answer
     *
     * @param string $msg
     * @return string
     */
    public function read($msg = null);

    /**
     * Read answer in new line
     *
     * @param string $msg
     * @return string
     */
    public function readln($msg = null);

    /**
     * Confirm (y,n)
     *
     * @param string $msg
     * @return string
     */
    public function confirm($msg = null);
}
