<?php

namespace Chargebee\Responses\CommentResponse;
use Chargebee\Resources\Comment\Comment;

use Chargebee\ValueObjects\ResponseBase;

class DeleteCommentResponse extends ResponseBase { 
    /**
    *
    * @var Comment $comment
    */
    public Comment $comment;
    

    private function __construct(
        Comment $comment,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->comment = $comment;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Comment::from($resourceAttributes['comment']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'comment' => $this->comment->toArray(),
        ]);
        

        return $data;
    }
}
?>