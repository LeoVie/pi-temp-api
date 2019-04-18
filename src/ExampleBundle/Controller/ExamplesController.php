<?php

namespace ExampleBundle\Controller;

use ExampleBundle\Entity\Example;
use Kununu\ControllerValidationBundle\Annotation\Validator;
use Monolog\Logger;

class ExamplesController
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
     * @return int
     */
    public function integerAction()
    {
        return 42;
    }

    /**
     * @return string
     */
    public function stringAction()
    {
        return 'foobar';
    }

    /**
     * @return array
     */
    public function arrayAction()
    {
        return [
            'foo' => 'bar'
        ];
    }

    /**
     * @throws \Exception
     */
    public function exceptionAction()
    {
        throw new \Exception('Exception');
    }

    /**
     * @return Example
     */
    public function entityAction()
    {
        return new Example(1, 'Name', 'Address 1', '1111');
    }

    /**
     * This is an example of use the the ControllerValidationBundle
     *
     * If you access the endpoint directly, it will return a validation error.
     * But if you use all the required fields in query string, it will pass the validation: /validation?slug=slug&name=name&industry_id=1
     *
     * @Validator("CreateExampleConstraints")
     */
    public function validationAction()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function oauthProtectedAction()
    {
        return true;
    }
}