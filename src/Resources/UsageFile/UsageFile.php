<?php

namespace Chargebee\Resources\UsageFile;

class UsageFile  { 
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
    * @var ?string $mime_type
    */
    public ?string $mime_type;
    
    /**
    *
    * @var ?string $error_code
    */
    public ?string $error_code;
    
    /**
    *
    * @var ?string $error_reason
    */
    public ?string $error_reason;
    
    /**
    *
    * @var ?int $total_records_count
    */
    public ?int $total_records_count;
    
    /**
    *
    * @var ?int $processed_records_count
    */
    public ?int $processed_records_count;
    
    /**
    *
    * @var ?int $failed_records_count
    */
    public ?int $failed_records_count;
    
    /**
    *
    * @var ?int $file_size_in_bytes
    */
    public ?int $file_size_in_bytes;
    
    /**
    *
    * @var ?int $processing_started_at
    */
    public ?int $processing_started_at;
    
    /**
    *
    * @var ?int $processing_completed_at
    */
    public ?int $processing_completed_at;
    
    /**
    *
    * @var ?string $uploaded_by
    */
    public ?string $uploaded_by;
    
    /**
    *
    * @var ?int $uploaded_at
    */
    public ?int $uploaded_at;
    
    /**
    *
    * @var ?UploadDetail $upload_details
    */
    public ?UploadDetail $upload_details;
    
    /**
    *
    * @var ?\Chargebee\Resources\UsageFile\Enums\Status $status
    */
    public ?\Chargebee\Resources\UsageFile\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "mime_type" , "error_code" , "error_reason" , "total_records_count" , "processed_records_count" , "failed_records_count" , "file_size_in_bytes" , "processing_started_at" , "processing_completed_at" , "uploaded_by" , "uploaded_at" , "upload_details"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $mime_type,
        ?string $error_code,
        ?string $error_reason,
        ?int $total_records_count,
        ?int $processed_records_count,
        ?int $failed_records_count,
        ?int $file_size_in_bytes,
        ?int $processing_started_at,
        ?int $processing_completed_at,
        ?string $uploaded_by,
        ?int $uploaded_at,
        ?UploadDetail $upload_details,
        ?\Chargebee\Resources\UsageFile\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->mime_type = $mime_type;
        $this->error_code = $error_code;
        $this->error_reason = $error_reason;
        $this->total_records_count = $total_records_count;
        $this->processed_records_count = $processed_records_count;
        $this->failed_records_count = $failed_records_count;
        $this->file_size_in_bytes = $file_size_in_bytes;
        $this->processing_started_at = $processing_started_at;
        $this->processing_completed_at = $processing_completed_at;
        $this->uploaded_by = $uploaded_by;
        $this->uploaded_at = $uploaded_at;
        $this->upload_details = $upload_details;  
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['mime_type'] ?? null,
        $resourceAttributes['error_code'] ?? null,
        $resourceAttributes['error_reason'] ?? null,
        $resourceAttributes['total_records_count'] ?? null,
        $resourceAttributes['processed_records_count'] ?? null,
        $resourceAttributes['failed_records_count'] ?? null,
        $resourceAttributes['file_size_in_bytes'] ?? null,
        $resourceAttributes['processing_started_at'] ?? null,
        $resourceAttributes['processing_completed_at'] ?? null,
        $resourceAttributes['uploaded_by'] ?? null,
        $resourceAttributes['uploaded_at'] ?? null,
        isset($resourceAttributes['upload_details']) ? UploadDetail::from($resourceAttributes['upload_details']) : null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\UsageFile\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'mime_type' => $this->mime_type,
        'error_code' => $this->error_code,
        'error_reason' => $this->error_reason,
        'total_records_count' => $this->total_records_count,
        'processed_records_count' => $this->processed_records_count,
        'failed_records_count' => $this->failed_records_count,
        'file_size_in_bytes' => $this->file_size_in_bytes,
        'processing_started_at' => $this->processing_started_at,
        'processing_completed_at' => $this->processing_completed_at,
        'uploaded_by' => $this->uploaded_by,
        'uploaded_at' => $this->uploaded_at,
        
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->upload_details instanceof UploadDetail){
            $data['upload_details'] = $this->upload_details->toArray();
        }
        

        
        return $data;
    }
}
?>