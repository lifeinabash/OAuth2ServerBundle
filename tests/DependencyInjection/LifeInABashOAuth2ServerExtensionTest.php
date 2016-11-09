<?php

use LifeInABash\OAuth2ServerBundle\DependencyInjection\LifeInABashOAuth2ServerExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class LifeInABashOAuth2ServerExtensionTest extends TestCase
{
    public function testLoad()
    {
        $container = $this->createMock(ContainerBuilder::class);
        $extension = new LifeInABashOAuth2ServerExtension();

        // Just execute the code
        $extension->load([], $container);

        $this->assertInstanceOf(LifeInABashOAuth2ServerExtension::class, $extension);

    }
}
