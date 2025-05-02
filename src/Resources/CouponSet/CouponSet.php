<?php

namespace Chargebee\Resources\CouponSet;

class CouponSet  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $coupon_id
    */
    public ?string $coupon_id;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?int $total_count
    */
    public ?int $total_count;
    
    /**
    *
    * @var ?int $redeemed_count
    */
    public ?int $redeemed_count;
    
    /**
    *
    * @var ?int $archived_count
    */
    public ?int $archived_count;
    
    /**
    *
    * @var mixed $meta_data
    */
    public mixed $meta_data;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "coupon_id" , "name" , "total_count" , "redeemed_count" , "archived_count" , "meta_data"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $coupon_id,
        ?string $name,
        ?int $total_count,
        ?int $redeemed_count,
        ?int $archived_count,
        mixed $meta_data,
    )
    { 
        $this->id = $id;
        $this->coupon_id = $coupon_id;
        $this->name = $name;
        $this->total_count = $total_count;
        $this->redeemed_count = $redeemed_count;
        $this->archived_count = $archived_count;
        $this->meta_data = $meta_data;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['coupon_id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['total_count'] ?? null,
        $resourceAttributes['redeemed_count'] ?? null,
        $resourceAttributes['archived_count'] ?? null,
        $resourceAttributes['meta_data'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'coupon_id' => $this->coupon_id,
        'name' => $this->name,
        'total_count' => $this->total_count,
        'redeemed_count' => $this->redeemed_count,
        'archived_count' => $this->archived_count,
        'meta_data' => $this->meta_data,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>