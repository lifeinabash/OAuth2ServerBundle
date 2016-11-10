<?php

use Lifeinabash\OAuth2ServerBundle\DependencyInjection\OAuth2ServerExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OAuth2ServerExtensionTest extends TestCase
{
    public function testLoad()
    {
        $container = $this->createMock(ContainerBuilder::class);
        $extension = new OAuth2ServerExtension();

        // Just execute the code
        $extension->load([], $container);

        $this->assertInstanceOf(OAuth2ServerExtension::class, $extension);

    }
}
