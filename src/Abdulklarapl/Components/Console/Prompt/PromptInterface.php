<?php

namespace Abdulklarapl\Console\Prompt;

use Abdulklarapl\Components\Bag\Bag;

/**
 * PromptInterface
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
interface PromptInterface
{

    /**
     * @param string $msg
     * @return array
     */
    public function read($msg = null);
}
