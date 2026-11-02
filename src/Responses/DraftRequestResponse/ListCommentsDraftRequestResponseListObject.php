<?php
namespace Chargebee\Responses\DraftRequestResponse;

use Chargebee\Resources\Comment\Comment;

class ListCommentsDraftRequestResponseListObject
{ 
    public Comment $comment;
    public function __construct(
        Comment $comment,
    ) { 
        $this->comment = $comment;
    }
}
