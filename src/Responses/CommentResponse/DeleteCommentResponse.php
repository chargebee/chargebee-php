<?php

namespace Chargebee\Responses\CommentResponse;
use Chargebee\Resources\Comment\Comment;

use Chargebee\ValueObjects\ResponseBase;

class DeleteCommentResponse extends ResponseBase { 
    /**
    *
    * @var ?Comment $comment
    */
    public ?Comment $comment;
    

    private function __construct(
        ?Comment $comment,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->comment = $comment;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['comment']) ? Comment::from($resourceAttributes['comment']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->comment instanceof Comment){
            $data['comment'] = $this->comment->toArray();
        } 

        return $data;
    }
}
?>