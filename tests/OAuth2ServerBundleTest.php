<?php

use Lifeinabash\OAuth2ServerBundle\OAuth2ServerBundle;
use Lifeinabash\OAuth2ServerBundle\DependencyInjection\OAuth2ServerExtension;
use PHPUnit\Framework\TestCase;

class OAuth2ServerBundleTest extends TestCase
{
    public function testGetContainerExtension()
    {
        $bundle = new Lifeinabash\OAuth2ServerBundle\OAuth2ServerBundle();
        $this->assertInstanceOf(OAuth2ServerExtension::class, $bundle->getContainerExtension());
    }
}
