<?php

namespace ApiBundle\Controller;

use Monolog\Logger;

class IndexController
{
    /**
     * @var Logger
     */
    protected $logger;

    /**
     * This is an example constructor to handle dependency injection.
     *
     * ExamplesController constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return string
     */
    public function indexAction()
    {
        return 'It works!';
    }
}