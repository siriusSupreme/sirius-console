<?php

namespace Sirius\Console\Events;

class SiriusStarting
{
    /**
     * The Artisan application instance.
     *
     * @var \Sirius\Console\Application
     */
    public $sirius;

    /**
     * Create a new event instance.
     *
     * @param  \Sirius\Console\Application $sirius
     *
     * @return void
     */
    public function __construct( $sirius)
    {
        $this->sirius = $sirius;
    }
}
