<?php

namespace Abdulklarapl\Tests\Components\Console\Output\Printer;

use Abdulklarapl\Components\Console\Output\Printer\Printer;

class PrinterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var string
     */
    private static $expectedOutput;

    public function setUp()
    {
        self::$expectedOutput =
            "test".PHP_EOL
            ."test2".PHP_EOL.PHP_EOL
            .PHP_EOL."Info".PHP_EOL."test".PHP_EOL.PHP_EOL
            .PHP_EOL."Error".PHP_EOL."test".PHP_EOL.PHP_EOL
            .PHP_EOL."Success".PHP_EOL."test".PHP_EOL;
    }

    public function testOutput()
    {
        $printer = new Printer();

        ob_start();
        $printer->write("test");
        $printer->writeln("test2");
        $printer->info("test");
        $printer->error("test");
        $printer->success("test");
        $out = ob_get_clean();

        $this->assertEquals(self::$expectedOutput, $out);
    }
}