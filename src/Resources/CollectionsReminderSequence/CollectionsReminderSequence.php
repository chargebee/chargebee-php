<?php

namespace Chargebee\Resources\CollectionsReminderSequence;

class CollectionsReminderSequence  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?int $paused_until
    */
    public ?int $paused_until;
    
    /**
    *
    * @var ?string $pause_note
    */
    public ?string $pause_note;
    
    /**
    *
    * @var ?int $started_at
    */
    public ?int $started_at;
    
    /**
    *
    * @var ?int $completed_at
    */
    public ?int $completed_at;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?array<ActionLog> $action_logs
    */
    public ?array $action_logs;
    
    /**
    *
    * @var ?\Chargebee\Resources\CollectionsReminderSequence\Enums\Status $status
    */
    public ?\Chargebee\Resources\CollectionsReminderSequence\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "invoice_id" , "customer_id" , "paused_until" , "pause_note" , "started_at" , "completed_at" , "created_at" , "updated_at" , "resource_version" , "action_logs"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $invoice_id,
        ?string $customer_id,
        ?int $paused_until,
        ?string $pause_note,
        ?int $started_at,
        ?int $completed_at,
        ?int $created_at,
        ?int $updated_at,
        ?int $resource_version,
        ?array $action_logs,
        ?\Chargebee\Resources\CollectionsReminderSequence\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->invoice_id = $invoice_id;
        $this->customer_id = $customer_id;
        $this->paused_until = $paused_until;
        $this->pause_note = $pause_note;
        $this->started_at = $started_at;
        $this->completed_at = $completed_at;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->resource_version = $resource_version;
        $this->action_logs = $action_logs;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $action_logs = array_map(fn (array $result): ActionLog =>  ActionLog::from(
            $result
        ), $resourceAttributes['action_logs'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['paused_until'] ?? null,
        $resourceAttributes['pause_note'] ?? null,
        $resourceAttributes['started_at'] ?? null,
        $resourceAttributes['completed_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $action_logs,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\CollectionsReminderSequence\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'invoice_id' => $this->invoice_id,
        'customer_id' => $this->customer_id,
        'paused_until' => $this->paused_until,
        'pause_note' => $this->pause_note,
        'started_at' => $this->started_at,
        'completed_at' => $this->completed_at,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        'resource_version' => $this->resource_version,
        
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->action_logs !== []){
            $data['action_logs'] = array_map(
                fn (ActionLog $action_logs): array => $action_logs->toArray(),
                $this->action_logs
            );
        }

        
        return $data;
    }
}
?>