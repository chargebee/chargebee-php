<?php

namespace Chargebee\Responses\CommentResponse;
use Chargebee\Resources\Comment\Comment;

use Chargebee\ValueObjects\ResponseBase;

class ListCommentResponse extends ResponseBase { 
    /**
    *
    * @var array<ListCommentResponseListObject> $list
    */
    public array $list;
    
    /**
    *
    * @var ?string $next_offset
    */
    public ?string $next_offset;
    

    private function __construct(
        array $list,
        ?string $next_offset,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListCommentResponseListObject {
                return new ListCommentResponseListObject(
                    isset($result['comment']) ? Comment::from($result['comment']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
            'next_offset' => $this->next_offset,
        ]);
        return $data;
    }
}


class ListCommentResponseListObject {
    
        public Comment $comment;
    
public function __construct(
    Comment $comment,
){ 
    $this->comment = $comment;

}
}

?>