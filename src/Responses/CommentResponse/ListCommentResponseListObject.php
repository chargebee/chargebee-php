<?php
namespace Chargebee\Responses\CommentResponse;

use Chargebee\Resources\Comment\Comment;

class ListCommentResponseListObject
{ 
    public Comment $comment;
    public function __construct(
        Comment $comment,
    ) { 
        $this->comment = $comment;
    }
}
