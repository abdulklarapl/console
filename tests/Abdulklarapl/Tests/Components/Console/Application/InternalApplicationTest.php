<?php

namespace Abdulklarapl\Tests\Components\Console\Application;

class InternalApplicationTest extends \PHPUnit_Framework_TestCase
{

    public function testInternalApplication()
    {
        $internalApplication = new \Abdulklarapl\Components\Console\Application\InternalApplication();

        $this->assertEquals($internalApplication::__NAMESPACE, $internalApplication->getNamespace());
        $this->assertEquals(
            array(
                $internalApplication::EVENT_HELP => 'help',
                $internalApplication::EVENT_ABOUT => 'about'
            ),
            $internalApplication->getSubscribedEvents()
        );
        $this->assertEquals(
            array(
                $internalApplication::EVENT_HELP => 'Show\'s that info',
                $internalApplication::EVENT_ABOUT => 'About component'
            ),
            $internalApplication->getDescription());
    }
}