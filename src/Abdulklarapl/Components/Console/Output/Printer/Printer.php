<?php

namespace Abdulklarapl\Components\Console\Output\Printer;

/**
 * Printer
 *
 * @package Printer
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
class Printer implements PrinterInterface
{

    /**
     * @param string $msg
     * @return $this
     */
    public function writeln($msg = null)
    {
        $this->write(PHP_EOL.$msg.PHP_EOL);
    }

    /**
     * @param string $msg
     * @return $this
     */
    public function write($msg = null)
    {
        echo($msg);
    }

    /**
     * @param string $msg
     * @return $this
     */
    public function info($msg = null)
    {
        $this->writeln();
        $this->write("Info");
        $this->writeln($msg);
    }

    /**
     * @param string $msg
     * @return $this
     */
    public function error($msg = null)
    {
        $this->writeln();
        $this->write("Error");
        $this->writeln($msg);
    }

    /**
     * @param string $msg
     * @return $this
     */
    public function success($msg = null)
    {
        $this->writeln();
        $this->write("Success");
        $this->writeln($msg);
    }
}
