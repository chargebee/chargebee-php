<?php
namespace Chargebee\Responses\AddonResponse;

use Chargebee\Resources\Addon\Addon;

class ListAddonResponseListObject
{ 
    public Addon $addon;
    public function __construct(
        Addon $addon,
    ) { 
        $this->addon = $addon;
    }
}
