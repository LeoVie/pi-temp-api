<?php

namespace ApiBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraints\RegexValidator;

use ApiBundle\Validator\Constraints\ValidSlug as Regex;

class ValidSlugValidator extends RegexValidator
{
}
