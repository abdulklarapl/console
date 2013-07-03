<?php

namespace Abdulklarapl\Components\Console\Application;

use Abdulklarapl\Components\Console\Input\InputInterface;
use Abdulklarapl\Components\Console\Output\OutputInterface;

class InternalApplication extends ConsoleApplication implements ConsoleApplicationInterface
{

    /**
     * @return string
     */
    public function getNamespace()
    {
        return 'abdulklarapl.demo';
    }

    /**
     * @return array|void
     */
    public function getSubscribedEvents()
    {
        return array(
            $this->getNamespace().".help" => array($this, 'help'),
            $this->getNamespace().".about" => array($this, 'about')
        );
    }

    /**
     * @param \Abdulklarapl\Components\Console\Input\InputInterface $input
     * @param \Abdulklarapl\Components\Console\Output\OutputInterface $output
     */
    public function help(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('help instructions');
    }

    /**
     * @param \Abdulklarapl\Components\Console\Input\InputInterface $intput
     * @param \Abdulklarapl\Components\Console\Output\OutputInterface $output
     */
    public function about(InputInterface $intput, OutputInterface $output)
    {
        $output->writeln("Patryk Szlagowski");
    }
}