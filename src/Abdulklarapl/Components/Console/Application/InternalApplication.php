<?php

namespace Abdulklarapl\Components\Console\Application;

use Abdulklarapl\Components\Console\Event\ConsoleEvent;

class InternalApplication extends ConsoleApplication implements ConsoleApplicationInterface
{

    /**
     * @const
     */
    const __NAMESPACE = 'abdulklarapl';

    /**
     * @const
     */
    const EVENT_HELP = 'abdulklarapl.help';

    /**
     * @const
     */
    const EVENT_ABOUT = 'abdulklarapl.demo';

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
     * @return array|string
     */
    public function getDescription()
    {
        return array(
            self::EVENT_HELP => 'Show\'s that info',
            self::EVENT_ABOUT => 'About component'
        );
    }

    /**
     * @param ConsoleEvent $event
     */
    public function help(ConsoleEvent $event)
    {
        $output = $event->getOutput();
        $output->writeln("Abdulklara Console Component");
        $output->writeln("For documentation, see https://github.com/abdulklarapl/console");
        $output->writeln();

        $applications = $event->getApplications()->all();
        foreach ($applications as $eventName => $application) {
            $subscribedEvents = $application->getSubscribedEvents();
            $description = $application->getDescription();
            if (is_array($description)) {
                $description = $description[$eventName];
            }

            $output->write(sprintf("\t%s : \t %s\r\n", $eventName, $description));
        }
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