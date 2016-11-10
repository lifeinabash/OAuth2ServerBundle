<?php

namespace Lifeinabash\OAuth2ServerBundle;

use Lifeinabash\OAuth2ServerBundle\DependencyInjection\OAuth2ServerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class OAuth2ServerBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new OAuth2ServerExtension();
    }

}

