<?php

use Lifeinabash\OAuth2ServerBundle\LifeinabashOAuth2ServerBundle;
use Lifeinabash\OAuth2ServerBundle\DependencyInjection\LifeinabashOAuth2ServerExtension;
use PHPUnit\Framework\TestCase;

class LifeinabashOAuth2ServerBundleTest extends TestCase
{
    public function testGetContainerExtension()
    {
        $bundle = new LifeinabashOAuth2ServerBundle();
        $this->assertInstanceOf(LifeinabashOAuth2ServerExtension::class, $bundle->getContainerExtension());
    }
}
