<?php

declare(strict_types=1);

namespace Tests\ValueObjects\Encoders;

use Chargebee\ValueObjects\Encoders\JsonParamEncoder;
use PHPUnit\Framework\TestCase;

final class JsonParamEncoderTest extends TestCase
{
    /** Should convert params to JSON string */
    /** {"first_name":"John","last_name":"Doe","email":"john@test.com","locale":"fr-CA"} */
    public function testEncodeParamsWithSimpleAttributes(): void
    {
        $params = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@test.com',
            'locale' => 'fr-CA',
        ];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }
    /** Should convert params to JSON string */
    /** {"first_name":"John","last_name":"Doe","coupons":["FIFTYOFF","TENOFF"]} */
    public function testEncodeParamsWithAttributeAsArrayOfPrimitives(): void
    {
        $params = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'coupons' => ['FIFTYOFF', 'TENOFF'],
        ];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }

    /** Should convert params to JSON string */
    /** {"first_name":"John","last_name":"Doe","billing_address":{"city":"Walnut","state":"California"}} */
    public function testEncodeParamsWithAttributeAsSubResourceAttributes(): void
    {
        $params = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'billing_address' => [
                'city' => 'Walnut',
                'state' => 'California',
            ],
        ];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }

    /** Should convert params to JSON string */
    /** {"subscription_items":[{"item_price_id":"day-pass-USD","unit_price":100},{"item_price_id":"basic-USD","billing_cycles":2,"quantity":1}],"billing_cycle":1} */
    public function testEncodeParamsWithAttributeAsArrayOfSubResources(): void
    {
        $params = [
            'subscription_items' => [
                [
                    'item_price_id' => 'day-pass-USD',
                    'unit_price' => 100,
                ],
                [
                    'item_price_id' => 'basic-USD',
                    'billing_cycles' => 2,
                    'quantity' => 1,
                ],
            ],
            'billing_cycle' => 1,
        ];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }

    /** Convert params to JSON encoding. Transform empty arrays into empty object {} instead of [] */
    /** {} */
    public function testEncodeParamsWithEmptyArrayAsEmptyObject(): void
    {
        $params = [];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertStringContainsString('{}', $encoded);
    }

    /** Should convert params to JSON string */
    /** {"id":"foo","name":"foo","discount_percentage":10,"apply_on":"each_specified_item","item_constraints":[{"constraint":"specific","item_type":"plan","item_price_ids":["some_price_id_one","some_price_id_two"]}]} */
    public function testEncodeParamsWithComplexNestedStructure(): void
    {
        $params = [
            'id' => 'foo',
            'name' => 'foo',
            'discount_percentage' => 10.0,
            'apply_on' => 'each_specified_item',
            'item_constraints' => [
                [
                    'constraint' => 'specific',
                    'item_type' => 'plan',
                    'item_price_ids' => [
                        'some_price_id_one',
                        'some_price_id_two',
                    ],
                ],
            ],
        ];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }

    /** Should convert params to JSON string with numeric values */
    /** {"integer_value":42,"float_value":10.5,"zero_value":0,"negative_value":-15} */
    public function testEncodeParamsWithNumericValues(): void
    {
        $params = [
            'integer_value' => 42,
            'float_value' => 10.5,
            'zero_value' => 0,
            'negative_value' => -15,
        ];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }

    /** Should convert params to JSON string with null values */
    /** {"first_name":"John","middle_name":null,"last_name":"Doe"} */
    public function testEncodeParamsWithNullValues(): void
    {
        $params = [
            'first_name' => 'John',
            'middle_name' => null,
            'last_name' => 'Doe',
        ];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }

    /** Should convert params to JSON string with special characters */
    /** {"email":"john@test.com","url":"https://example.com/path?query=value","description":"Line 1\nLine 2\tTabbed","quotes":"He said \"hello\""} */
    public function testEncodeParamsWithSpecialCharacters(): void
    {
        $params = [
            'email' => 'john@test.com',
            'url' => 'https://example.com/path?query=value',
            'description' => "Line 1\nLine 2\tTabbed",
            'quotes' => 'He said "hello"',
        ];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }

    /** Should convert params to JSON string with deeply nested structure */
    /** {"level1":{"level2":{"level3":{"level4":{"value":"deep"}}}}} */
    public function testEncodeParamsWithDeeplyNestedStructure(): void
    {
        $params = [
            'level1' => [
                'level2' => [
                    'level3' => [
                        'level4' => [
                            'value' => 'deep',
                        ],
                    ],
                ],
            ],
        ];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }

    /** Should convert params to JSON string with mixed types */
    /** {"string":"value","integer":123,"float":45.67,"boolean":true,"null":null,"array":[1,2,3],"object":{"key":"value"}} */
    public function testEncodeParamsWithMixedTypes(): void
    {
        $params = [
            'string' => 'value',
            'integer' => 123,
            'float' => 45.67,
            'boolean' => true,
            'null' => null,
            'array' => [1, 2, 3],
            'object' => ['key' => 'value'],
        ];

        $encoded = JsonParamEncoder::encode($params);

        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }

    /** Should Convert empty array attribute to object & array to json array while converting to JSON */
    /** {"first_name":"John","last_name":"Doe","email":"john@test.com","locale":"fr-CA","meta_data":{},"coupons":["FIFTY_OFF","EXTRA_CARD_OFFER"]}  */
    public function testEncodeParamsWithSimpleAttributesOne(): void
    {
        $params = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@test.com',
            'locale' => 'fr-CA',
            'meta_data' => [],
            'coupons' => ["FIFTY_OFF", "EXTRA_CARD_OFFER"]
        ];

        $encoded = JsonParamEncoder::encode($params);
        $this->assertIsString($encoded);
        $this->assertJson($encoded);
        $this->assertEquals($params, json_decode($encoded, true));
    }
}
