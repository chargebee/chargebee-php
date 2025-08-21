<?php

namespace Chargebee\Resources\Invoice;

class LineItemTier  { 
    /**
    *
    * @var ?string $line_item_id
    */
    public ?string $line_item_id;
    
    /**
    *
    * @var ?int $starting_unit
    */
    public ?int $starting_unit;
    
    /**
    *
    * @var ?int $ending_unit
    */
    public ?int $ending_unit;
    
    /**
    *
    * @var ?int $quantity_used
    */
    public ?int $quantity_used;
    
    /**
    *
    * @var ?int $unit_amount
    */
    public ?int $unit_amount;
    
    /**
    *
    * @var ?string $starting_unit_in_decimal
    */
    public ?string $starting_unit_in_decimal;
    
    /**
    *
    * @var ?string $ending_unit_in_decimal
    */
    public ?string $ending_unit_in_decimal;
    
    /**
    *
    * @var ?string $quantity_used_in_decimal
    */
    public ?string $quantity_used_in_decimal;
    
    /**
    *
    * @var ?string $unit_amount_in_decimal
    */
    public ?string $unit_amount_in_decimal;
    
    /**
    *
    * @var ?string $pricing_type
    */
    public ?string $pricing_type;
    
    /**
    *
    * @var ?int $package_size
    */
    public ?int $package_size;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "line_item_id" , "starting_unit" , "ending_unit" , "quantity_used" , "unit_amount" , "starting_unit_in_decimal" , "ending_unit_in_decimal" , "quantity_used_in_decimal" , "unit_amount_in_decimal" , "pricing_type" , "package_size"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $line_item_id,
        ?int $starting_unit,
        ?int $ending_unit,
        ?int $quantity_used,
        ?int $unit_amount,
        ?string $starting_unit_in_decimal,
        ?string $ending_unit_in_decimal,
        ?string $quantity_used_in_decimal,
        ?string $unit_amount_in_decimal,
        ?string $pricing_type,
        ?int $package_size,
    )
    { 
        $this->line_item_id = $line_item_id;
        $this->starting_unit = $starting_unit;
        $this->ending_unit = $ending_unit;
        $this->quantity_used = $quantity_used;
        $this->unit_amount = $unit_amount;
        $this->starting_unit_in_decimal = $starting_unit_in_decimal;
        $this->ending_unit_in_decimal = $ending_unit_in_decimal;
        $this->quantity_used_in_decimal = $quantity_used_in_decimal;
        $this->unit_amount_in_decimal = $unit_amount_in_decimal;
        $this->pricing_type = $pricing_type;
        $this->package_size = $package_size;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['line_item_id'] ?? null,
        $resourceAttributes['starting_unit'] ?? null,
        $resourceAttributes['ending_unit'] ?? null,
        $resourceAttributes['quantity_used'] ?? null,
        $resourceAttributes['unit_amount'] ?? null,
        $resourceAttributes['starting_unit_in_decimal'] ?? null,
        $resourceAttributes['ending_unit_in_decimal'] ?? null,
        $resourceAttributes['quantity_used_in_decimal'] ?? null,
        $resourceAttributes['unit_amount_in_decimal'] ?? null,
        $resourceAttributes['pricing_type'] ?? null,
        $resourceAttributes['package_size'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['line_item_id' => $this->line_item_id,
        'starting_unit' => $this->starting_unit,
        'ending_unit' => $this->ending_unit,
        'quantity_used' => $this->quantity_used,
        'unit_amount' => $this->unit_amount,
        'starting_unit_in_decimal' => $this->starting_unit_in_decimal,
        'ending_unit_in_decimal' => $this->ending_unit_in_decimal,
        'quantity_used_in_decimal' => $this->quantity_used_in_decimal,
        'unit_amount_in_decimal' => $this->unit_amount_in_decimal,
        'pricing_type' => $this->pricing_type,
        'package_size' => $this->package_size,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>