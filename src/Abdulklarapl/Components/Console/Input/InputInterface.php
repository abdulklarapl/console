<?php

namespace Abdulklarapl\Components\Console\Input;

use Abdulklarapl\Components\Bag\Bag;

/**
 * InputInterface
 *
 * @package Input
 * @subpackage Interface
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
interface InputInterface
{

    /**
     * @param string $msg
     * @return mixed
     */
    public function confirm($msg = null);

    /**
     * Read in new line
     *
     * @param string $msg
     * @return string
     */
    public function readln($msg = null);

    /**
     * Read line
     *
     * @param string $msg
     * @return string
     */
    public function read($msg = null);

    /**
     * Get all parameters
     *
     * @return Bag
     */
    public function getParameters();

    /**
     * Get all options
     *
     * @return Bag
     */
    public function getOptions();
}
