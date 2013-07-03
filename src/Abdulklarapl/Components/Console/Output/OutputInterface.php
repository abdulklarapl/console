<?php

namespace Abdulklarapl\Components\Console\Output;

/**
 * OutputInterface
 *
 * @package Output
 * @subpackage Interface
 *
 * @author Patryk Szlagowski <szlagowskipatryk@gmail.com>
 */
interface OutputInterface
{

    /**
     * @param string $msg
     * @return $this
     */
    public function write($msg = null);

    /**
     * @param string $msg
     * @return $this
     */
    public function writeln($msg = null);

    /**
     * @param string $msg
     * @return $this
     */
    public function info($msg = null);

    /**
     * @param string $msg
     * @return $this
     */
    public function error($msg = null);

    /**
     * @param string $msg
     * @return $this
     */
    public function success($msg = null);

    public function terminate();
}
