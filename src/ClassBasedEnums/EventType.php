<?php

namespace Chargebee\ClassBasedEnums;

final class EventType { 
    const COUPON_CREATED = "coupon_created";
    const COUPON_UPDATED = "coupon_updated";
    const COUPON_DELETED = "coupon_deleted";
    const COUPON_SET_CREATED = "coupon_set_created";
    const COUPON_SET_UPDATED = "coupon_set_updated";
    const COUPON_SET_DELETED = "coupon_set_deleted";
    const COUPON_CODES_ADDED = "coupon_codes_added";
    const COUPON_CODES_DELETED = "coupon_codes_deleted";
    const COUPON_CODES_UPDATED = "coupon_codes_updated";
    const CUSTOMER_CREATED = "customer_created";
    const CUSTOMER_CHANGED = "customer_changed";
    const CUSTOMER_DELETED = "customer_deleted";
    const CUSTOMER_MOVED_OUT = "customer_moved_out";
    const CUSTOMER_MOVED_IN = "customer_moved_in";
    const PROMOTIONAL_CREDITS_ADDED = "promotional_credits_added";
    const PROMOTIONAL_CREDITS_DEDUCTED = "promotional_credits_deducted";
    const SUBSCRIPTION_CREATED = "subscription_created";
    const SUBSCRIPTION_CREATED_WITH_BACKDATING = "subscription_created_with_backdating";
    const SUBSCRIPTION_STARTED = "subscription_started";
    const SUBSCRIPTION_TRIAL_END_REMINDER = "subscription_trial_end_reminder";
    const SUBSCRIPTION_ACTIVATED = "subscription_activated";
    const SUBSCRIPTION_ACTIVATED_WITH_BACKDATING = "subscription_activated_with_backdating";
    const SUBSCRIPTION_CHANGED = "subscription_changed";
    const SUBSCRIPTION_TRIAL_EXTENDED = "subscription_trial_extended";
    const MRR_UPDATED = "mrr_updated";
    const SUBSCRIPTION_CHANGED_WITH_BACKDATING = "subscription_changed_with_backdating";
    const SUBSCRIPTION_CANCELLATION_SCHEDULED = "subscription_cancellation_scheduled";
    const SUBSCRIPTION_CANCELLATION_REMINDER = "subscription_cancellation_reminder";
    const SUBSCRIPTION_CANCELLED = "subscription_cancelled";
    const SUBSCRIPTION_CANCELED_WITH_BACKDATING = "subscription_canceled_with_backdating";
    const SUBSCRIPTION_REACTIVATED = "subscription_reactivated";
    const SUBSCRIPTION_REACTIVATED_WITH_BACKDATING = "subscription_reactivated_with_backdating";
    const SUBSCRIPTION_RENEWED = "subscription_renewed";
    const SUBSCRIPTION_ITEMS_RENEWED = "subscription_items_renewed";
    const SUBSCRIPTION_SCHEDULED_CANCELLATION_REMOVED = "subscription_scheduled_cancellation_removed";
    const SUBSCRIPTION_CHANGES_SCHEDULED = "subscription_changes_scheduled";
    const SUBSCRIPTION_SCHEDULED_CHANGES_REMOVED = "subscription_scheduled_changes_removed";
    const SUBSCRIPTION_SHIPPING_ADDRESS_UPDATED = "subscription_shipping_address_updated";
    const SUBSCRIPTION_DELETED = "subscription_deleted";
    const SUBSCRIPTION_PAUSED = "subscription_paused";
    const SUBSCRIPTION_PAUSE_SCHEDULED = "subscription_pause_scheduled";
    const SUBSCRIPTION_SCHEDULED_PAUSE_REMOVED = "subscription_scheduled_pause_removed";
    const SUBSCRIPTION_RESUMED = "subscription_resumed";
    const SUBSCRIPTION_RESUMPTION_SCHEDULED = "subscription_resumption_scheduled";
    const SUBSCRIPTION_SCHEDULED_RESUMPTION_REMOVED = "subscription_scheduled_resumption_removed";
    const SUBSCRIPTION_ADVANCE_INVOICE_SCHEDULE_ADDED = "subscription_advance_invoice_schedule_added";
    const SUBSCRIPTION_ADVANCE_INVOICE_SCHEDULE_UPDATED = "subscription_advance_invoice_schedule_updated";
    const SUBSCRIPTION_ADVANCE_INVOICE_SCHEDULE_REMOVED = "subscription_advance_invoice_schedule_removed";
    const PENDING_INVOICE_CREATED = "pending_invoice_created";
    const PENDING_INVOICE_UPDATED = "pending_invoice_updated";
    const INVOICE_GENERATED = "invoice_generated";
    const INVOICE_GENERATED_WITH_BACKDATING = "invoice_generated_with_backdating";
    const INVOICE_UPDATED = "invoice_updated";
    const INVOICE_DELETED = "invoice_deleted";
    const CREDIT_NOTE_CREATED = "credit_note_created";
    const CREDIT_NOTE_CREATED_WITH_BACKDATING = "credit_note_created_with_backdating";
    const CREDIT_NOTE_UPDATED = "credit_note_updated";
    const CREDIT_NOTE_DELETED = "credit_note_deleted";
    const PAYMENT_SCHEDULES_CREATED = "payment_schedules_created";
    const PAYMENT_SCHEDULES_UPDATED = "payment_schedules_updated";
    const PAYMENT_SCHEDULE_SCHEME_CREATED = "payment_schedule_scheme_created";
    const PAYMENT_SCHEDULE_SCHEME_DELETED = "payment_schedule_scheme_deleted";
    const SUBSCRIPTION_RENEWAL_REMINDER = "subscription_renewal_reminder";
    const ADD_USAGES_REMINDER = "add_usages_reminder";
    const TRANSACTION_CREATED = "transaction_created";
    const TRANSACTION_UPDATED = "transaction_updated";
    const TRANSACTION_DELETED = "transaction_deleted";
    const PAYMENT_SUCCEEDED = "payment_succeeded";
    const PAYMENT_FAILED = "payment_failed";
    const PAYMENT_REFUNDED = "payment_refunded";
    const PAYMENT_INITIATED = "payment_initiated";
    const REFUND_INITIATED = "refund_initiated";
    const AUTHORIZATION_SUCCEEDED = "authorization_succeeded";
    const AUTHORIZATION_VOIDED = "authorization_voided";
    const CARD_ADDED = "card_added";
    const CARD_UPDATED = "card_updated";
    const CARD_EXPIRY_REMINDER = "card_expiry_reminder";
    const CARD_EXPIRED = "card_expired";
    const CARD_DELETED = "card_deleted";
    const PAYMENT_SOURCE_ADDED = "payment_source_added";
    const PAYMENT_SOURCE_UPDATED = "payment_source_updated";
    const PAYMENT_SOURCE_DELETED = "payment_source_deleted";
    const PAYMENT_SOURCE_EXPIRING = "payment_source_expiring";
    const PAYMENT_SOURCE_EXPIRED = "payment_source_expired";
    const PAYMENT_SOURCE_LOCALLY_DELETED = "payment_source_locally_deleted";
    const VIRTUAL_BANK_ACCOUNT_ADDED = "virtual_bank_account_added";
    const VIRTUAL_BANK_ACCOUNT_UPDATED = "virtual_bank_account_updated";
    const VIRTUAL_BANK_ACCOUNT_DELETED = "virtual_bank_account_deleted";
    const TOKEN_CREATED = "token_created";
    const TOKEN_CONSUMED = "token_consumed";
    const TOKEN_EXPIRED = "token_expired";
    const UNBILLED_CHARGES_CREATED = "unbilled_charges_created";
    const UNBILLED_CHARGES_VOIDED = "unbilled_charges_voided";
    const UNBILLED_CHARGES_DELETED = "unbilled_charges_deleted";
    const UNBILLED_CHARGES_INVOICED = "unbilled_charges_invoiced";
    const ORDER_CREATED = "order_created";
    const ORDER_UPDATED = "order_updated";
    const ORDER_CANCELLED = "order_cancelled";
    const ORDER_DELIVERED = "order_delivered";
    const ORDER_RETURNED = "order_returned";
    const ORDER_READY_TO_PROCESS = "order_ready_to_process";
    const ORDER_READY_TO_SHIP = "order_ready_to_ship";
    const ORDER_DELETED = "order_deleted";
    const ORDER_RESENT = "order_resent";
    const QUOTE_CREATED = "quote_created";
    const QUOTE_UPDATED = "quote_updated";
    const QUOTE_DELETED = "quote_deleted";
    const TAX_WITHHELD_RECORDED = "tax_withheld_recorded";
    const TAX_WITHHELD_DELETED = "tax_withheld_deleted";
    const TAX_WITHHELD_REFUNDED = "tax_withheld_refunded";
    const GIFT_SCHEDULED = "gift_scheduled";
    const GIFT_UNCLAIMED = "gift_unclaimed";
    const GIFT_CLAIMED = "gift_claimed";
    const GIFT_EXPIRED = "gift_expired";
    const GIFT_CANCELLED = "gift_cancelled";
    const GIFT_UPDATED = "gift_updated";
    const HIERARCHY_CREATED = "hierarchy_created";
    const HIERARCHY_DELETED = "hierarchy_deleted";
    const PAYMENT_INTENT_CREATED = "payment_intent_created";
    const PAYMENT_INTENT_UPDATED = "payment_intent_updated";
    const CONTRACT_TERM_CREATED = "contract_term_created";
    const CONTRACT_TERM_RENEWED = "contract_term_renewed";
    const CONTRACT_TERM_TERMINATED = "contract_term_terminated";
    const CONTRACT_TERM_COMPLETED = "contract_term_completed";
    const CONTRACT_TERM_CANCELLED = "contract_term_cancelled";
    const ITEM_FAMILY_CREATED = "item_family_created";
    const ITEM_FAMILY_UPDATED = "item_family_updated";
    const ITEM_FAMILY_DELETED = "item_family_deleted";
    const ITEM_CREATED = "item_created";
    const ITEM_UPDATED = "item_updated";
    const ITEM_DELETED = "item_deleted";
    const ITEM_PRICE_CREATED = "item_price_created";
    const ITEM_PRICE_UPDATED = "item_price_updated";
    const ITEM_PRICE_DELETED = "item_price_deleted";
    const ATTACHED_ITEM_CREATED = "attached_item_created";
    const ATTACHED_ITEM_UPDATED = "attached_item_updated";
    const ATTACHED_ITEM_DELETED = "attached_item_deleted";
    const DIFFERENTIAL_PRICE_CREATED = "differential_price_created";
    const DIFFERENTIAL_PRICE_UPDATED = "differential_price_updated";
    const DIFFERENTIAL_PRICE_DELETED = "differential_price_deleted";
    const FEATURE_CREATED = "feature_created";
    const FEATURE_UPDATED = "feature_updated";
    const FEATURE_DELETED = "feature_deleted";
    const FEATURE_ACTIVATED = "feature_activated";
    const FEATURE_REACTIVATED = "feature_reactivated";
    const FEATURE_ARCHIVED = "feature_archived";
    const ITEM_ENTITLEMENTS_UPDATED = "item_entitlements_updated";
    const ENTITLEMENT_OVERRIDES_UPDATED = "entitlement_overrides_updated";
    const ENTITLEMENT_OVERRIDES_REMOVED = "entitlement_overrides_removed";
    const ITEM_ENTITLEMENTS_REMOVED = "item_entitlements_removed";
    const ENTITLEMENT_OVERRIDES_AUTO_REMOVED = "entitlement_overrides_auto_removed";
    const SUBSCRIPTION_ENTITLEMENTS_CREATED = "subscription_entitlements_created";
    const SUBSCRIPTION_ENTITLEMENTS_UPDATED = "subscription_entitlements_updated";
    const BUSINESS_ENTITY_CREATED = "business_entity_created";
    const BUSINESS_ENTITY_UPDATED = "business_entity_updated";
    const BUSINESS_ENTITY_DELETED = "business_entity_deleted";
    const CUSTOMER_BUSINESS_ENTITY_CHANGED = "customer_business_entity_changed";
    const SUBSCRIPTION_BUSINESS_ENTITY_CHANGED = "subscription_business_entity_changed";
    const PURCHASE_CREATED = "purchase_created";
    const VOUCHER_CREATED = "voucher_created";
    const VOUCHER_EXPIRED = "voucher_expired";
    const VOUCHER_CREATE_FAILED = "voucher_create_failed";
    const ITEM_PRICE_ENTITLEMENTS_UPDATED = "item_price_entitlements_updated";
    const ITEM_PRICE_ENTITLEMENTS_REMOVED = "item_price_entitlements_removed";
    const SUBSCRIPTION_RAMP_CREATED = "subscription_ramp_created";
    const SUBSCRIPTION_RAMP_DELETED = "subscription_ramp_deleted";
    const SUBSCRIPTION_RAMP_APPLIED = "subscription_ramp_applied";
    const SUBSCRIPTION_RAMP_DRAFTED = "subscription_ramp_drafted";
    const SUBSCRIPTION_RAMP_UPDATED = "subscription_ramp_updated";
    const PRICE_VARIANT_CREATED = "price_variant_created";
    const PRICE_VARIANT_UPDATED = "price_variant_updated";
    const PRICE_VARIANT_DELETED = "price_variant_deleted";
    const CUSTOMER_ENTITLEMENTS_UPDATED = "customer_entitlements_updated";
    const SUBSCRIPTION_MOVED_IN = "subscription_moved_in";
    const SUBSCRIPTION_MOVED_OUT = "subscription_moved_out";
    const SUBSCRIPTION_MOVEMENT_FAILED = "subscription_movement_failed";
    const OMNICHANNEL_SUBSCRIPTION_CREATED = "omnichannel_subscription_created";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_RENEWED = "omnichannel_subscription_item_renewed";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_DOWNGRADED = "omnichannel_subscription_item_downgraded";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_EXPIRED = "omnichannel_subscription_item_expired";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_CANCELLATION_SCHEDULED = "omnichannel_subscription_item_cancellation_scheduled";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_CANCELLATION_REMOVED = "omnichannel_subscription_item_scheduled_cancellation_removed";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_RESUBSCRIBED = "omnichannel_subscription_item_resubscribed";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_UPGRADED = "omnichannel_subscription_item_upgraded";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_CANCELLED = "omnichannel_subscription_item_cancelled";
    const OMNICHANNEL_SUBSCRIPTION_IMPORTED = "omnichannel_subscription_imported";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_GRACE_PERIOD_STARTED = "omnichannel_subscription_item_grace_period_started";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_GRACE_PERIOD_EXPIRED = "omnichannel_subscription_item_grace_period_expired";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_DUNNING_STARTED = "omnichannel_subscription_item_dunning_started";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_DUNNING_EXPIRED = "omnichannel_subscription_item_dunning_expired";
    const RULE_CREATED = "rule_created";
    const RULE_UPDATED = "rule_updated";
    const RULE_DELETED = "rule_deleted";
    const RECORD_PURCHASE_FAILED = "record_purchase_failed";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_CHANGE_SCHEDULED = "omnichannel_subscription_item_change_scheduled";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_CHANGE_REMOVED = "omnichannel_subscription_item_scheduled_change_removed";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_REACTIVATED = "omnichannel_subscription_item_reactivated";
    const SALES_ORDER_CREATED = "sales_order_created";
    const SALES_ORDER_UPDATED = "sales_order_updated";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_CHANGED = "omnichannel_subscription_item_changed";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_PAUSED = "omnichannel_subscription_item_paused";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_RESUMED = "omnichannel_subscription_item_resumed";
    const PLAN_CREATED = "plan_created";
    const PLAN_UPDATED = "plan_updated";
    const PLAN_DELETED = "plan_deleted";
    const ADDON_CREATED = "addon_created";
    const ADDON_UPDATED = "addon_updated";
    const ADDON_DELETED = "addon_deleted";
    /*
    * @depcreated
    */
    const netd_payment_due_reminder = "netd_payment_due_reminder";
    /*
    * @depcreated
    */
    const product_created = "product_created";
    /*
    * @depcreated
    */
    const product_updated = "product_updated";
    /*
    * @depcreated
    */
    const product_deleted = "product_deleted";
    /*
    * @depcreated
    */
    const variant_created = "variant_created";
    /*
    * @depcreated
    */
    const variant_updated = "variant_updated";
    /*
    * @depcreated
    */
    const variant_deleted = "variant_deleted";
    /*
    * @depcreated
    */
    const omnichannel_subscription_item_downgrade_scheduled = "omnichannel_subscription_item_downgrade_scheduled";
    /*
    * @depcreated
    */
    const omnichannel_subscription_item_scheduled_downgrade_removed = "omnichannel_subscription_item_scheduled_downgrade_removed";
    const UNKNOWN = "unknown";

    private static array $choices = [ "coupon_created","coupon_updated","coupon_deleted","coupon_set_created","coupon_set_updated","coupon_set_deleted","coupon_codes_added","coupon_codes_deleted","coupon_codes_updated","customer_created","customer_changed","customer_deleted","customer_moved_out","customer_moved_in","promotional_credits_added","promotional_credits_deducted","subscription_created","subscription_created_with_backdating","subscription_started","subscription_trial_end_reminder","subscription_activated","subscription_activated_with_backdating","subscription_changed","subscription_trial_extended","mrr_updated","subscription_changed_with_backdating","subscription_cancellation_scheduled","subscription_cancellation_reminder","subscription_cancelled","subscription_canceled_with_backdating","subscription_reactivated","subscription_reactivated_with_backdating","subscription_renewed","subscription_items_renewed","subscription_scheduled_cancellation_removed","subscription_changes_scheduled","subscription_scheduled_changes_removed","subscription_shipping_address_updated","subscription_deleted","subscription_paused","subscription_pause_scheduled","subscription_scheduled_pause_removed","subscription_resumed","subscription_resumption_scheduled","subscription_scheduled_resumption_removed","subscription_advance_invoice_schedule_added","subscription_advance_invoice_schedule_updated","subscription_advance_invoice_schedule_removed","pending_invoice_created","pending_invoice_updated","invoice_generated","invoice_generated_with_backdating","invoice_updated","invoice_deleted","credit_note_created","credit_note_created_with_backdating","credit_note_updated","credit_note_deleted","payment_schedules_created","payment_schedules_updated","payment_schedule_scheme_created","payment_schedule_scheme_deleted","subscription_renewal_reminder","add_usages_reminder","transaction_created","transaction_updated","transaction_deleted","payment_succeeded","payment_failed","payment_refunded","payment_initiated","refund_initiated","authorization_succeeded","authorization_voided","card_added","card_updated","card_expiry_reminder","card_expired","card_deleted","payment_source_added","payment_source_updated","payment_source_deleted","payment_source_expiring","payment_source_expired","payment_source_locally_deleted","virtual_bank_account_added","virtual_bank_account_updated","virtual_bank_account_deleted","token_created","token_consumed","token_expired","unbilled_charges_created","unbilled_charges_voided","unbilled_charges_deleted","unbilled_charges_invoiced","order_created","order_updated","order_cancelled","order_delivered","order_returned","order_ready_to_process","order_ready_to_ship","order_deleted","order_resent","quote_created","quote_updated","quote_deleted","tax_withheld_recorded","tax_withheld_deleted","tax_withheld_refunded","gift_scheduled","gift_unclaimed","gift_claimed","gift_expired","gift_cancelled","gift_updated","hierarchy_created","hierarchy_deleted","payment_intent_created","payment_intent_updated","contract_term_created","contract_term_renewed","contract_term_terminated","contract_term_completed","contract_term_cancelled","item_family_created","item_family_updated","item_family_deleted","item_created","item_updated","item_deleted","item_price_created","item_price_updated","item_price_deleted","attached_item_created","attached_item_updated","attached_item_deleted","differential_price_created","differential_price_updated","differential_price_deleted","feature_created","feature_updated","feature_deleted","feature_activated","feature_reactivated","feature_archived","item_entitlements_updated","entitlement_overrides_updated","entitlement_overrides_removed","item_entitlements_removed","entitlement_overrides_auto_removed","subscription_entitlements_created","subscription_entitlements_updated","business_entity_created","business_entity_updated","business_entity_deleted","customer_business_entity_changed","subscription_business_entity_changed","purchase_created","voucher_created","voucher_expired","voucher_create_failed","item_price_entitlements_updated","item_price_entitlements_removed","subscription_ramp_created","subscription_ramp_deleted","subscription_ramp_applied","subscription_ramp_drafted","subscription_ramp_updated","price_variant_created","price_variant_updated","price_variant_deleted","customer_entitlements_updated","subscription_moved_in","subscription_moved_out","subscription_movement_failed","omnichannel_subscription_created","omnichannel_subscription_item_renewed","omnichannel_subscription_item_downgraded","omnichannel_subscription_item_expired","omnichannel_subscription_item_cancellation_scheduled","omnichannel_subscription_item_scheduled_cancellation_removed","omnichannel_subscription_item_resubscribed","omnichannel_subscription_item_upgraded","omnichannel_subscription_item_cancelled","omnichannel_subscription_imported","omnichannel_subscription_item_grace_period_started","omnichannel_subscription_item_grace_period_expired","omnichannel_subscription_item_dunning_started","omnichannel_subscription_item_dunning_expired","rule_created","rule_updated","rule_deleted","record_purchase_failed","omnichannel_subscription_item_change_scheduled","omnichannel_subscription_item_scheduled_change_removed","omnichannel_subscription_item_reactivated","sales_order_created","sales_order_updated","omnichannel_subscription_item_changed","omnichannel_subscription_item_paused","omnichannel_subscription_item_resumed","plan_created","plan_updated","plan_deleted","addon_created","addon_updated","addon_deleted", ];
    public final string $value;

    public static function tryFromValue(string $key): self
    {
        $instance = new self();
        $instance->value = self::isValidChoice($key) ? $key : self::UNKNOWN;

        return $instance;
    }
    public function __toString(): string
    {
        return $this->value;
    }
    private static function isValidChoice(string $key): bool
    {
        return in_array($key, self::$choices);
    }
}
?>
