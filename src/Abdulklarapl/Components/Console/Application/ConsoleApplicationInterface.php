<?php

namespace Abdulklarapl\Components\Console\Application;

/**
 * ConsoleApplicationInterface
 *
 * @package ConsoleApplication
 * @subpackage Interface
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
interface ConsoleApplicationInterface
{

    /**
     * @return string
     */
    public function getNamespace();

    /**
     * @return Bag
     */
    public function getOptions();

    /**
     * @return Bag
     */
    public function getParameters();

    /**
     * @return string|array
     */
    public function getDescription();

    /**
     * @return array
     */
    public function getSubscribedEvents();

}