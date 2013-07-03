<?php

namespace Abdulklarapl\Components\Console\Application;

class ConsoleApplication implements ConsoleApplicationInterface
{

    public function terminate()
    {
        die;
    }

    /**
     * get namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return '';
    }

    /**
     * return defaults subscribed events (trigger ::namespace::.fire calls 'run' method)
     *
     * @return array|void
     */
    public function getSubscribedEvents()
    {
        return array(
            $this->getNamespace().".fire" => 'run'
        );
    }

    /**
     * get available options
     *
     * @return Bag|array
     */
    public function getOptions()
    {
        return array();
    }

    /**
     * @return Bag|array
     */
    public function getParameters()
    {
        return array();
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return '';
    }
}