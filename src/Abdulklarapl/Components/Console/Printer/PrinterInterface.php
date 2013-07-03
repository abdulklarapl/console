<?php

namespace Abdulklarapl\Components\Console\Printer;

/**
 * PrinterInterface
 *
 * @package Printer
 * @subpackage Interface
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
interface PrinterInterface
{
    /**
     * @param string $msg
     */
    public function write($msg = null);

    /**
     * @param string $msg
     */
    public function writeln($msg = null);

    /**
     * @param string $msg
     */
    public function info($msg = null);

    /**
     * @param string $msg
     */
    public function error($msg = null);

    /**
     * @param string $msg
     */
    public function success($msg = null);

}