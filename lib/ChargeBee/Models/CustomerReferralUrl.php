<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class CustomerReferralUrl extends Model
{
    protected $allowed = [
      'external_customer_id',
      'referral_sharing_url',
      'created_at',
      'updated_at',
      'referral_campaign_id',
      'referral_account_id',
      'referral_external_campaign_id',
      'referral_system',
    ];
}
