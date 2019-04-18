<?php

namespace ExampleBundle\Validator\Constraints;

use ApiBundle\Validator\Constraints\ValidSlug;
use Symfony\Component\Validator\Constraints;

class CreateExampleConstraints extends Constraints\Collection
{
    public function __construct()
    {
        parent::__construct([
            'slug'          => [
                new ValidSlug(),
                new Constraints\Length(['min' => 3]),
                new Constraints\NotBlank(),
            ],
            'name'              => new Constraints\NotBlank(),
            'industry_id'       => [
                new Constraints\NotBlank(),
                new Constraints\Range(['min' => 0,'max' => 42]),
            ],
        ]);
    }

    public function validatedBy()
    {
        return 'Symfony\Component\Validator\Constraints\CollectionValidator';
    }
}