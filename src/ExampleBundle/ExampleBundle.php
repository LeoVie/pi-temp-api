<?php

namespace ExampleBundle;

use ExampleBundle\DependencyInjection\ExampleBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ExampleBundle extends Bundle
{
    /**
     * @inheritdoc
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new ExampleBundleExtension();
        }

        return $this->extension;
    }
}
