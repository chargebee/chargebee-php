<?php

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\HttpClient\GuzzleFactory;
use PHPUnit\Framework\TestCase;

/** @coversDefaultClass \ChargeBee\ChargeBee\Environment */
final class EnvironmentTest extends TestCase
{
    /**
     * @return void
     * @covers ::configure
     * @covers ::__construct
     * @covers ::getHttpClientFactory
     */
    public function testCreateSetsUpDefaultGuzzleFactory()
    {
        Environment::configure('my-test-site', 'not-real');

        self::assertInstanceOf(GuzzleFactory::class, Environment::getHttpClientFactory());
    }
}
