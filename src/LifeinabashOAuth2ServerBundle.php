<?php

namespace Lifeinabash\OAuth2ServerBundle;

use Lifeinabash\OAuth2ServerBundle\DependencyInjection\LifeinabashOAuth2ServerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LifeinabashOAuth2ServerBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new LifeinabashOAuth2ServerExtension();
    }

}

