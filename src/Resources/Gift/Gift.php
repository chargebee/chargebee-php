<?php

namespace Chargebee\Resources\Gift;

class Gift  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?int $scheduled_at
    */
    public ?int $scheduled_at;
    
    /**
    *
    * @var ?bool $auto_claim
    */
    public ?bool $auto_claim;
    
    /**
    *
    * @var ?bool $no_expiry
    */
    public ?bool $no_expiry;
    
    /**
    *
    * @var ?int $claim_expiry_date
    */
    public ?int $claim_expiry_date;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?Gifter $gifter
    */
    public ?Gifter $gifter;
    
    /**
    *
    * @var ?GiftReceiver $gift_receiver
    */
    public ?GiftReceiver $gift_receiver;
    
    /**
    *
    * @var ?array<GiftTimeline> $gift_timelines
    */
    public ?array $gift_timelines;
    
    /**
    *
    * @var ?\Chargebee\Resources\Gift\Enums\Status $status
    */
    public ?\Chargebee\Resources\Gift\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "scheduled_at" , "auto_claim" , "no_expiry" , "claim_expiry_date" , "resource_version" , "updated_at" , "gifter" , "gift_receiver" , "gift_timelines"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $scheduled_at,
        ?bool $auto_claim,
        ?bool $no_expiry,
        ?int $claim_expiry_date,
        ?int $resource_version,
        ?int $updated_at,
        ?Gifter $gifter,
        ?GiftReceiver $gift_receiver,
        ?array $gift_timelines,
        ?\Chargebee\Resources\Gift\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->scheduled_at = $scheduled_at;
        $this->auto_claim = $auto_claim;
        $this->no_expiry = $no_expiry;
        $this->claim_expiry_date = $claim_expiry_date;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->gifter = $gifter;
        $this->gift_receiver = $gift_receiver;
        $this->gift_timelines = $gift_timelines;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $gift_timelines = array_map(fn (array $result): GiftTimeline =>  GiftTimeline::from(
            $result
        ), $resourceAttributes['gift_timelines'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['scheduled_at'] ?? null,
        $resourceAttributes['auto_claim'] ?? null,
        $resourceAttributes['no_expiry'] ?? null,
        $resourceAttributes['claim_expiry_date'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        isset($resourceAttributes['gifter']) ? Gifter::from($resourceAttributes['gifter']) : null,
        isset($resourceAttributes['gift_receiver']) ? GiftReceiver::from($resourceAttributes['gift_receiver']) : null,
        $gift_timelines,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Gift\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'scheduled_at' => $this->scheduled_at,
        'auto_claim' => $this->auto_claim,
        'no_expiry' => $this->no_expiry,
        'claim_expiry_date' => $this->claim_expiry_date,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        
        
        
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->gifter instanceof Gifter){
            $data['gifter'] = $this->gifter->toArray();
        }
        if($this->gift_receiver instanceof GiftReceiver){
            $data['gift_receiver'] = $this->gift_receiver->toArray();
        }
        
        if($this->gift_timelines !== []){
            $data['gift_timelines'] = array_map(
                fn (GiftTimeline $gift_timelines): array => $gift_timelines->toArray(),
                $this->gift_timelines
            );
        }

        
        return $data;
    }
}
?>