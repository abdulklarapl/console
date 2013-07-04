<?php

namespace Abdulklarapl\Components\Console\Output;

use Abdulklarapl\Components\Console\Output\Printer\PrinterInterface;

/**
 * Output
 *
 * @package Output
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
class Output implements OutputInterface
{

    /**
     * @var PrinterInterface
     */
    private $printer;

    public function __construct(PrinterInterface $printer)
    {
        $this->printer = $printer;
    }

    /**
     * @param string $msg
     * @return $this
     */
    public function writeln($msg = null)
    {
        $this->printer->writeln($msg);
    }

    /**
     * @param string $msg
     * @return $this
     */
    public function write($msg = null)
    {
        $this->printer->write($msg);
    }

    /**
     * @param string $msg
     * @return $this
     */
    public function info($msg = null)
    {
        $this->printer->info($msg);
    }

    /**
     * @param string $msg
     * @return $this
     */
    public function error($msg = null)
    {
        $this->printer->error($msg);
    }

    /**
     * @param string $msg
     * @return $this
     */
    public function success($msg = null)
    {
        $this->printer->success($msg);
    }

    /**
     * Terminate command
     */
    public function terminate()
    {
        die;
    }
}
