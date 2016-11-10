<?php

use Lifeinabash\OAuth2ServerBundle\DependencyInjection\LifeinabashOAuth2ServerExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class LifeinabashOAuth2ServerExtensionTest extends TestCase
{
    public function testLoad()
    {
        $container = $this->createMock(ContainerBuilder::class);
        $extension = new LifeinabashOAuth2ServerExtension();

        // Just execute the code
        $extension->load([], $container);

        $this->assertInstanceOf(LifeinabashOAuth2ServerExtension::class, $extension);

    }
}
