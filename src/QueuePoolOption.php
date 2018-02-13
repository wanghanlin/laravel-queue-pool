<?php

namespace Wanghanlin\QueuePool;

use Illuminate\Queue\WorkerOptions;

class QueuePoolOption extends WorkerOptions
{
    /**
     * The amount of pool worker need to start.
     *
     * @var int
     */
    public $workers;

    /**
     * The environment the pool worker should run in.
     *
     * @var string
     */
    public $environment;

    /**
     * Create a new pool options instance.
     *
     * @param  int  $workers
     * @param  string $environment
     * @param  int  $delay
     * @param  int  $memory
     * @param  int  $timeout
     * @param  int  $sleep
     * @param  int  $maxTries
     * @param  bool  $force
     * @return void
     */
    public function __construct($workers = 1, $environment = null, $delay = 0, $memory = 128, $timeout = 60, $sleep = 3, $maxTries = 0, $force = false)
    {
        $this->workers = $workers;
        $this->environment = $environment;
        parent::__construct($delay, $memory, $timeout, $sleep, $maxTries, $force);
    }
}
