<?php

namespace Chargebee\Resources\Coupon;

use Chargebee\ValueObjects\SupportsCustomFields;
class Coupon  extends SupportsCustomFields  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?string $invoice_name
    */
    public ?string $invoice_name;
    
    /**
    *
    * @var ?int $discount_percentage
    */
    public ?int $discount_percentage;
    
    /**
    *
    * @var ?int $discount_amount
    */
    public ?int $discount_amount;
    
    /**
    *
    * @var ?int $discount_quantity
    */
    public ?int $discount_quantity;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $duration_month
    */
    public ?int $duration_month;
    
    /**
    *
    * @var ?int $valid_from
    */
    public ?int $valid_from;
    
    /**
    *
    * @var ?int $valid_till
    */
    public ?int $valid_till;
    
    /**
    *
    * @var ?int $max_redemptions
    */
    public ?int $max_redemptions;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $archived_at
    */
    public ?int $archived_at;
    
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
    * @var ?bool $included_in_mrr
    */
    public ?bool $included_in_mrr;
    
    /**
    *
    * @var ?int $period
    */
    public ?int $period;
    
    /**
    *
    * @var ?array<string> $plan_ids
    */
    public ?array $plan_ids;
    
    /**
    *
    * @var ?array<string> $addon_ids
    */
    public ?array $addon_ids;
    
    /**
    *
    * @var ?array<ItemConstraint> $item_constraints
    */
    public ?array $item_constraints;
    
    /**
    *
    * @var ?array<ItemConstraintCriteria> $item_constraint_criteria
    */
    public ?array $item_constraint_criteria;
    
    /**
    *
    * @var ?int $redemptions
    */
    public ?int $redemptions;
    
    /**
    *
    * @var ?string $invoice_notes
    */
    public ?string $invoice_notes;
    
    /**
    *
    * @var mixed $meta_data
    */
    public mixed $meta_data;
    
    /**
    *
    * @var ?array<CouponConstraint> $coupon_constraints
    */
    public ?array $coupon_constraints;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var ?\Chargebee\Enums\PeriodUnit $period_unit
    */
    public ?\Chargebee\Enums\PeriodUnit $period_unit;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\Enums\DiscountType $discount_type
    */
    public ?\Chargebee\Resources\Coupon\Enums\DiscountType $discount_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\Enums\DurationType $duration_type
    */
    public ?\Chargebee\Resources\Coupon\Enums\DurationType $duration_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\Enums\Status $status
    */
    public ?\Chargebee\Resources\Coupon\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\Enums\ApplyDiscountOn $apply_discount_on
    */
    public ?\Chargebee\Resources\Coupon\Enums\ApplyDiscountOn $apply_discount_on;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\Enums\ApplyOn $apply_on
    */
    public ?\Chargebee\Resources\Coupon\Enums\ApplyOn $apply_on;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\Enums\PlanConstraint $plan_constraint
    */
    public ?\Chargebee\Resources\Coupon\Enums\PlanConstraint $plan_constraint;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\Enums\AddonConstraint $addon_constraint
    */
    public ?\Chargebee\Resources\Coupon\Enums\AddonConstraint $addon_constraint;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "invoice_name" , "discount_percentage" , "discount_amount" , "discount_quantity" , "currency_code" , "duration_month" , "valid_from" , "valid_till" , "max_redemptions" , "created_at" , "archived_at" , "resource_version" , "updated_at" , "included_in_mrr" , "period" , "plan_ids" , "addon_ids" , "item_constraints" , "item_constraint_criteria" , "redemptions" , "invoice_notes" , "meta_data" , "coupon_constraints" , "deleted"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $invoice_name,
        ?int $discount_percentage,
        ?int $discount_amount,
        ?int $discount_quantity,
        ?string $currency_code,
        ?int $duration_month,
        ?int $valid_from,
        ?int $valid_till,
        ?int $max_redemptions,
        ?int $created_at,
        ?int $archived_at,
        ?int $resource_version,
        ?int $updated_at,
        ?bool $included_in_mrr,
        ?int $period,
        ?array $plan_ids,
        ?array $addon_ids,
        ?array $item_constraints,
        ?array $item_constraint_criteria,
        ?int $redemptions,
        ?string $invoice_notes,
        mixed $meta_data,
        ?array $coupon_constraints,
        ?bool $deleted,
        ?\Chargebee\Enums\PeriodUnit $period_unit,
        ?\Chargebee\Resources\Coupon\Enums\DiscountType $discount_type,
        ?\Chargebee\Resources\Coupon\Enums\DurationType $duration_type,
        ?\Chargebee\Resources\Coupon\Enums\Status $status,
        ?\Chargebee\Resources\Coupon\Enums\ApplyDiscountOn $apply_discount_on,
        ?\Chargebee\Resources\Coupon\Enums\ApplyOn $apply_on,
        ?\Chargebee\Resources\Coupon\Enums\PlanConstraint $plan_constraint,
        ?\Chargebee\Resources\Coupon\Enums\AddonConstraint $addon_constraint,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->invoice_name = $invoice_name;
        $this->discount_percentage = $discount_percentage;
        $this->discount_amount = $discount_amount;
        $this->discount_quantity = $discount_quantity;
        $this->currency_code = $currency_code;
        $this->duration_month = $duration_month;
        $this->valid_from = $valid_from;
        $this->valid_till = $valid_till;
        $this->max_redemptions = $max_redemptions;
        $this->created_at = $created_at;
        $this->archived_at = $archived_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->included_in_mrr = $included_in_mrr;
        $this->period = $period;
        $this->plan_ids = $plan_ids;
        $this->addon_ids = $addon_ids;
        $this->item_constraints = $item_constraints;
        $this->item_constraint_criteria = $item_constraint_criteria;
        $this->redemptions = $redemptions;
        $this->invoice_notes = $invoice_notes;
        $this->meta_data = $meta_data;
        $this->coupon_constraints = $coupon_constraints;
        $this->deleted = $deleted; 
        $this->period_unit = $period_unit; 
        $this->discount_type = $discount_type;
        $this->duration_type = $duration_type;
        $this->status = $status;
        $this->apply_discount_on = $apply_discount_on;
        $this->apply_on = $apply_on;
        $this->plan_constraint = $plan_constraint;
        $this->addon_constraint = $addon_constraint;
    }

    public static function from(array $resourceAttributes): self
    { 
        $item_constraints = array_map(fn (array $result): ItemConstraint =>  ItemConstraint::from(
            $result
        ), $resourceAttributes['item_constraints'] ?? []);
        
        $item_constraint_criteria = array_map(fn (array $result): ItemConstraintCriteria =>  ItemConstraintCriteria::from(
            $result
        ), $resourceAttributes['item_constraint_criteria'] ?? []);
        
        $coupon_constraints = array_map(fn (array $result): CouponConstraint =>  CouponConstraint::from(
            $result
        ), $resourceAttributes['coupon_constraints'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['invoice_name'] ?? null,
        $resourceAttributes['discount_percentage'] ?? null,
        $resourceAttributes['discount_amount'] ?? null,
        $resourceAttributes['discount_quantity'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['duration_month'] ?? null,
        $resourceAttributes['valid_from'] ?? null,
        $resourceAttributes['valid_till'] ?? null,
        $resourceAttributes['max_redemptions'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['archived_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['included_in_mrr'] ?? null,
        $resourceAttributes['period'] ?? null,
        $resourceAttributes['plan_ids'] ?? null,
        $resourceAttributes['addon_ids'] ?? null,
        $item_constraints,
        $item_constraint_criteria,
        $resourceAttributes['redemptions'] ?? null,
        $resourceAttributes['invoice_notes'] ?? null,
        $resourceAttributes['meta_data'] ?? null,
        $coupon_constraints,
        $resourceAttributes['deleted'] ?? null,
        
        
        isset($resourceAttributes['period_unit']) ? \Chargebee\Enums\PeriodUnit::tryFromValue($resourceAttributes['period_unit']) : null,
         
        isset($resourceAttributes['discount_type']) ? \Chargebee\Resources\Coupon\Enums\DiscountType::tryFromValue($resourceAttributes['discount_type']) : null,
        
        isset($resourceAttributes['duration_type']) ? \Chargebee\Resources\Coupon\Enums\DurationType::tryFromValue($resourceAttributes['duration_type']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Coupon\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['apply_discount_on']) ? \Chargebee\Resources\Coupon\Enums\ApplyDiscountOn::tryFromValue($resourceAttributes['apply_discount_on']) : null,
        
        isset($resourceAttributes['apply_on']) ? \Chargebee\Resources\Coupon\Enums\ApplyOn::tryFromValue($resourceAttributes['apply_on']) : null,
        
        isset($resourceAttributes['plan_constraint']) ? \Chargebee\Resources\Coupon\Enums\PlanConstraint::tryFromValue($resourceAttributes['plan_constraint']) : null,
        
        isset($resourceAttributes['addon_constraint']) ? \Chargebee\Resources\Coupon\Enums\AddonConstraint::tryFromValue($resourceAttributes['addon_constraint']) : null,
        
        );
       foreach ($resourceAttributes as $key => $value) {
            if (!in_array($key, $returnData::$knownFields, true)) {
                $returnData->__set($key, $value);
            }
        } 
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'invoice_name' => $this->invoice_name,
        'discount_percentage' => $this->discount_percentage,
        'discount_amount' => $this->discount_amount,
        'discount_quantity' => $this->discount_quantity,
        'currency_code' => $this->currency_code,
        'duration_month' => $this->duration_month,
        'valid_from' => $this->valid_from,
        'valid_till' => $this->valid_till,
        'max_redemptions' => $this->max_redemptions,
        'created_at' => $this->created_at,
        'archived_at' => $this->archived_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'included_in_mrr' => $this->included_in_mrr,
        'period' => $this->period,
        'plan_ids' => $this->plan_ids,
        'addon_ids' => $this->addon_ids,
        
        
        'redemptions' => $this->redemptions,
        'invoice_notes' => $this->invoice_notes,
        'meta_data' => $this->meta_data,
        
        'deleted' => $this->deleted,
        
        'period_unit' => $this->period_unit?->value,
        
        'discount_type' => $this->discount_type?->value,
        
        'duration_type' => $this->duration_type?->value,
        
        'status' => $this->status?->value,
        
        'apply_discount_on' => $this->apply_discount_on?->value,
        
        'apply_on' => $this->apply_on?->value,
        
        'plan_constraint' => $this->plan_constraint?->value,
        
        'addon_constraint' => $this->addon_constraint?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->item_constraints !== []){
            $data['item_constraints'] = array_map(
                fn (ItemConstraint $item_constraints): array => $item_constraints->toArray(),
                $this->item_constraints
            );
        }
        if($this->item_constraint_criteria !== []){
            $data['item_constraint_criteria'] = array_map(
                fn (ItemConstraintCriteria $item_constraint_criteria): array => $item_constraint_criteria->toArray(),
                $this->item_constraint_criteria
            );
        }
        if($this->coupon_constraints !== []){
            $data['coupon_constraints'] = array_map(
                fn (CouponConstraint $coupon_constraints): array => $coupon_constraints->toArray(),
                $this->coupon_constraints
            );
        }

        foreach($this->_data as $keys => $value){
            if (!in_array($keys, $this::$knownFields)) {
                $data[$keys] = $value;
            }
        } 
        return $data;
    }
}
?>