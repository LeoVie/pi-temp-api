<?php
namespace ApiBundle\Exception;

use Symfony\Component\HttpKernel\Exception\HttpException;

class JsonResponseException extends HttpException
{
    private $validationErrors;

    public function __construct($message, $statusCode = 500, $validationErrors = [], $headers = [])
    {
        $this->setValidationErrors($validationErrors);

        parent::__construct($statusCode, $message, null, $headers);
    }

    public function setValidationErrors($errors)
    {
        $this->validationErrors = $errors;
    }

    public function getValidationErrors()
    {
        return $this->validationErrors;
    }

}
