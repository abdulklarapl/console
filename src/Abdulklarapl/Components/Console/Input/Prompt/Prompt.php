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
class Prompt implements PromptInterface
{

    /**
     * Read answer
     *
     * @param string $msg
     * @return string
     */
    public function read($msg = null)
    {
        return readline($msg);
    }

    /**
     * Read answer in new line
     *
     * @param string $msg
     * @return string
     */
    public function readln($msg = null)
    {
        return $this->readln(PHP_EOL.$msg);
    }

    /**
     * Confirm (y,n)
     *
     * @param string $msg
     * @return string
     */
    public function confirm($msg = null, $yes = 'y', $no = 'n', $default = 'Y')
    {
        $confirm = $this->read(sprintf("%s (%s/%s [%s]) ", $msg, $yes, $no, $default));
        if (strtolower($confirm) == $yes || ($yes == strtolower($default) && empty($confirm))) {
            return true;
        }
        return false;
    }
}
