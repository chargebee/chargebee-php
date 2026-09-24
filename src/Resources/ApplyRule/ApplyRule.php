<?php

namespace Chargebee\Resources\ApplyRule;

class ApplyRule  { 
    /**
    *
    * @var ?bool $evaluate
    */
    public ?bool $evaluate;
    
    /**
    *
    * @var ?string $rule_id
    */
    public ?string $rule_id;
    
    /**
    *
    * @var ?string $ruleset_id
    */
    public ?string $ruleset_id;
    
    /**
    *
    * @var ?bool $skip_failed_rules
    */
    public ?bool $skip_failed_rules;
    
    /**
    *
    * @var mixed $structured_expression
    */
    public mixed $structured_expression;
    
    /**
    *
    * @var mixed $context
    */
    public mixed $context;
    
    /**
    *
    * @var ?array<Rule> $rules
    */
    public ?array $rules;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "evaluate" , "rule_id" , "ruleset_id" , "skip_failed_rules" , "structured_expression" , "context" , "rules"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?bool $evaluate,
        ?string $rule_id,
        ?string $ruleset_id,
        ?bool $skip_failed_rules,
        mixed $structured_expression,
        mixed $context,
        ?array $rules,
    )
    { 
        $this->evaluate = $evaluate;
        $this->rule_id = $rule_id;
        $this->ruleset_id = $ruleset_id;
        $this->skip_failed_rules = $skip_failed_rules;
        $this->structured_expression = $structured_expression;
        $this->context = $context;
        $this->rules = $rules;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $rules = array_map(fn (array $result): Rule =>  Rule::from(
            $result
        ), $resourceAttributes['rules'] ?? []);
        
        $returnData = new self( $resourceAttributes['evaluate'] ?? null,
        $resourceAttributes['rule_id'] ?? null,
        $resourceAttributes['ruleset_id'] ?? null,
        $resourceAttributes['skip_failed_rules'] ?? null,
        $resourceAttributes['structured_expression'] ?? null,
        $resourceAttributes['context'] ?? null,
        $rules,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['evaluate' => $this->evaluate,
        'rule_id' => $this->rule_id,
        'ruleset_id' => $this->ruleset_id,
        'skip_failed_rules' => $this->skip_failed_rules,
        'structured_expression' => $this->structured_expression,
        'context' => $this->context,
        
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->rules !== []){
            $data['rules'] = array_map(
                fn (Rule $rules): array => $rules->toArray(),
                $this->rules
            );
        }

        
        return $data;
    }
}
?>