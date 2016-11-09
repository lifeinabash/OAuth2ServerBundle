<?php

namespace LifeInABash\OAuth2ServerBundle;

use LifeInABash\OAuth2ServerBundle\DependencyInjection\LifeInABashOAuth2ServerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LifeInABashOAuth2ServerBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new LifeInABashOAuth2ServerExtension();
    }

}

