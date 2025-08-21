<?php

namespace Chargebee\Enums;

enum EventType : string { 
    case COUPON_CREATED = "coupon_created";
    case COUPON_UPDATED = "coupon_updated";
    case COUPON_DELETED = "coupon_deleted";
    case COUPON_SET_CREATED = "coupon_set_created";
    case COUPON_SET_UPDATED = "coupon_set_updated";
    case COUPON_SET_DELETED = "coupon_set_deleted";
    case COUPON_CODES_ADDED = "coupon_codes_added";
    case COUPON_CODES_DELETED = "coupon_codes_deleted";
    case COUPON_CODES_UPDATED = "coupon_codes_updated";
    case CUSTOMER_CREATED = "customer_created";
    case CUSTOMER_CHANGED = "customer_changed";
    case CUSTOMER_DELETED = "customer_deleted";
    case CUSTOMER_MOVED_OUT = "customer_moved_out";
    case CUSTOMER_MOVED_IN = "customer_moved_in";
    case PROMOTIONAL_CREDITS_ADDED = "promotional_credits_added";
    case PROMOTIONAL_CREDITS_DEDUCTED = "promotional_credits_deducted";
    case SUBSCRIPTION_CREATED = "subscription_created";
    case SUBSCRIPTION_CREATED_WITH_BACKDATING = "subscription_created_with_backdating";
    case SUBSCRIPTION_STARTED = "subscription_started";
    case SUBSCRIPTION_TRIAL_END_REMINDER = "subscription_trial_end_reminder";
    case SUBSCRIPTION_ACTIVATED = "subscription_activated";
    case SUBSCRIPTION_ACTIVATED_WITH_BACKDATING = "subscription_activated_with_backdating";
    case SUBSCRIPTION_CHANGED = "subscription_changed";
    case SUBSCRIPTION_TRIAL_EXTENDED = "subscription_trial_extended";
    case MRR_UPDATED = "mrr_updated";
    case SUBSCRIPTION_CHANGED_WITH_BACKDATING = "subscription_changed_with_backdating";
    case SUBSCRIPTION_CANCELLATION_SCHEDULED = "subscription_cancellation_scheduled";
    case SUBSCRIPTION_CANCELLATION_REMINDER = "subscription_cancellation_reminder";
    case SUBSCRIPTION_CANCELLED = "subscription_cancelled";
    case SUBSCRIPTION_CANCELED_WITH_BACKDATING = "subscription_canceled_with_backdating";
    case SUBSCRIPTION_REACTIVATED = "subscription_reactivated";
    case SUBSCRIPTION_REACTIVATED_WITH_BACKDATING = "subscription_reactivated_with_backdating";
    case SUBSCRIPTION_RENEWED = "subscription_renewed";
    case SUBSCRIPTION_ITEMS_RENEWED = "subscription_items_renewed";
    case SUBSCRIPTION_SCHEDULED_CANCELLATION_REMOVED = "subscription_scheduled_cancellation_removed";
    case SUBSCRIPTION_CHANGES_SCHEDULED = "subscription_changes_scheduled";
    case SUBSCRIPTION_SCHEDULED_CHANGES_REMOVED = "subscription_scheduled_changes_removed";
    case SUBSCRIPTION_SHIPPING_ADDRESS_UPDATED = "subscription_shipping_address_updated";
    case SUBSCRIPTION_DELETED = "subscription_deleted";
    case SUBSCRIPTION_PAUSED = "subscription_paused";
    case SUBSCRIPTION_PAUSE_SCHEDULED = "subscription_pause_scheduled";
    case SUBSCRIPTION_SCHEDULED_PAUSE_REMOVED = "subscription_scheduled_pause_removed";
    case SUBSCRIPTION_RESUMED = "subscription_resumed";
    case SUBSCRIPTION_RESUMPTION_SCHEDULED = "subscription_resumption_scheduled";
    case SUBSCRIPTION_SCHEDULED_RESUMPTION_REMOVED = "subscription_scheduled_resumption_removed";
    case SUBSCRIPTION_ADVANCE_INVOICE_SCHEDULE_ADDED = "subscription_advance_invoice_schedule_added";
    case SUBSCRIPTION_ADVANCE_INVOICE_SCHEDULE_UPDATED = "subscription_advance_invoice_schedule_updated";
    case SUBSCRIPTION_ADVANCE_INVOICE_SCHEDULE_REMOVED = "subscription_advance_invoice_schedule_removed";
    case PENDING_INVOICE_CREATED = "pending_invoice_created";
    case PENDING_INVOICE_UPDATED = "pending_invoice_updated";
    case INVOICE_GENERATED = "invoice_generated";
    case INVOICE_GENERATED_WITH_BACKDATING = "invoice_generated_with_backdating";
    case INVOICE_UPDATED = "invoice_updated";
    case INVOICE_DELETED = "invoice_deleted";
    case CREDIT_NOTE_CREATED = "credit_note_created";
    case CREDIT_NOTE_CREATED_WITH_BACKDATING = "credit_note_created_with_backdating";
    case CREDIT_NOTE_UPDATED = "credit_note_updated";
    case CREDIT_NOTE_DELETED = "credit_note_deleted";
    case PAYMENT_SCHEDULES_CREATED = "payment_schedules_created";
    case PAYMENT_SCHEDULES_UPDATED = "payment_schedules_updated";
    case PAYMENT_SCHEDULE_SCHEME_CREATED = "payment_schedule_scheme_created";
    case PAYMENT_SCHEDULE_SCHEME_DELETED = "payment_schedule_scheme_deleted";
    case SUBSCRIPTION_RENEWAL_REMINDER = "subscription_renewal_reminder";
    case ADD_USAGES_REMINDER = "add_usages_reminder";
    case TRANSACTION_CREATED = "transaction_created";
    case TRANSACTION_UPDATED = "transaction_updated";
    case TRANSACTION_DELETED = "transaction_deleted";
    case PAYMENT_SUCCEEDED = "payment_succeeded";
    case PAYMENT_FAILED = "payment_failed";
    case PAYMENT_REFUNDED = "payment_refunded";
    case PAYMENT_INITIATED = "payment_initiated";
    case REFUND_INITIATED = "refund_initiated";
    case AUTHORIZATION_SUCCEEDED = "authorization_succeeded";
    case AUTHORIZATION_VOIDED = "authorization_voided";
    case CARD_ADDED = "card_added";
    case CARD_UPDATED = "card_updated";
    case CARD_EXPIRY_REMINDER = "card_expiry_reminder";
    case CARD_EXPIRED = "card_expired";
    case CARD_DELETED = "card_deleted";
    case PAYMENT_SOURCE_ADDED = "payment_source_added";
    case PAYMENT_SOURCE_UPDATED = "payment_source_updated";
    case PAYMENT_SOURCE_DELETED = "payment_source_deleted";
    case PAYMENT_SOURCE_EXPIRING = "payment_source_expiring";
    case PAYMENT_SOURCE_EXPIRED = "payment_source_expired";
    case PAYMENT_SOURCE_LOCALLY_DELETED = "payment_source_locally_deleted";
    case VIRTUAL_BANK_ACCOUNT_ADDED = "virtual_bank_account_added";
    case VIRTUAL_BANK_ACCOUNT_UPDATED = "virtual_bank_account_updated";
    case VIRTUAL_BANK_ACCOUNT_DELETED = "virtual_bank_account_deleted";
    case TOKEN_CREATED = "token_created";
    case TOKEN_CONSUMED = "token_consumed";
    case TOKEN_EXPIRED = "token_expired";
    case UNBILLED_CHARGES_CREATED = "unbilled_charges_created";
    case UNBILLED_CHARGES_VOIDED = "unbilled_charges_voided";
    case UNBILLED_CHARGES_DELETED = "unbilled_charges_deleted";
    case UNBILLED_CHARGES_INVOICED = "unbilled_charges_invoiced";
    case ORDER_CREATED = "order_created";
    case ORDER_UPDATED = "order_updated";
    case ORDER_CANCELLED = "order_cancelled";
    case ORDER_DELIVERED = "order_delivered";
    case ORDER_RETURNED = "order_returned";
    case ORDER_READY_TO_PROCESS = "order_ready_to_process";
    case ORDER_READY_TO_SHIP = "order_ready_to_ship";
    case ORDER_DELETED = "order_deleted";
    case ORDER_RESENT = "order_resent";
    case QUOTE_CREATED = "quote_created";
    case QUOTE_UPDATED = "quote_updated";
    case QUOTE_DELETED = "quote_deleted";
    case TAX_WITHHELD_RECORDED = "tax_withheld_recorded";
    case TAX_WITHHELD_DELETED = "tax_withheld_deleted";
    case TAX_WITHHELD_REFUNDED = "tax_withheld_refunded";
    case GIFT_SCHEDULED = "gift_scheduled";
    case GIFT_UNCLAIMED = "gift_unclaimed";
    case GIFT_CLAIMED = "gift_claimed";
    case GIFT_EXPIRED = "gift_expired";
    case GIFT_CANCELLED = "gift_cancelled";
    case GIFT_UPDATED = "gift_updated";
    case HIERARCHY_CREATED = "hierarchy_created";
    case HIERARCHY_DELETED = "hierarchy_deleted";
    case PAYMENT_INTENT_CREATED = "payment_intent_created";
    case PAYMENT_INTENT_UPDATED = "payment_intent_updated";
    case CONTRACT_TERM_CREATED = "contract_term_created";
    case CONTRACT_TERM_RENEWED = "contract_term_renewed";
    case CONTRACT_TERM_TERMINATED = "contract_term_terminated";
    case CONTRACT_TERM_COMPLETED = "contract_term_completed";
    case CONTRACT_TERM_CANCELLED = "contract_term_cancelled";
    case ITEM_FAMILY_CREATED = "item_family_created";
    case ITEM_FAMILY_UPDATED = "item_family_updated";
    case ITEM_FAMILY_DELETED = "item_family_deleted";
    case ITEM_CREATED = "item_created";
    case ITEM_UPDATED = "item_updated";
    case ITEM_DELETED = "item_deleted";
    case ITEM_PRICE_CREATED = "item_price_created";
    case ITEM_PRICE_UPDATED = "item_price_updated";
    case ITEM_PRICE_DELETED = "item_price_deleted";
    case ATTACHED_ITEM_CREATED = "attached_item_created";
    case ATTACHED_ITEM_UPDATED = "attached_item_updated";
    case ATTACHED_ITEM_DELETED = "attached_item_deleted";
    case DIFFERENTIAL_PRICE_CREATED = "differential_price_created";
    case DIFFERENTIAL_PRICE_UPDATED = "differential_price_updated";
    case DIFFERENTIAL_PRICE_DELETED = "differential_price_deleted";
    case FEATURE_CREATED = "feature_created";
    case FEATURE_UPDATED = "feature_updated";
    case FEATURE_DELETED = "feature_deleted";
    case FEATURE_ACTIVATED = "feature_activated";
    case FEATURE_REACTIVATED = "feature_reactivated";
    case FEATURE_ARCHIVED = "feature_archived";
    case ITEM_ENTITLEMENTS_UPDATED = "item_entitlements_updated";
    case ENTITLEMENT_OVERRIDES_UPDATED = "entitlement_overrides_updated";
    case ENTITLEMENT_OVERRIDES_REMOVED = "entitlement_overrides_removed";
    case ITEM_ENTITLEMENTS_REMOVED = "item_entitlements_removed";
    case ENTITLEMENT_OVERRIDES_AUTO_REMOVED = "entitlement_overrides_auto_removed";
    case SUBSCRIPTION_ENTITLEMENTS_CREATED = "subscription_entitlements_created";
    case SUBSCRIPTION_ENTITLEMENTS_UPDATED = "subscription_entitlements_updated";
    case BUSINESS_ENTITY_CREATED = "business_entity_created";
    case BUSINESS_ENTITY_UPDATED = "business_entity_updated";
    case BUSINESS_ENTITY_DELETED = "business_entity_deleted";
    case CUSTOMER_BUSINESS_ENTITY_CHANGED = "customer_business_entity_changed";
    case SUBSCRIPTION_BUSINESS_ENTITY_CHANGED = "subscription_business_entity_changed";
    case PURCHASE_CREATED = "purchase_created";
    case VOUCHER_CREATED = "voucher_created";
    case VOUCHER_EXPIRED = "voucher_expired";
    case VOUCHER_CREATE_FAILED = "voucher_create_failed";
    case ITEM_PRICE_ENTITLEMENTS_UPDATED = "item_price_entitlements_updated";
    case ITEM_PRICE_ENTITLEMENTS_REMOVED = "item_price_entitlements_removed";
    case SUBSCRIPTION_RAMP_CREATED = "subscription_ramp_created";
    case SUBSCRIPTION_RAMP_DELETED = "subscription_ramp_deleted";
    case SUBSCRIPTION_RAMP_APPLIED = "subscription_ramp_applied";
    case SUBSCRIPTION_RAMP_DRAFTED = "subscription_ramp_drafted";
    case SUBSCRIPTION_RAMP_UPDATED = "subscription_ramp_updated";
    case PRICE_VARIANT_CREATED = "price_variant_created";
    case PRICE_VARIANT_UPDATED = "price_variant_updated";
    case PRICE_VARIANT_DELETED = "price_variant_deleted";
    case CUSTOMER_ENTITLEMENTS_UPDATED = "customer_entitlements_updated";
    case SUBSCRIPTION_MOVED_IN = "subscription_moved_in";
    case SUBSCRIPTION_MOVED_OUT = "subscription_moved_out";
    case SUBSCRIPTION_MOVEMENT_FAILED = "subscription_movement_failed";
    case OMNICHANNEL_SUBSCRIPTION_CREATED = "omnichannel_subscription_created";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_RENEWED = "omnichannel_subscription_item_renewed";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_DOWNGRADED = "omnichannel_subscription_item_downgraded";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_EXPIRED = "omnichannel_subscription_item_expired";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_CANCELLATION_SCHEDULED = "omnichannel_subscription_item_cancellation_scheduled";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_CANCELLATION_REMOVED = "omnichannel_subscription_item_scheduled_cancellation_removed";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_RESUBSCRIBED = "omnichannel_subscription_item_resubscribed";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_UPGRADED = "omnichannel_subscription_item_upgraded";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_CANCELLED = "omnichannel_subscription_item_cancelled";
    case OMNICHANNEL_SUBSCRIPTION_IMPORTED = "omnichannel_subscription_imported";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_GRACE_PERIOD_STARTED = "omnichannel_subscription_item_grace_period_started";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_GRACE_PERIOD_EXPIRED = "omnichannel_subscription_item_grace_period_expired";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_DUNNING_STARTED = "omnichannel_subscription_item_dunning_started";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_DUNNING_EXPIRED = "omnichannel_subscription_item_dunning_expired";
    case RULE_CREATED = "rule_created";
    case RULE_UPDATED = "rule_updated";
    case RULE_DELETED = "rule_deleted";
    case RECORD_PURCHASE_FAILED = "record_purchase_failed";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_CHANGE_SCHEDULED = "omnichannel_subscription_item_change_scheduled";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_CHANGE_REMOVED = "omnichannel_subscription_item_scheduled_change_removed";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_REACTIVATED = "omnichannel_subscription_item_reactivated";
    case SALES_ORDER_CREATED = "sales_order_created";
    case SALES_ORDER_UPDATED = "sales_order_updated";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_CHANGED = "omnichannel_subscription_item_changed";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_PAUSED = "omnichannel_subscription_item_paused";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_RESUMED = "omnichannel_subscription_item_resumed";
    case OMNICHANNEL_ONE_TIME_ORDER_CREATED = "omnichannel_one_time_order_created";
    case OMNICHANNEL_ONE_TIME_ORDER_ITEM_CANCELLED = "omnichannel_one_time_order_item_cancelled";
    case USAGE_FILE_INGESTED = "usage_file_ingested";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_PAUSE_SCHEDULED = "omnichannel_subscription_item_pause_scheduled";
    case PLAN_CREATED = "plan_created";
    case PLAN_UPDATED = "plan_updated";
    case PLAN_DELETED = "plan_deleted";
    case ADDON_CREATED = "addon_created";
    case ADDON_UPDATED = "addon_updated";
    case ADDON_DELETED = "addon_deleted";
    /*
    * @depcreated
    */
    case NETD_PAYMENT_DUE_REMINDER = "netd_payment_due_reminder";
    /*
    * @depcreated
    */
    case PRODUCT_CREATED = "product_created";
    /*
    * @depcreated
    */
    case PRODUCT_UPDATED = "product_updated";
    /*
    * @depcreated
    */
    case PRODUCT_DELETED = "product_deleted";
    /*
    * @depcreated
    */
    case VARIANT_CREATED = "variant_created";
    /*
    * @depcreated
    */
    case VARIANT_UPDATED = "variant_updated";
    /*
    * @depcreated
    */
    case VARIANT_DELETED = "variant_deleted";
    /*
    * @depcreated
    */
    case OMNICHANNEL_SUBSCRIPTION_ITEM_DOWNGRADE_SCHEDULED = "omnichannel_subscription_item_downgrade_scheduled";
    /*
    * @depcreated
    */
    case OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_DOWNGRADE_REMOVED = "omnichannel_subscription_item_scheduled_downgrade_removed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>