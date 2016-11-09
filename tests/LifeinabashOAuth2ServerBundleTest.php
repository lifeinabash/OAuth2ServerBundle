<?php

use Lifeinabash\OAuth2\ServerBundle\LifeinabashOAuth2ServerBundle;
use Lifeinabash\OAuth2\ServerBundle\DependencyInjection\LifeinabashOAuth2ServerExtension;
use PHPUnit\Framework\TestCase;

class LifeinabashOAuth2ServerBundleTest extends TestCase
{
    public function testGetContainerExtension()
    {
        $bundle = new LifeinabashOAuth2ServerBundle();
        $this->assertInstanceOf(LifeinabashOAuth2ServerExtension::class, $bundle->getContainerExtension());
    }
}
