<?php

declare(strict_types=1);

namespace Tests\ValueObjects\Encoders;

use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use PHPUnit\Framework\TestCase;

final class URLFormEncoderTest extends TestCase
{
    /** Should convert params to URL Form Encode */
    /**  first_name first_name=John&last_name=Doe&email=john@test.com&locale=fr-CA */
    public function testEncodeParamsWithSimpleAttributes(): void
    {
        $params = [
            "first_name" => "John",
            "last_name" => "Doe",
            "email" => "john@test.com",
            "locale" => "fr-CA",
        ];
        $encoded = URLFormEncoder::encode($params);
        $this->assertIsString($encoded);
        $this->assertSame("first_name=John&last_name=Doe&email=john%40test.com&locale=fr-CA", $encoded);
    }

    /** Should convert params to URL Form Encode */
    /**  first_name=John&last_name=Doe&coupon[0]=FIFTYOFF&coupon[1]=TENOFF */
    public function testEncodeParamsWithAttributeAsArrayOfPrimitives(): void
    {
        $params = [
            "first_name" => "John",
            "last_name" => "Doe",
            "coupon" => [ "FIFTYOFF", "TENOFF"]
        ];
        $encoded = URLFormEncoder::encode($params);
        $this->assertIsString($encoded);
        $this->assertSame("first_name=John&last_name=Doe&coupon%5B0%5D=FIFTYOFF&coupon%5B1%5D=TENOFF", $encoded);
    }

    /** Should convert params to URL Form Encode */
    /** first_name=John&last_name=Doe&billing_address[city]=Walnut&billing_address[state]=California */
    public function testEncodeParamsWithAttributeAsSubResourceAttributesShouldConvertToURLFormEncode(): void
    {
        $params = [
            "first_name" => "John",
            "last_name" => "Doe",
            "billing_address" =>  [
                "city" => "Walnut",
                "state" => "California"
            ]
        ];
        $encoded = URLFormEncoder::encode($params);
        $this->assertIsString($encoded);
        $this->assertSame("first_name=John&last_name=Doe&billing_address%5Bcity%5D=Walnut&billing_address%5Bstate%5D=California", $encoded);
    }

    /** Should convert params to URL Form Encode */
    /** subscription_items[item_price_id][0]=day-pass-USD&subscription_items[unit_price][0]=100&subscription_items[item_price_id][1]=basic-USD&subscription_items[billing_cycles][1]=2&subscription_items[quantity][1]=1&billing_cycle=1 */
    public function testEncodeParamsWithAttributeAsArrayOfSubResources(): void
    {
        $params = [
            "subscription_items" => [
                [
                    "item_price_id" => "day-pass-USD",
                    "unit_price" => 100
                ],
                [
                    "item_price_id" => "basic-USD",
                    "billing_cycles" => 2,
                    "quantity" => 1
                ]
            ],
            "billing_cycle" => 1
        ];
        $encoded = URLFormEncoder::encode($params);
        $this->assertIsString($encoded);
        $this->assertSame("subscription_items%5Bitem_price_id%5D%5B0%5D=day-pass-USD&subscription_items%5Bunit_price%5D%5B0%5D=100&subscription_items%5Bitem_price_id%5D%5B1%5D=basic-USD&subscription_items%5Bbilling_cycles%5D%5B1%5D=2&subscription_items%5Bquantity%5D%5B1%5D=1&billing_cycle=1", $encoded);
    }
    /** Should convert params to URL Form Encode with that particular attributes to json string */
    /** first_name=John&last_name=Doe&billing_address={"city":"Walnut","State":"California"} */
    public function testEncodeParamsWithAttributeAsJsonObjectAtSameLevel(): void {
        $params = [
            "first_name" => "John",
            "last_name" => "Doe",
            "billing_address" =>  [
                "city" => "Walnut",
                "State" => "California"
            ]
        ];
        $json_keys = [
            "billingAddress" => 0
        ];
        $encoded = URLFormEncoder::encode($params, $json_keys);
        $this->assertIsString($encoded);
        $this->assertSame("first_name=John&last_name=Doe&billing_address=%7B%22city%22%3A%22Walnut%22%2C%22State%22%3A%22California%22%7D", $encoded);
    }

    /** Should convert params to URL Form Encode with that particular attributes to json string */
    /** first_name=John&last_name=Doe&billing_address={"city":"Walnut","State":"California"} */
    public function testEncodeParamsWithAttributeAsJsonStringAtSameLevel(): void {
        $params = [
            "first_name" => "John",
            "last_name" => "Doe",
            "billing_address" =>  json_encode([
                "city" => "Walnut",
                "State" => "California"
            ])
        ];
        $json_keys = [
            "billingAddress" => 0
        ];
        $encoded = URLFormEncoder::encode($params, $json_keys);
        $this->assertIsString($encoded);
        $this->assertSame("first_name=John&last_name=Doe&billing_address=%7B%22city%22%3A%22Walnut%22%2C%22State%22%3A%22California%22%7D", $encoded);
    }

    /** Should convert params to URL Form Encode with that particular attributes to url form encode itself as level is different */
    /** first_name=John&last_name=Doe&billing_address[city]=Walnut&billing_address[state]=California */
    public function testEncodeParamsWithAttributeAsJsonStringAtDifferentLevel(): void {
        $params = [
            "first_name" => "John",
            "last_name" => "Doe",
            "billing_address" =>  [
                "city" => "Walnut",
                "State" => "California"
            ]
        ];
        $json_keys = [
            "billingAddress" => 1
        ];
        $encoded = URLFormEncoder::encode($params, $json_keys);
        $this->assertIsString($encoded);
        $this->assertSame("first_name=John&last_name=Doe&billing_address%5Bcity%5D=Walnut&billing_address%5B_state%5D=California", $encoded);
    }

    /** Should convert params to URL Form Encode with that particular attributes to json string */
    /** first_name=John&last_name=Doe&billing_address={"city":"Walnut","State":"California"} */
    public function testEncodeParamsWithAttributeAsJsonObjectAndCamelCaseAtSameLevel(): void {
        $params = [
            "first_name" => "John",
            "last_name" => "Doe",
            "billingAddress" =>  [
                "city" => "Walnut",
                "State" => "California"
            ]
        ];
        $json_keys = [
            "billingAddress" => 0
        ];
        $encoded = URLFormEncoder::encode($params, $json_keys);
        $this->assertIsString($encoded);
        $this->assertSame("first_name=John&last_name=Doe&billing_address=%7B%22city%22%3A%22Walnut%22%2C%22State%22%3A%22California%22%7D", $encoded);
    }

    /** Should convert params to URL Form Encode with that particular attributes to json string */
    /** first_name=John&last_name=Doe&billing_address={"city":"Walnut","State":"California"} */
    public function testEncodeParamsWithAttributeAsJsonStringAndCamelCaseAtSameLevel(): void {
        $params = [
            "first_name" => "John",
            "last_name" => "Doe",
            "billingAddress" =>  json_encode([
                "city" => "Walnut",
                "State" => "California"
            ])
        ];
        $json_keys = [
            "billingAddress" => 0
        ];
        $encoded = URLFormEncoder::encode($params, $json_keys);
        $this->assertIsString($encoded);
        $this->assertSame("first_name=John&last_name=Doe&billing_address=%7B%22city%22%3A%22Walnut%22%2C%22State%22%3A%22California%22%7D", $encoded);
    }


    /** Convert params to URL-form encoding. Do not transform empty arrays into associative arrays; convert them to an empty object {} instead. */
    /** first_name=John&last_name=Doe&meta_data={}*/
    public function testEncodeParamsWithAEmptyJsonAttribute(): void {
        $params = [
            "first_name" => "John",
            "last_name" => "Doe",
            "meta_data" =>  [
            ]
        ];
        $json_keys = [
            "metaData" => 0
        ];
        $encoded = URLFormEncoder::encode($params, $json_keys);
        $this->assertIsString($encoded);
        $this->assertSame("first_name=John&last_name=Doe&meta_data=%7B%7D", $encoded);
    }

    /** Convert params to URL-form encoding. Do not transform json arrays to array based indexing. it should not ItemPriceId { "0" => "some_price_id"}  */
    public function testEncodeParamsShouldNotUseArrayBasedIndexingForJsonArray(): void
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
                        'some_price_id',
                    ],
                ],
            ],
        ];

        $json_keys = [
            "itemPriceIds" => 1
        ];
        $encoded = URLFormEncoder::encode($params, $json_keys);
        $this->assertIsString($encoded);
        $this->assertSame("id=foo&name=foo&discount_percentage=10&apply_on=each_specified_item&item_constraints%5Bconstraint%5D%5B0%5D=specific&item_constraints%5Bitem_type%5D%5B0%5D=plan&item_constraints%5Bitem_price_ids%5D%5B0%5D=%5B%22some_price_id%22%5D", $encoded);
    }
}
