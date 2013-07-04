<?php

namespace Abdulklarapl\Components\Console\Application;

use Abdulklarapl\Components\Console\Event\ConsoleEvent;

class InternalApplication extends ConsoleApplication implements ConsoleApplicationInterface
{

    /**
     * @const
     */
    const __NAMESPACE = 'abdulklarapl.demo';

    /**
     * @const
     */
    const EVENT_HELP = 'abdulklarapl.demo.help';

    /**
     * @const
     */
    const EVENT_ABOUT = 'abdulklarapl.demo.about';

    /**
     * @return string
     */
    public function getNamespace()
    {
        return self::__NAMESPACE;
    }

    /**
     * @return array|void
     */
    public function getSubscribedEvents()
    {
        return array(
            self::EVENT_HELP => 'help',
            self::EVENT_ABOUT => 'about'
        );
    }

    /**
     * @param ConsoleEvent $event
     */
    public function help(ConsoleEvent $event)
    {
        //
    }

    /**
     * @param ConsoleEvent $event
     */
    public function about(ConsoleEvent $event)
    {
        $output = $event->getOutput();
        $input = $event->getInput();

        $name = $input->read("Your name: ");
        $output->writeln("Nice to meet you ".$name."!");

        $confirm = $input->confirm("Do you like abdulklara console?");

        if ($confirm === true) {
            $output->success("YAY!");
            $this->terminate();
        }

        $output->error("404");
        $this->terminate();
    }
}