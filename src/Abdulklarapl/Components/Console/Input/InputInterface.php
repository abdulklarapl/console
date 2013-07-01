<?php

namespace Abdulklarapl\Console\Input;

use Abdulklarapl\Components\Bag\Bag;

/**
 * InputInterface
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
interface InputInterface
{

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
