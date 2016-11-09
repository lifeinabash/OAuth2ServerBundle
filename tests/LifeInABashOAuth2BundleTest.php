<?php

use LifeInABash\OAuth2ServerBundle\LifeInABashOAuth2ServerBundle;
use LifeInABash\OAuth2ServerBundle\DependencyInjection\LifeInABashOAuth2ServerExtension;
use PHPUnit\Framework\TestCase;

class LifeInABashOAuth2ServerBundleTest extends TestCase
{
    public function testGetContainerExtension()
    {
        $bundle = new LifeInABashOAuth2ServerBundle();
        $this->assertInstanceOf(LifeInABashOAuth2ServerExtension::class, $bundle->getContainerExtension());
    }
}
