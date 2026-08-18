<?php

namespace Tests\Network;

use Chargebee\Environment;
use Chargebee\HttpClient\GuzzleFactory;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

#[CoversClass(GuzzleFactory::class)]
final class GuzzleFactoryTest extends TestCase
{
    private function makePayload(string $method, ?string $params = null): ChargebeePayload
    {
        $env = new Environment('test-site', 'test-api-key');
        return new ChargebeePayload(
            'https://example.com/api/v2/customers',
            $method,
            $params,
            ['Authorization' => 'Basic dGVzdA=='],
            $env
        );
    }

    #[TestDox('createRequest() builds a request with an uppercase HTTP method')]
    #[DataProvider('httpMethodProvider')]
    public function testCreateRequestUsesUppercaseHttpMethod(string $method, string $expected): void
    {
        $factory = new GuzzleFactory(10, 30);

        $request = $factory->createRequest($this->makePayload($method, 'limit=10'));

        $this->assertSame($expected, $request->getMethod());
    }

    public static function httpMethodProvider(): array
    {
        return [
            'lowercase get' => ['get', 'GET'],
            'lowercase post' => ['post', 'POST'],
            'uppercase get' => ['GET', 'GET'],
            'uppercase post' => ['POST', 'POST'],
        ];
    }

    #[TestDox('createRequest() rejects unsupported HTTP methods')]
    public function testCreateRequestRejectsUnsupportedMethod(): void
    {
        $factory = new GuzzleFactory(10, 30);

        $this->expectException(\Exception::class);
        $factory->createRequest($this->makePayload('delete'));
    }
}
