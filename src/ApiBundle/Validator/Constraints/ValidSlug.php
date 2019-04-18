<?php

namespace ApiBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraints\Regex;

class ValidSlug extends Regex
{
    protected static $errorNames = [
        self::REGEX_FAILED_ERROR => 'INVALID_SLUG_ERROR',
    ];

    public $message = 'Slugs are only allowed to contain lower case letters, numbers and dashes!';
    public $pattern = '/^[a-z\d-]+$/';

    public function getDefaultOption()
    {
        return null;
    }

    public function getRequiredOptions()
    {
        return [];
    }
}
