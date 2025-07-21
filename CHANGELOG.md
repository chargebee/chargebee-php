### v3.45.0 (2025-07-18) 
* * * 

### New Resources: 
* BillingConfiguration has been added. 
* Brand has been added. 

### New Attributes: 
* has_children has been added to Hierarchy
* coupon_applicability_mappings has been added to QuotedRamp.

### New Endpoint:
* listHierarchyDetail has been added to Customer.

### New Input parameters: 
* change_reason children has been added to Entitlement#CreateRequest.
* entitlements[apply_grandfathering] has been added to Entitlement#CreateRequest.
* replace_primary_payment_source has been added to Purchase#CreateRequest.
* omnichannel_subscription has been added to RecordedPurchase#CreateRequest.
* contract_term has been added to Subscription#RemoveScheduledCancellationRequest.
* contract_term_billing_cycle_on_renewal has been added to Subscription#RemoveScheduledCancellationRequest.

### New Enums: 
* payconiq_by_bancontact has been added to PaymentMethodType.
* solidgate has been added to Gateway.
* solidgate has been added to PaymentMethod.

### v3.44.0 (2025-06-19) 
* * * 

### New Resources 
* QuotedRamp has been added.

### New Attributes
* chargebee_response_schema_type has been added to Configuration.
* linked_item has been added to OmnichannelSubscriptionItem.
* resumes_at has been added to OmnichannelSubscriptionItem.

### Changed Attributes
* percentage changed to is_percentage_pricing in CreditNote.
* percentage changed to is_percentage_pricing in QuoteLineGroup.
* percentage changed to is_percentage_pricing in CreditNoteEstimate.
* percentage changed to is_percentage_pricing in Invoice.
* percentage changed to is_percentage_pricing in InvoiceEstimate.
* percentage changed to is_percentage_pricing in Quote.


### New Input Parameters
* is_percentage_pricing has been added to Item#UpdateRequest.
* line_item[subscription_id] has been added to CreditNote#RetrieveRequest.
* line_item[customer_id] has been added to CreditNote#RetrieveRequest.
* line_item[subscription_id] has been added to Invoice#RetrieveRequest.
* line_item[customer_id] has been added to Invoice#RetrieveRequest.
* billing_override[max_excess_payment_usage] has been added to Estimate#CreateSubItemForCustomerEstimateRequest.
* billing_override[max_refundable_credits_usage] has been added to Estimate#CreateSubItemForCustomerEstimateRequest.
* billing_override[max_excess_payment_usage] has been added to Estimate#UpdateSubscriptionForItemsRequest.
* billing_override[max_refundable_credits_usage] has been added to Estimate#UpdateSubscriptionForItemsRequest.
* billing_start_option has been added to Quote#CreateSubItemsForCustomerQuoteRequest.
* net_term_days has been added to Quote#CreateSubItemsForCustomerQuoteRequest.
* billing_address has been added to Quote#CreateSubItemsForCustomerQuoteRequest.
* subscription_items has been added to Quote#CreateSubItemsForCustomerQuoteRequest.
* discounts has been added to Quote#CreateSubItemsForCustomerQuoteRequest.
* billing_start_option has been added to Quote#EditCreateSubCustomerQuoteForItemsRequest.
* net_term_days has been added to Quote#EditCreateSubCustomerQuoteForItemsRequest.
* billing_address has been added to Quote#EditCreateSubCustomerQuoteForItemsRequest.
* subscription_items has been added to Quote#EditCreateSubCustomerQuoteForItemsRequest.
* discounts has been added to Quote#EditCreateSubCustomerQuoteForItemsRequest.
* net_term_days has been added to Quote#UpdateSubscriptionQuoteForItemsRequest.
* subscription_items has been added to Quote#UpdateSubscriptionQuoteForItemsRequest.
* discount has been added to Quote#UpdateSubscriptionQuoteForItemsRequest.
* coupons has been added to Quote#UpdateSubscriptionQuoteForItemsRequest.
* net_term_days has been added to Quote#EditUpdateSubscriptionQuoteForItemsRequest.
* subscription_items has been added to Quote#EditUpdateSubscriptionQuoteForItemsRequest.
* discounts has been added to Quote#EditUpdateSubscriptionQuoteForItemsRequest.
* coupons has been added to Quote#EditUpdateSubscriptionQuoteForItemsRequest.
* billing_address has been added to Quote#CreateForChargeItemsAndChargesRequest.
* billing_address has been added to Quote#EditForChargeItemsAndChargesRequest.
* sort_by[order] has been added to Subscription#SubscriptionContractTermsForSubscriptionRequest.
* item_tiers has been added to Quote#UpdateSubscriptionQuoteForItemsRequest.
* item_tiers has been added to Quote#EditUpdateSubscriptionQuoteForItemsRequest.
* item_tiers has been added to Quote#CreateSubItemsForCustomerQuoteRequest.
* item_tiers has been added to Quote#EditCreateSubCustomerQuoteForItemsRequest.

### New Endpoints: 
* PauseDunningRequest has been added to Invoice.
* ResumeDunningRequest has been added to Invoice.

### Enum Attributes: 
* BillingPeriodUnitEnum has been added.
* BillingStartOptionEnum has been added.
* OMNICHANNEL_SUBSCRIPTION_ITEM_RESUMED has been added to EventTypeEnum.

### v3.43.0 (2025-05-15)
* * * 

### New Resources
* UsageFile has been added.

### Input Parameter
* discount[apply_on] has been made optional from required in Estimate#CreateSubItemEstimateRequest.
* discount[apply_on] has been made optional from required in Estimate#CreateSubItemForCustomerEstimateRequest.
* discount[apply_on] has been made optional from required in Estimate#UpdateSubscriptionForItemsRequest.
* discount[apply_on] has been made optional from required in HostedPage#CheckoutNewForItemsRequest.
* discount[apply_on] has been made optional from required in HostedPage#CheckoutNewForItemsRequest.
* discount[apply_on] has been made optional from required in HostedPage#CheckoutNewForItemsRequest.
* discount[apply_on] has been made optional from required in HostedPage#CheckoutNewForItemsRequest.
* discount[apply_on] has been made optional from required in PricingPageSession#CheckoutNewForItemsRequest.
* discount[apply_on] has been made optional from required in PricingPageSession#CreateForExistingSubscriptionRequest.
* discount[apply_on] has been made optional from required in Quote#CreateSubItemsForCustomerQuoteRequest.
* discount[apply_on] has been made optional from required in Quote#EditCreateSubCustomerQuoteForItemsRequest.
* discount[apply_on] has been made optional from required in Quote#UpdateSubscriptionQuoteForItemsRequest.
* discount[apply_on] has been made optional from required in Quote#EditUpdateSubscriptionQuoteForItemsRequest.
* discount[apply_on] has been made optional from required in Subscription#CreateWithItemsRequest.
* discount[apply_on] has been made optional from required in Subscription#UpdateForItemsRequest.
* discount[apply_on] has been made optional from required in Subscription#ImportForItemsRequest.
* line_item_addresses[] has been added to  Invoice#ImportInvoiceRequest.
* source has been added to OmnichannelSubscription#OmnichannelSubscriptionListRequest.

### Attributes: 
* swift_code has been made optional from required in VirtualBankAccount.

### Enum Attributes: 
* OMNICHANNEL_SUBSCRIPTION_ITEM_PAUSED has been added to EventTypeEnum.
* PAUSED has been added to OmnichannelSubscriptionItem#StatusEnum.
* MERCHANT_REVOKED has been added to OmnichannelSubscriptionItem#CancellationReasonEnum.

### v3.42.0 (2025-04-23)
* * * 

### New Resources:
* OmnichannelSubscriptionItemScheduledChange has been added. 

### New Attributes:
* pricing_type has been added to DifferentialPrice#Tier.
* package_size has been added to DifferentialPrice#Tier.
* pricing_type has been added to ItemPrice#Tier.
* package_size has been added to ItemPrice#Tier.
* pricing_type has been added to Addon#Tier.
* package_size has been added to Addon#Tier.
* pricing_type has been added to Plan#Tier.
* package_size has been added to Plan#Tier.
* pricing_type has been added to CreditNote#LineItemTier.
* package_size has been added to CreditNote#LineItemTier.
* pricing_type has been added to CreditNoteEstimate#LineItemTier.
* package_size has been added to CreditNoteEstimate#LineItemTier.
* pricing_type has been added to DifferentialPrice#Tier.
* package_size has been added to DifferentialPrice#Tier.
* pricing_type has been added to Invoice#LineItemTier.
* package_size has been added to Invoice#LineItemTier.
* pricing_type has been added to InvoiceEstimate#LineItemTier.
* package_size has been added to InvoiceEstimate#LineItemTier.
* pricing_type has been added to Quote#LineItemTier.
* package_size has been added to Quote#LineItemTier.
* pricing_type has been added to QuotedCharge#LineItemTier.
* package_size has been added to QuotedCharge#LineItemTier.
* pricing_type has been added to QuotedSubscription#LineItemTier.
* package_size has been added to QuotedSubscription#LineItemTier.
* pricing_type has been added to Ramp#ItemTier.
* package_size has been added to Ramp#ItemTier.
* pricing_type has been added to Subscription#ItemTier.
* package_size has been added to Subscription#ItemTier.
* pricing_type has been added to UnbilledCharges#Tier.
* package_size has been added to UnbilledCharges#Tier.
* metered has been added to CreditNote#LineItem.
* metered has been added to CreditNoteEstimate#LineItem.
* metered has been added to Invoice#LineItem.
* metered has been added to Quote#LineItem.
* metered has been added to QuoteLineGroup#LineItem.
* usage_percentage has been changed to percentage in CreditNote#LineItem.
* usage_percentage has been changed to percentage in CreditNoteEstimate#LineItem.
* usage_percentage has been changed to percentage in Invoice#LineItem.
* usage_percentage has been changed to percentage in Quote#LineItem.
* usage_percentage has been changed to percentage in QuoteLineGroup#LineItem.
* line_item_addresses has been added to CreditNote.
* line_item_addresses has been added to Invoices.
* line_item_addresses has been added to InvoiceEstimate.
* has_scheduled_changes has been added on OmnichannelSubscriptionItem.
* item_parent_id_at_source has been added to OmnichannelSubscriptionItem.
* auto_renew_status has been added to OmnichannelSubscriptionItem.
* upcoming_renewal has been added to OmnichannelSubscriptionItem.
* is_percentage_pricing has been added to Item.

### New Action:
* listOmniSubItemScheduleChanges has been added to OmnichannelSubscriptionItem.

### Optional Attribute: 
* price_currency has been made optional from requried in OmnichannelTransaction. 
* price_units has been made optional from requried in OmnichannelTransaction.
* price_nanos has been made optional from requried in OmnichannelTransaction.
* transacted_at has been made optional from requried in OmnichannelTransaction.

### New Input Params:
* item_tiers[pricing_type] has been added to DifferentialPrice#CreateInputParam.
* item_tiers[package_size] has been added to DifferentialPrice#CreateInputParam.
* item_tiers[pricing_type] has been added to ItemPrice#CreateInputParam.
* item_tiers[package_size] has been added to ItemPrice#CreateInputParam.
* tiers[pricing_type] has been added to DifferentialPrice#CreateInputParam.
* tiers[package_size] has been added to DifferentialPrice#CreateInputParam.
* item_tiers[pricing_type] has been added to Estimate#CreateSubItemEstimateRequestInputParam.
* item_tiers[package_size] has been added to Estimate#CreateSubItemEstimateRequestInputParam.
* item_tiers[pricing_type] has been added to Estimate#CreateSubItemForCustomerRequestInputParam.
* item_tiers[package_size] has been added to Estimate#CreateSubItemForCustomerRequestInputParam.
* item_tiers[pricing_type] has been added to Estimate#UpdateSubscriptionForItemsRequestInputParam.
* item_tiers[package_size] has been added to Estimate#UpdateSubscriptionForItemsRequestInputParam.
* item_tiers[pricing_type] has been added to Estimate#CreateInvoiceForItemsRequestInputParam.
* item_tiers[package_size] has been added to Estimate#CreateInvoiceForItemsRequestInputParam.
* item_tiers[pricing_type] has been added to Estimate#CheckoutNewForItemsRequestInputParam.
* item_tiers[package_size] has been added to Estimate#CheckoutNewForItemsRequestInputParam.
* item_tiers[pricing_type] has been added to Estimate#CheckoutOneTimeForItemsRequestInputParam.
* item_tiers[package_size] has been added to Estimate#CheckoutOneTimeForItemsRequestInputParam.
* item_tiers[pricing_type] has been added to Estimate#CheckoutExistingForItemsRequestInputParam.
* item_tiers[package_size] has been added to Estimate#CheckoutExistingForItemsRequestInputParam.
* item_tiers[pricing_type] has been added to Invoice#CreateForChargeItemsAndChargesRequestInputParam.
* item_tiers[package_size] has been added to Invoice#CreateForChargeItemsAndChargesRequestInputParam.
* item_tiers[pricing_type] has been added to Invoice#CreateForChargeItemRequestInputParam.
* item_tiers[package_size] has been added to Invoice#CreateForChargeItemRequestInputParam.
* item_tiers[pricing_type] has been added to Invoice#AddChargeItemRequestInputParam.
* item_tiers[package_size] has been added to Invoice#AddChargeItemRequestInputParam.
* item_tiers[pricing_type] has been added to Quote#CreateSubItemsForCustomerQuoteRequestInputParam.
* item_tiers[package_size] has been added to Quote#CreateSubItemsForCustomerQuoteRequestInputParam.
* item_tiers[pricing_type] has been added to Quote#EditCreateSubCustomerQuoteForItemsRequestInputParam.
* item_tiers[package_size] has been added to Quote#EditCreateSubCustomerQuoteForItemsRequestInputParam.
* item_tiers[pricing_type] has been added to Quote#UpdateSubscriptionQuoteForItemsRequestInputParam.
* item_tiers[package_size] has been added to Quote#UpdateSubscriptionQuoteForItemsRequestInputParam.
* item_tiers[pricing_type] has been added to Quote#EditUpdateSubscriptionQuoteForItemsRequestInputParam.
* item_tiers[package_size] has been added to Quote#EditUpdateSubscriptionQuoteForItemsRequestInputParam.
* item_tiers[pricing_type] has been added to Quote#CreateForChargeItemsAndChargesRequestInputParam.
* item_tiers[package_size] has been added to Quote#CreateForChargeItemsAndChargesRequestInputParam.
* item_tiers[pricing_type] has been added to Quote#EditForChargeItemsAndChargesRequestInputParam.
* item_tiers[package_size] has been added to Quote#EditForChargeItemsAndChargesRequestInputParam.
* item_tiers[pricing_type] has been added to Ramp#CreateForSubscriptionRequestInputParam.
* item_tiers[package_size] has been added to Ramp#CreateForSubscriptionRequestInputParam.
* item_tiers[pricing_type] has been added to Ramp#UpdateRequestInputParam.
* item_tiers[package_size] has been added to Ramp#UpdateRequestInputParam.
* item_tiers[pricing_type] has been added to Subscription#CreateWithItemsRequestInputParam.
* item_tiers[package_size] has been added to Subscription#CreateWithItemsRequestInputParam.
* item_tiers[pricing_type] has been added to Subscription#UpdateForItemsRequestInputParam.
* item_tiers[package_size] has been added to Subscription#UpdateForItemsRequestInputParam.
* item_tiers[pricing_type] has been added to Subscription#ImportForItemsRequestInputParam.
* item_tiers[package_size] has been added to Subscription#ImportForItemsRequestInputParam.
* item_tiers[pricing_type] has been added to UnbilledCharged#CreateRequestInputParam.
* item_tiers[package_size] has been added to UnbilledCharged#CreateRequestInputParam.
* billing_address has been added to Estimate#CreateInvoiceForItemsRequestInputParam.
* google_play_store[purchase_token] has been added to RecordedPurchase#CreateRequestInputParam.
* is_percentage_pricing has been added to Item#CreateRequest.
* include_deleted has been added to PaymentSource#ListRequest.

### New Enums: 
* OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_CHANGE has been added to EntityType#Enum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_CHANGE_SCHEDULED has been added to EventType#Enum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_CHANGE_REMOVED has been added to EventType#Enum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_REACTIVATED has been added to EventType#Enum.
* GOOGLE_PLAY_STORE has been added to OminchannelSubscription#SourceEnum.
* SPECIFIC_DATE has been added to ContractTermCancelOption.
* END_OF_SUBSCRIPTION_BILLING_TERM has been added to ContractTermCancelOption. 
* PAYSTACK has been added to GatewayEnum.
* PricingType Enum has been added.
* JP_MORGAN has been added to GatewayEnum.

### Deprecated Enums: 
* OMNICHANNEL_SUBSCRIPTION_ITEM_DOWNGRADE_SCHEDULED has been deprecated from EntityType#Enum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_DOWNGRADE_REMOVED has been deprecated from EntityType#Enum.
* REFUNDED_DUE_TO_APP_ISSUE has been added to OmnichannelSubscriptionItem#CancellationReasonEnum. 
* REFUNDED_FOR_OTHER_REASON has been added to OmnichannelSubscriptionItem#CancellationReasonEnum.

### v3.41.0 (2025-03-19)
* * *

### New Feature: 
* Added a way to append suffix in User-Agent headers through `ChargeBee::Environment`.

### v3.40.0 (2025-03-06)
* * *

### New Input Params:
* created_at has been added to Invoice#LineItemsImportInputParams.
* PaymentIntent has been added to Purchase#CreateInputParams.

### New Enums:
* SUBSCRIPTION_ENTITLEMENTS_UPDATED has been added to EventType#Enum.

### v3.39.1 (2025-02-19)
* * *

#### Bug Fixes
* Fixed double parsing issue when input is already in JSON format for JSON keys.

### v3.39.0 (2025-02-10)
* * * 

#### New Resources:
* Rule has been added. 
* UsageEvent has been added.

#### New Attribute: 
* deleted has been added to AttachedItem.
* deleted has been added to Coupon.
* deleted has been added to DifferentialPrice.
* deleted has been added to ItemFamily.
* deleted has been added to ItemPrice.
* deleted has been added to Item.
* deleted has been added to PriceVariant.
* tax_application has abeend added to CreditNote#Allocation.
* tax_application has been added to Invoice#AppliedCredit.
* line_item_credit has been added to Invoice.

#### New Input Params:
* exhausted_coupon_ids has been added to Subscription#ImportForItems.

#### New Enums 
* STORE has been added in CreditNote#TypeEnum.
* STORE has been added in CreditNoteEstimate#TypeEnum.
* STORE has been added in Order#TypeEnum.
* TaxApplicationEnum has been added in CreditNote#Application.
* TaxApplicationEnum has been added in Invoice#AppliedCredit.
* RECORDED_PURCHASE has been added in EntityTypeEnum.
* RECORD_PURCHASE_FAILED, has been added in EventTypeEnum.

#### Deleted Input Params
* tax_providers_fields has been removed from Customer#MoveParams. 
* tax_providers_fields has been removed from Customer#MergeParams

#### Deprecated input params. 
* deprecated label in discount_quantity has been removed from Coupon#CreateParams.
* deprecated label in discount_quantity has been removed from Coupon#UpdateParams.
* deprecated label in discount_quantity has been removed from Coupon#CreateForItemsParams.
* deprecated label in discount_quantity has been removed from Coupon#UpdateForItemsParams.

### v3.38.0 (2024-12-19)
* * * 

#### New Resource: 
* Configuration has been added. 

#### New Attribute:
* discount_type has been added to CreditNote#Discount.
* discount_type has been added to CreditNoteEstimate#Discount.
* discount_type has been added to Invoice#Discount.
* discount_type has been added to InvoiceEstimate#Discount.
* discount_type has been added to QuoteLineGroup#Discount.
* initial_purchase_transaction has been added to OmnichannelSubscription.
* error_cause_id has been added to GatewayErrorDetail.
* error_cause_id has been added to Transaction#GatewayErrorDetail.
* error_cause_id has been added to APIError.
* deleted has been added to Quote. 
* current_term_start has been added to QuotedSubscripiton#SubscriptionItem.
* current_term_end has been added to QuotedSubscripiton#SubscriptionItem.
* next_billing_at has been added to QuotedSubscripiton#SubscriptionItem.
* current_term_start has been added to Subscription#SubscriptionItem.
* current_term_end has been added to Subscription#SubscriptionItem.
* next_billing_at has been added to Subscription#SubscriptionItem.
* billing_override has been added to Subscription. 
* grace_period_expires_at has been added to OmnichannelSubscriptionItem.

#### New Input Params:
* billing_override has been added to Subscription#CreateWithItemsInputParam.
* billing_override has been added to Subscription#UpdateForItemsInputParam.

#### New Enum Values:
* OMNICHANNEL_SUBSCRIPTION_IMPORTED has been added to EventTypeEnum.
* DISABLED has been added to Event#WebhookStatus.
* OMNICHANNEL_SUBSCRIPTION_ITEM_GRACE_PERIOD_STARTED has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_GRACE_PERIOD_EXPIRED has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_DUNNING_STARTED has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_DUNNING_EXPIRED has been added to EventTypeEnum. 
* IGNORED has been added to RecordedPurchase#StatusEnum.
* IN_DUNNING & IN_GRACE_PERIOD have been added to OmnichannelSubscriptionItem#StatusEnum.

### v3.37.1 (2024-12-04)
* * * 

#### Bug Fixes: 
* empty array being converted to null object bug fixed.

### v3.37.0 (2024-11-27)
* * * 

#### New Resource: 
* OmnichannelSubscriptionItem has been added. 

#### New Attribute: 
* resource_version has been added to OmnichannelSubscription.
* resource_version has been added to OmnichannelTransaction.
* resource_version has been added to RecordedPurchase.

#### New Input Parameters:
* limit has been added to OmnichannelSubscription#ListRequest.
* offset has been added to OmnichannelSubscription#ListRequest.
* customer_id has been added to OmnichannelSubscription#ListRequest.
* replace_coupon_list has been added to HostedPage#CheckoutExistingRequest.
* replace_coupon_list has been added to HostedPage#CheckoutExistingForItemsRequest.
* subscription[po_number] has been added to HostedPage#CheckoutNewForItemsRequest.

#### Removed Subresource: 
* OmnichannelSubscriptionItem subresource has been removed from OmnichannelSubscription and is now a standalone resource.

#### Deprecated Attribute: 
* metadata has been deprecated from subscription. 

###  v3.36.0 (2024-11-14)
* * *

#### New Resource: 
* OmnichannelTransaction has been added. 
* OmnichannelSubscription has been added.
* RecordedPurchase has been added.


#### New Attributes: 
* business_entity_id has been added to AttachedItem.
* business_entity_id has been added to DifferentialPrice.
* business_entity_id has been added to Items.
* business_entity_id has been added to ItemFamily.
* business_entity_id has been added to ItemPrice.
* business_entity_id has been added to PriceVariant.
* valid_from has been added to coupon.

#### New Input Parameters:
* business_entity_id has been added to AttachedItem#CreateRequest.
* preferred_scheme has been added to Card#UpdateCardForCustomerRequest.
* valid_from has been added to Coupon#CreateForItem &  Coupon#UpdateForItemsRequest.
* preferred_scheme has been added to Customer#CreateRequest & Customer#CollectPaymentRequest.
* business_entity_id has been added to DifferentialPrice#CreateRequest.
* preferred_scheme has been added to Invoice#CreateRequest & Invoice#CreateForChargeItemsAndChargesRequest.
* business_entity_id has been added to Items#CreateRequest.
* business_entity_id & include_site_level_resources have been added to Items#ListItemParams.
* business_entity_id has been added to ItemFamily#CreateRequest.
* business_entity_id & include_site_level_resources have been added to ItemFamily#ListItemFamilyParams.
* business_entity_id has been added to ItemPrice#CreateRequest.
* business_entity_id & include_site_level_resources have been added to ItemPrice#ListItemPriceParams.
* business_entity_id & include_site_level_resources have been added to PriceVariant#ListItemFamilyParams.
* business_entity_id has been added to PriceVariant#CreateRequest.
* business_entity_id & include_site_level_resources have been added to PriceVariant#ListPriceVariantParams.
* preferred_scheme has been added to Subscription#CreateRequest, Subscription#UpdateRequest.
* preferred_scheme Subscription#UpdateForItemsRequest, & Subscription#ImportSubscriptionRequest.
* business_entity_id & include_site_level_resources have been added to Export#ItemFamiliesRequest & Export#ItemsRequest.
* business_entity_id & include_site_level_resources have been added to Export#ItemPricesRequest Export#PriceVariantsRequest
* name & flexible_schedules[period] have been added to PaymentScheduleScheme#CreateRequest.

#### New Enum Values: 
* FUTURE has been added to Coupon#StatusEnum.
* EXISTING_CUSTOMER & NEW_CUSTOMER have been added to Coupon#TypeEnum.
* LATE_FAILURE has added to Transation#LinkedPaymentEnum & Transation#StatusEnum.
* OMNICHANNEL_SUBSCRIPTION, has been added to EntityTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM, has been added to EntityTypeEnum.
* OMNICHANNEL_TRANSACTION, has been added to EntityTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_RENEWED, has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_CREATED, has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_DOWNGRADE_SCHEDULED, has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_DOWNGRADE_REMOVED, has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_DOWNGRADED, has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_EXPIRED, has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_CANCELLATION_SCHEDULED, has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_CANCELLATION_REMOVED, has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_RESUBSCRIBED, has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_UPGRADED, has been added to EventTypeEnum.
* OMNICHANNEL_SUBSCRIPTION_ITEM_CANCELLED, has been added to EventTypeEnum.

#### Deprecated method name:
* PaymentVoucherPaymentVouchersForInvoiceRequest method payment_vouchersForInvoice use paymentVouchersForInvoice instead.
* PaymentVoucherPaymentVouchersForCustomerRequest method payment_vouchersForCustomer use paymentVouchersForCustomer instead.


###  v3.35.1 (2024-11-08)
* * *

### Bug fix:
* metadata equality operator bug fixed, to resolve #61.

###  v3.35.0 (2024-10-17)
* * *

#### New Resource:
* PaymentScheduleEstimate has been added. 

### New Attributes: 
* payment_schedule_estimates has been added to Estimate. 
* usage_accumulation_reset_frequency has been added to ItemPrice.
* name has been added to PaymentScheduleScheme.
* usage_accumulation_reset_frequency has been added to QuotedSubscription#SubscriptionItem.
* usage_accumulation_reset_frequency has been added to Subscription#SubscriptionItem.

### New Endpoints: 
* Estimate#PaymentSchedule has been added. 

### New Input Params: 
* usage_accumulation_reset_frequency has been added to ItemPrice#CreateParams. 
* usage_accumulation_reset_frequency has been added to ItemPrice#UpdateParams. 
* discounts has been added to PricingPageSession#CreateForNewSubscriptionParams.
* discounts has been added to PricingPageSession#CreateForExistingSubscriptionParams.
* invoice_immediately has been added to Quote#ConvertParams.

### v3.34.1 (2024-10-03)
* * *

#### Bug Fixes:
* metadata field not working bug fixed. 
* meta_data field not working bug fixed.

### v3.34.0 (2024-09-19)
* * *

#### New Resource:
* PaymentScheduleScheme has been added. 
* PaymentSchedule has been added. 

### New Endpoints: 
* Invoice#ApplyPaymentScheduleScheme has been added. 
* Invoice#PaymentSchedules has been added. 

### New Attributes 
* bundle_items[] has been added to Items. 
* bundle_configuration has been added to Items.

#### New Input parameters: 
* bundle_configuration has been added to Items#CreateParams, Items#UpdateParams & Items#ListParams.
* bundle_items_to_add[] has been added to Items#CreateParams & Items#UpdateParams.  
* bundle_items_to_update[] has been added to Items#UpdateParams.
* bundle_items_to_remove[] has been added to Items#UpdateParams.
* payment_schedule has been added to Purchase#CreateParams.

### New Enum Values:
* payment_schedules_created has been added to EventTypeEnum.
* payment_schedules_updated has been added to EventTypeEnum.
* payment_schedule_scheme_created has been added to EventTypeEnum.
* payment_schedule_scheme_deleted has been added to EventTypeEnum.

### Removed Resource: 
* Installment has been removed. 
* InstallmentConfig has been removed.
* InstallmentDetail has been removed.

### Removed Endpoints: 
* Invoice#Installments has been removed. 

### Removed Input parameters: 
* installment_info has been removed from Purchase#CreateParams.

### Removed Enum Values: 
* invoice_installments_created has been removed from EventTypeEnum.
* invoice_installment_updated has been removed from EventTypeEnum.
* installment_config_created has been removed from EventTypeEnum.
* installment_config_deleted has been removed from EventTypeEnum.

### v3.33.0 (2024-08-29)
* * *

#### New Resource:
* CustomerEntitlement has been added. 

#### New Endpoints:
* Ramp#UpdateRequest has been added to Ramp resource.
* Transaction#ReconcileRequest has been added to Transaction resource. 

### New Attributes: 
* arr has been added to Subscription. 

### New Enum Values: 
* customer_entitlements_updated has been added to EntityTypeEnum.
* subscription_moved_in has been added in EventType enum.
* subscription_moved_out has been added in EventType enum.
* subscription_movement_failed has been added in EventType enum.

### v3.32.0 (2024-08-14)
* * *

#### New Attributes:
* feature_type has been added in SubscriptionEntitlement.
* business_entity_id has been made optional in Quote.
* business_entity_id has been made optional in CreditNote.

#### New Input parameters: 
* invoice_usages has been added in Subscription#UpdateForItemsRequest.
* invoice_usages has been added in Estimate#UpdateSubscriptionForItemsRequest.

### v3.31.0 (2024-07-31)
* * *

#### New Resource:
* Metadata has been added. 

#### New Attributes:
* variant_group has been added in PriceVariant resource.
* effective_from & schedule_status have been added in EntitlementOverride resource.
* effective_from & schedule_status have been added in SubscriptionEntitlement resource.
* status_transition_reason has been added in Ramp subresource.
* billing_period & billing_period_unit have been added in SubscriptionItem subresource.

#### New Input parameters:
* variant_group has been added to PriceVariant#CreateRequest, PriceVariant#UpdateRequest.
* include_scheduled_overrides has been added to SubscriptionEntitlement#SubscriptionEntitlementsForSubscriptionRequest.
* entitlement_overrides[effective_from] has been added to SubscriptionEntitlement#SubscriptionEntitlementsForSubscriptionRequest.
* entitlement_overrides[effective_from] has been added to EntitlementOverride#AddEntitlementOverrideForSubscriptionRequest.
* include_scheduled_overrides has been added to EntitlementOverride#ListEntitlementOverrideForSubscriptionRequest.
* updated_at has been added to Usage#ListRequest.

#### New Enum values:
* SUBSCRIPTION_ITEMS_RENEWED has been added in EventType enum.
* SUBSCRIPTION_RAMP_DRAFTED has been added in EventType enum.
* SUBSCRIPTION_RAMP_UPDATED has been added in EventType enum.

### v3.30.0 (2024-07-03)
* * *

#### New resources:
* Currency has been added.
* PricingPageSession Transfer has been added.

#### New Enum 
* cancel_option Enum has been added. 

#### New Enum values:
* ONLINE_BANKING_POLAND has been added in PaymentMethod enum.
* ONLINE_BANKING_POLAND has been added in PaymentMethodType enum.
* ONLINE_BANKING_POLAND has been added in Type enum.
* DRAFT has been added in Ramp enum.

#### New Input parameters:
* cancel_option has been added to Estimate#CancelSubscriptionRequest, Estimate#CancelSubscriptionForItemsRequest.
* cancel_option has been added to Subscription#CancelForItemsRequest, Subscription#CancelRequest.
* statement_descriptor[descriptor] has been added to Purchase#ChargeRequest.

#### New Attributes:
* tax_origin has been added to Invoice.
* tax_origin has been added to CreditNote.


### v3.29.0 (2024-06-03)
* * *
#### Reverted
- PSR-18 compatible http client (decouple from Guzzle)
- introduce HttpClientFactory in Environment class (also covers GH-19, GH-43 use cases)
- make request logic unit-testable by using custom HttpClientFactory (GH-50)
- cover Request class with unit tests

### v3.28.0 (2024-05-28)
* * *

### New Feature 
* Ability to access response headers in case of API failure is added.


#### New resources:
* BusinessEntity has been added.
* BusinessEntity Transfer has been added.


#### New Enum values:
* NUVEI has been added in Gateway enum.


#### New Attributes:
* site_details_at_creation has been added to CreditNote. 
* site_details_at_creation has been added to Invoice. 


#### New Input parameters:
* tax_providers_fields[provider_name] has been added to Addon#CreateRequest, Addon#UpdateRequest.
* tax_providers_fields[field_id] has been added to Addon#CreateRequest, Addon#UpdateRequest.
* tax_providers_fields[field_value] has been added to Addon#CreateRequest, #UpdateRequest.

* tax_providers_fields[provider_name] has been added to Customer#CreateRequest, Customer#UpdateRequest, Customer#MoveRequest.
* tax_providers_fields[field_id] has been added to Customer#CreateRequest, Customer#UpdateRequest, Customer#MoveRequest.
* tax_providers_fields[field_value] has been added to Customer#CreateRequest, Customer#UpdateRequest, Customer#MoveRequest..

* tax_providers_fields[provider_name] has been added to Estimate#CreateSubscriptionRequest, Estimate#CreateSubItemEstimateRequest, Estimate#CreateInvoiceRequest, CreateInvoiceForItemsRequest.
* tax_providers_fields[field_id] has been added to Estimate#CreateSubscriptionRequest, Estimate#CreateSubItemEstimateRequest, Estimate#CreateInvoiceRequest, CreateInvoiceForItemsRequest.
* tax_providers_fields[field_value] has been added to Estimate#CreateSubscriptionRequest, Estimate#CreateSubItemEstimateRequest, Estimate#CreateInvoiceRequest, CreateInvoiceForItemsRequest.

* tax_providers_fields[provider_name] has been added to Invoice#CreateRequest, Invoice#CreateForChargeItemsAndChargesRequest, Invoice#ChargeRequest.
* tax_providers_fields[field_id] has been added to Invoice#CreateRequest, Invoice#CreateForChargeItemsAndChargesRequest, Invoice#ChargeRequest.
* tax_providers_fields[field_value] has been added to Invoice#CreateRequest, Invoice#CreateForChargeItemsAndChargesRequest, Invoice#ChargeRequest.

* tax_providers_fields[provider_name] has been added to ItemPrice#CreateRequest, ItemPrice#UpdateRequest.
* tax_providers_fields[field_id] has been added to ItemPrice#CreateRequest, ItemPrice#UpdateRequest.
* tax_providers_fields[field_value] has been added to ItemPrice#CreateRequest, ItemPrice#UpdateRequest.

* tax_providers_fields[provider_name] has been added to Plan#CreateRequest, Plan#UpdateRequest.
* tax_providers_fields[field_id] has been added to Plan#CreateRequest, Plan#UpdateRequest.
* tax_providers_fields[field_value] has been added to Plan#CreateRequest, Plan#UpdateRequest.

* tax_providers_fields[provider_name] has been added to Quote#EditOneTimeQuoteRequest, Quote#CreateForOnetimeChargesRequest, Quote#CreateForChargeItemsAndChargesRequest, Quote#EditForChargeItemsAndChargesRequest.
* tax_providers_fields[field_id] has been added to Quote#EditOneTimeQuoteRequest, Quote#CreateForOnetimeChargesRequest, Quote#CreateForChargeItemsAndChargesRequest, Quote#EditForChargeItemsAndChargesRequest.
* tax_providers_fields[field_value] has been added to Quote#EditOneTimeQuoteRequest, Quote#CreateForOnetimeChargesRequest, Quote#CreateForChargeItemsAndChargesRequest, Quote#EditForChargeItemsAndChargesRequest.

* tax_providers_fields[provider_name] has been added to UnbilledCharge#CreateUnbilledChargeRequest, UnbilledCharge#CreateRequest.
* tax_providers_fields[field_id] has been added to UnbilledCharge#CreateUnbilledChargeRequest, UnbilledCharge#CreateRequest.
* tax_providers_fields[field_value] has been added to UnbilledCharge#CreateUnbilledChargeRequest, UnbilledCharge#CreateRequest.

* line_items[entity_type] has been added to CreditNote#CreateRequest.
* line_items[entity_id] has been added to CreditNote#CreateRequest.

### v3.27.2(2024-05-28)
***

#### Refactoring
- PSR-18 compatible http client (decouple from Guzzle)
- introduce HttpClientFactory in Environment class (also covers GH-19, GH-43 use cases)
- make request logic unit-testable by using custom HttpClientFactory (GH-50)
- cover Request class with unit tests
### v3.27.1 (2024-05-02)
* * *

#### Removed resources:
* Session has been removed.

### v3.27.0 (2024-04-30)
* * *

#### New resources:
* PriceVariant has been added.
* Ramp has been added.
* InstallmentDetail has been added.
* Session has been added.
* Ramp has been added.

#### New Enum values:
* INVOICE_INSTALLMENTS_CREATED has been added in EventType enum.
* INVOICE_INSTALLMENT_UPDATED has been added in EventType enum.
* INSTALLMENT_CONFIG_CREATED has been added in EventType enum.
* INSTALLMENT_CONFIG_DELETED has been added in EventType enum.
* RAMP_CREATED has been added in EventType enum.
* RAMP_DELETED has been added in EventType enum.
* RAMP_APPLIED has been added in EventType enum.

#### New Attributes:
* tax_providers_fields has been added to Addon resource.
* tax_providers_fields has been added to Customer resource.
* tax_providers_fields has been added to ItemPrice resource.
* tax_providers_fields has been added to Plan resource.
* resource_version has been added to Installment resource.
* resource_version has been added to InstallmentConfig resource.
* KlarnaPayNow has been added to PaymentSource resource.
* business_entity_id has been added to UnbilledCharge resource.

#### New Endpoints:
* Exports#PriceVariantsRequest has been added to Exports resource.

#### New Input parameters:
* changes_scheduled_at, change_option has been added to Estimate#UpdateSubscriptionRequest.
* changes_scheduled_at, change_option has been added to Estimate#UpdateSubscriptionForItemsRequest.
* contract_term[contract_start] has been added to Estimate#CreateSubItemEstimateRequest.
* contract_term[contract_start] has been added to Estimate#CreateSubItemForCustomerEstimateRequest.
* contract_term[contract_start] has been added to Subscription#CreateWithItemsRequest.
* contract_term[contract_start] has been added to Subscription#UpdateForItemsRequest.
* price_variant_id has been added to ItemPrice#CreateRequest.
* price_variant_id has been added to ItemPrice#UpdateRequest.
* price_variant_id has been added to ItemPrice#ListRequest.

#### Removed attributes:
* additional_info has been removed from Invoice#StatmentDescriptor resource.

#### Removed Input parameters:
* additional_info has been removed from Subscription#CreateRequest.
* additional_info has been removed from Subscription#CreateForCustomerRequest.
* additional_info has been removed from Subscription#CreateWithItemsRequest.
* additional_info has been removed from Subscription#UpdateRequest.
* additional_info has been removed from Subscription#UpdateForItemsRequest.
* additional_info has been removed from Subscription#ReactivateRequest.

### v3.26.1 (2024-04-03)
* * *

#### New Input parameters:
* to_customer_id has been added to subscription#MoveRequest.
* copy_payment_source has been added to subscription#MoveRequest.

#### New endpoints:
* Subscription#MoveRequest has been added to the Subscription resource.

### v3.26.0 (2024-03-20)
* * *

#### New resources:
* Attribute has been added.
* ImpactedItemPrice has been added.
* InstallmentConfig has been added.
* Installment has been added.

#### Removed attributes:
* product_id has been removed from ItemPrice resource.

#### New Enum values:
* klarna_pay_now has been added to TypeEnum in Customer resource.
* klarna_pay_now has been added to PaymentMethodEnum.
* klarna_pay_now has been added to PaymentMethodTypeEnum enum.
* klarna_pay_now has been added to TypeEnum.
* price_variant has been added to EntityTypeEnum.
* price_variant_created has been added in EventType enum.
* price_variant_updated has been added in EventType enum.
* price_variant_deleted has been added in EventType enum.

#### Removed Enum values:
* product and variant have been removed from EntityTypeEnum.

#### New Input parameters:
* config_id has been added to Invoice#InstallmentsRequest.
* amount has been added to Invoice#InstallmentsRequest.
* payment_source_id has been added to Purchase#CreateRequest.
* installment_info[config_id] has been added to Purchase#CreateRequest.
* installment_info[amount] has been added to Purchase#CreateRequest.
* subscription_info[contract_term_billing_cycle_on_renewal] has been added to Purchase#CreateRequest.
* contract_terms[index] has been added to Purchase#CreateRequest.
* contract_terms[action_at_term_end] has been added to Purchase#CreateRequest.
* contract_terms[cancellation_cutoff_period] has been added to Purchase#CreateRequest.
* subscription_info[contract_term_billing_cycle_on_renewal] has been added to Purchase#EstimateRequest.
* contract_terms[index] has been added to Purchase#EstimateRequest.
* contract_terms[action_at_term_end] has been added to Purchase#EstimateRequest.
* contract_terms[cancellation_cutoff_period] has been added to Purchase#EstimateRequest.

#### Deprecated input parameters:
* product_created, product_updated, product_deleted, variant_created, variant_updated, variant_deleted has been deprecated in EventTypeEnum.

### v3.25.1 (2024-03-06)
* * *
* NonSubscription has been added.

### v3.25.0 (2024-02-29)
* * *

#### New attributes:
* usage_percentage has been added to QuoteLineGroup resource.
* usage_percentage has been added to Quote resource.
* usage_percentage has been added to CreditNoteEstimate resource.
* usage_percentage has been added to CreditNote resource.
* usage_percentage has been added to InvoiceEstimate resource.
* usage_percentage has been added to Invoice resource.
* error_detail of type GatewayErrorDetail has been added to PaymentIntent#PaymentAttempt subResource.
* origin_user has been added to Event resource.
* proration_type has been added to QuotedSubscription#SubscriptionItem and Subscription#SubscriptionItem subResources
* network_error_message, recommendation_message, processor_error_code, processor_error_message has been added to Transaction#GatewayErrorDetail subResource.

#### New Enum values:
* TAX_NOT_CONFIGURED_EXTERNAL_PROVIDER has been added to TaxExemptReasonEnum.

#### New Input parameters:
* billing_address has been added to Estimate#CreateSubItemForCustomerEstimateRequest.
* transactions[amount] has been added to Invoice#ApplyPaymentsRequest.

### v3.24.1 (2024-02-23)
* * *

* Fixed Custom field case conversion issue

### v3.24.0 (2024-01-04)
* * *

#### New resources:
* Entitlements has been added.

#### New attributes:
* date_to, date_from, prorated_taxable_amount has been added to quote_line_group.
* date_to, date_from, prorated_taxable_amount has been added to quote.
* date_to, date_from, prorated_taxable_amount has been added to credit_note_estimate.
* date_to, date_from, prorated_taxable_amount has been added to credit_note.
* date_to, date_from, prorated_taxable_amount has been added to invoice_estimate.
* date_to, date_from, prorated_taxable_amount has been added to order.
* date_to, date_from, prorated_taxable_amount has been added to invoice.
* active_id has been added to customers.
* active_id has been added to subscriptions.
* reference_id has been made optional for payment_sources/create_using_permanent_token
* custom_payment_method_id has been added to transactions.
* custom_payment_method_name has been added to transactions.
* error_detail has been added to transactions.


#### New Enum values:
* CMR_FALABELLA, TARJETA_NARANJA, NATIVA, CENCOSUD, CABAL, ARGENCARD, ELO, HIPERCARD, CARNET, RUPAY, MAESTRO has been added to Card#CardTypeEnum
* Transferred has been added to Subscription#StatusEnum.
* Transferred has been added to SubscriptionEstimate#StatusEnum.
* AutomatedBankTransfer has been added to PaymentMethodEnum.
* UsAutomatedBankTransfer, GbAutomatedBankTransfer, EuAutomatedBankTransfer, JpAutomatedBankTransfer, MxAutomatedBankTransfer has been added to VirtualBankAccount#SchemeEnum.
* CustomerBusinessEntityChanged, SubscriptionBusinessEntityChanged has been added to EventTypeEnum.
* Dlocal has been added to GatewayEnum.
* UsAutomatedBankTransfer, UkAutomatedBankTransfer, EuAutomatedBankTransfer, JpAutomatedBankTransfer, MxAutomatedBankTransfer, Custom has been added to OfflinePaymentMethodEnum.
* AutomatedBankTransfer has been added to PaymentMethodEnum.
* AutomatedBankTransfer has been added to PaymentMethodTypeEnum.

#### New Input parameters:
* custom_payment_method_name has been added to Transactions#RecordRefundRequest.
* proration_type has been added to Subscription#UpdateForItemsRequest.
* proration_type has been added to ItemPrice.
* payment_initiator has been added to Invoice.
* payment_method_token, customer_profile_token, network_transaction_id, mandate_id, skip_retrieval, card, billing_address has been added to PaymentSource#CreateUsingPermanentTokenRequest.
* subscription_items[proration_type] has been added to Estimate#UpdateSubscriptionForItemsRequest.
* transaction[custom_payment_method_id] has been added to Customer#RecordExcessPaymentRequest.
* transaction[custom_payment_method_id] has been added to CreditNote#RecordRefundRequest.

### v3.23.0 (2023-10-31)
* * *

#### New attributes:
* statement_descriptor has been added to invoice resource.
* source has been added to the Hosted_Pages resource.

#### New Enum values:
* pay_com has been added to Gateway.
* pay_to, faster_payments, sepa_instant_transfer has been added to Customer#TypeEnum.
* pay_to, faster_payments, sepa_instant_transfer has been added to PaymentMethodEnum.
* pay_to, faster_payments, sepa_instant_transfer has been added to PaymentMethodTypeEnum.
* pay_to, faster_payments, sepa_instant_transfer has been added to TypeEnum.
* pay_to, faster_payments, sepa_instant_transfer, amazon_payments has been added to PaymentIntent#PaymentMethodTypeEnum.

#### New Input parameters:
* source has been added to HostedPage#CheckoutOneTimeForItemsRequest.
* source has been added to HostedPage#CheckoutNewForItemsRequest.
* source has been added to HostedPage#CheckoutExistingForItemsRequest.
* statement_descriptor_descriptor has been added to Invoice#CreateRequest.
* statement_descriptor_descriptor has been added to Invoice#CreateForChargeItemsAndChargesRequest.
* statement_descriptor_descriptor has been added to Invoice#UpdateDetailsRequest.
* statement_descriptor_additional_info has been added to Invoice#CreateRequest.
* statement_descriptor_additional_info has been added to Invoice#CreateForChargeItemsAndChargesRequest.
* statement_descriptor_additional_info has been added to Invoice#UpdateDetailsRequest.
* statement_descriptor_descriptor has been added to Subscription#CreateRequest.
* statement_descriptor_descriptor has been added to Subscription#CreateForCustomerRequest.
* statement_descriptor_descriptor has been added to Subscription#CreateWithItemsRequest.
* statement_descriptor_descriptor has been added to Subscription#UpdateRequest.
* statement_descriptor_descriptor has been added to Subscription#UpdateForItemsRequest.
* statement_descriptor_descriptor has been added to Subscription#ReactivateRequest.
* statement_descriptor_additional_info has been added to Subscription#CreateRequest.
* statement_descriptor_additional_info has been added to Subscription#CreateForCustomerRequest.
* statement_descriptor_additional_info has been added to Subscription#CreateWithItemsRequest.
* statement_descriptor_additional_info has been added to Subscription#UpdateRequest.
* statement_descriptor_additional_info has been added to Subscription#UpdateForItemsRequest.
* statement_descriptor_additional_info has been added to Subscription#ReactivateRequest.

#### Updates to old parameters:
* duration_type, discount_type in coupons has been made optional.
* proration_type in addons is now supported.
* csv_tax_rule has been removed.
* Tax1JurisTypeEnum has been removed.
* Tax2JurisTypeEnum has been removed.
* Tax3JurisTypeEnum has been removed.
* Tax4JurisTypeEnum has been removed.

### v3.22.0 (2023-09-26)
* * *

#### New attributes:
* venmo has been added to the PaymentSource resource.
* proration_type has been added to the QuotedCharge, QuotedSubscription and Subscription resource.

#### New Enum values:
* ebanx has been added to Gateway.
* venmo has been added to Customer#TypeEnum.
* venmo has been added to PaymentMethodEnum.
* venmo has been added to PaymentMethodTypeEnum.
* venmo has been added to TypeEnum.
* venmo has been added to PaymentIntent#PaymentMethodTypeEnum.

#### New Input parameters:
* einvoicing_method has been added to HostedPage#CheckoutOneTimeForItemsRequest.
* einvoicing_method has been added to HostedPage#CheckoutNewForItemsRequest.
* additional_information has been added to PaymentSource#CardAdditionalInformation.

### v3.21.0 (2023-09-05)
* * *

#### New Resource:
* CsvTaxRule has been added.

#### New attributes:
* direct_debit_scheme has been added to the PaymentSource#PaymentSourceBankAccount resource. 

#### New Enum :
* DirectDebitSchemeEnum has been added.
* Tax1JurisTypeEnum has been added.
* Tax2JurisTypeEnum has been added.
* Tax3JurisTypeEnum has been added.
* Tax4JurisTypeEnum has been added.

#### New Input parameters:
* avalara_tax_code, hsn_code, taxjar_product_code has been added to Invoice#AddChargeRequest. 


### v3.20.0 (2023-07-31)
* * *

#### New Attributes:
* tax_category has been added to the CreditNote, Quote and Invoice resource. 
* proration_type has been added in Addon resource.

#### New Enum values:
* tax has been added to EntityType enum in Invoice resource.
* payment_source_locally_deleted has been added to EventType.

#### New Input parameters:

* CouponId and CouponApplyTill has been added to Subscritpion#CreateRequest in Subscritpion resource. 
* CouponId and CouponApplyTill has been added to Subscritpion#CreateForCustomerRequest in Subscritpion resource. 
* CouponId and CouponApplyTill has been added to Subscritpion#CreateWithItemsRequest in Subscritpion resource. 
* CouponId and CouponApplyTill has been added to Subscritpion#UpdateRequest in Subscritpion resource. 
* CouponId and CouponApplyTill has been added to Subscritpion#UpdateForItemsRequest in Subscritpion resource. 
* CouponId and CouponApplyTill has been added to Subscritpion#ImportSubscriptionRequest in Subscritpion resource. 
* CouponId and CouponApplyTill has been added to Subscritpion#ImportForCustomerRequest in Subscritpion resource. 
* CouponId and CouponApplyTill has been added to Subscritpion#ImportForItemsRequest in Subscritpion resource. 
* cancel_reason_code has been added to Subscritpion#ImportForItemsRequest in Subscritpion resource.
* proration_type has been added in addon#createRequest and addon#UpdateRequest in Addon resource.
* addons[proration_type] has been added in Estimate#UpdateSubscriptionRequest in Estimate resource.
* addons[proration_type]  has been added in Subscription#UpdateRequest in Subscritpion resource.

#### New Enum Class:
* ProrationType enum has been added to addon resource.
* ProrationType enum has been added.


### v3.19.0 (2023-06-30)
* * *

#### New endpoints:
* ViewVoucher#ViewVoucherRequest has been added to the HostedPage resource.
* InvoiceListPaymentReferenceNumbers#InvoiceListPaymentReferenceNumbersRequest has been added to the Invoice resource.

#### New Resource:
* PaymentReferenceNumber has been added.

#### New attributes:
* local_currency_exchange_rate has been added to the CreditNote and Invoice resource. 

#### New Enum values:
* view_voucher has been added to Type enum in HostedPage resource.
* paused has been added in StoreStatus enum in InAppSubscription resource.
* metrics_global and windcave has been added in Gateway enum. 


#### New Input parameters:
* payment_initiator has been added to Customers#CollectPaymentRequest. 
* payment_initiator has been added to Invoice#CreateRequest.
* payment_initiator has been added to Invoice#ChargeRequest.
* payment_initiator has been added to Invoice#ChargeAddonRequest.
* payment_initiator has been added to Invoice#CollectPaymentRequest.
* payment_initiator has been added to Subscription#CreateRequest.
* payment_initiator has been added to Invoice#CreateForChargeItemRequest.
* payment_initiator has been added to Subscription#CreateForCustomerRequest.
* payment_initiator has been added to Subscription#CreateWithItemsRequest.
* payment_initiator has been added to Subscription#UpdateForItemsRequest.
* payment_initiator has been added to Subscription#ReactivateRequest.
* payment_initiator has been added to Subscription#ResumeRequest.
* payment_reference_numbers[id] has been added to Invoice#ImportInvoiceRequest.
* payment_reference_numbers[type] has been added to Invoice#ImportInvoiceRequest.
* payment_reference_numbers[number] has been added to Invoice#ImportInvoiceRequest.


### v3.18.0 (2023-05-31)
* * *

#### New endpoints:
* PaymentSource#CreateVoucherPaymentSource has been added to the PaymentSource resource.
* EventsRequest#HostedPage has been added to the PaymentSource resource.

#### New Resource:
* PaymentVoucher has been added.

#### New attributes:
* boleto and billing_address has been added to the PaymentSource resource.
* product_id has been added to the ItemPrice resource.

#### New Enum Class:
* EventNameEnum has been added.
* PaymentVoucherTypeEnum has been added.
* VoucherTypeEnum has been added.

#### New Enum values:
* product and variant has been added to EntityType enum.
* product_created, product_updated, product_deleted, variant_created, variant_updated and variant_deleted enums have been added in EventType enum.
* voucher_created, voucher_expired and voucher_create_failed have been added in EventType enum.
* boleto has been added in PaymentMethod and OfflinePaymentMethod  and PaymentMethodTypeEnum#PaymentIntent.


### v3.17.0 (2023-05-16)
* * *

#### New Feature:
* Added utility to pass **Idempotency key** along with request headers to allow a safe retry of POST requests.
* Added isIdempotencyReplayed() utility to differentiate between original and replayed requests.
* Added getResponseHeaders() utility to fetch the response headers.

### v3.16.0 (2023-04-28)
* * *

#### Fixes:
* SubscriptionId attribute has been maid as required in InAppSubscription resource.

#### New Attributes: 
* TotalContractValueBeforeTax has been added to the ContractTerm resource.
* TotalContractValueBeforeTax#SubscriptionContractTerm has been added to the Subscription resource.
* TotalContractValueBeforeTax#SubscriptionEstimateContractTerm has been addded to the SubscriptionEstimate resource.
* CouponConstraints has been added to the Coupon resource.

#### New Resource:
* NonSubscription have been added.

#### Added Input Parameters:
* contract_term[total_amount_raised_before_tax]#ImportSubscriptionRequest, contract_term[total_amount_raised_before_tax]#ImportForItemsRequest, contract_term[total_amount_raised_before_tax]#ImportContractTermRequest and contract_term[total_amount_raised_before_tax]#ImportForCustomerRequest parameter has been added to Subscription resource.
* contract_term[total_contract_value_before_tax]#ImportContractTermRequest parameter has been added to Subscription resource.
* coupon_constraints[entity_type]#CreateForItemsRequestParams, coupon_constraints[type]#CreateForItemsRequestParams and coupon_constraints[value]#CreateForItemsRequestParams parameter has been added to the Coupon resource.
* coupon_constraints[entity_type]#UpdateForItemsRequestParams, coupon_constraints[type]#UpdateForItemsRequestParams and coupon_constraints[value]#UpdateForItemsRequestParams parameter has been added to the Coupon resource.
* export_type#CustomersRequest and export_type#SubscriptionsRequest parameter has been added to the Export resource.

#### New Enum Class:
* ExportType has been added.

#### New Enum values:
* pending_authorization has been added to StatusEnum#PaymentIntentPaymentAttempt to the PaymentIntent resource.


### v3.15.0 (2023-03-24)
* * *

#### Fixes:
* Fixed list_discounts subscriptions API error.
* Fixed utf8_encode deprecation warnings.

#### New Attributes: 
* referenceNumber has been added to the CreditNoteEinvoice resource.
* referenceNumber has been added to the InvoiceEinvoice resource.
* einvoicingMethod has been added to the Customer resource.
* storeStatus and invoiceId have been addded to the InAppSubscription resource.

#### Added Input Parameters:
* UpdateForItemsRequestParams#discount_quantity and UpdateRequestParams#discount_quantity parameter has been added to the coupon resource.
* UpdateBillingInfoRequestParams#einvoicing_method and CreateRequestParams#einvoicing_method parameter has been added to the customer resource.
* CreateCustomerParams#einvoicing_method , UpdateCustomerParams#einvoicing_metho and  UpdateForItemsCustomerParams#einvoicing_method parameter has been added to the Subscription resource.
* CreateSubscriptionInfoParams#meta_data parameter has been added to the purchase resource.

#### New Endpoints:
* CreditNote#SendEinvoice has been added to the CreditNote resource. 
* Invoice#SendEinvoice has been added to the Invoice resource.
* InAppSubscription#ImportSubscription and InAppSubscription#RetrieveStoreSubs requests have been added to the InAppSubscription resource.

#### New Enum Class:
* EinvoicingMethod has been added.
* StoreStatus has been added in InAppSubscription resource.


### v3.14.0 (2023-02-17)
* * *

#### New Attributes:
* resource_version and updated_at parameter has been added to the tax_withheld resource.

#### Added input parameters:
* ListRequestParams#updated_at parameter has been added to attached_item resource.
* AttachedItemsAttachedItemParams#updated_at parameter has been added to export resource.
* CheckoutGiftRequestParams#coupon_ids parameter has been added to hosted_page resource.
* ProcessReceiptCustomerParams#email, ProcessReceiptCustomerParams#first_name and  ProcessReceiptCustomerParams#last_name parameters has been added to in_app_subscription resource.

#### New endpoints:
* invoice#RecordTaxWithheld and invoice#RemoveTaxWithheld has been added to the invoice resource.
* credit_note#RemoveTaxWithheldRefund has been added to the credit_note resource.

#### New Enum values:
* custom has been added to payment_method Enum.
* ecentric has been added to gateway Enum.

#### Removed input parameters:
* EstimateRequestParams#EstimateInvoiceInfoParams parameter has been removed from purchase resource.

#### Deprecated input parameters:
* CheckoutGiftRequest#coupon parameter have been deprecated in hosted_page resource.


### v3.13.0 (2023-01-13)
* * *

#### New Attributes:
* shipping_address and billing_address parameter has been added to the CreditNote.
* is_advance_charge has been added to the UnbilledCharge.

#### Added input parameters:
* CreateSubForCustomerQuoteRequest#subscription[po_number] and CreateSubItemsForCustomerQuoteRequest#subscription[po_number] parameter has been added to Quote resource.
* ImportUnbilledChargesRequest#unbilled_charges[is_advance_charge] parameter has been added to Subscription resource.
* ImportInvoiceRequest#has_advance_charges parameter has been added to Invoice resource.

#### New endpoints:
* Invoice#DeleteLineItemsRequest has been added to the Invoice resource.

#### New Enum values:
* SUBSCRIPTION_TRIAL_EXTENDED has been added to EventTypeEnum.
* ZERO_VALUE_ITEM has been added to TaxExemptReasonEnum.
* BANK_OF_AMERICA has been added to GatewayEnum.


### v3.12.0 (2022-11-10)
* * *

### Fixes:
* Fixed the correct import of content in init.php

#### New endpoints:
* credit_notes#import_credit_note has been added to the credit_notes resource.
* subscriptions#import_unbilled_charges has been added to the subscriptions resource.

#### New attributes:
* shipped_at parameter has been added to the orders#list_orders API.

#### Added input parameters:
* voided_at and void_reason_code have been added to the invoices#import_invoice API.

#### New attributes:
* business_entity_id has been added to the orders resource.

#### New Enum values:
* registered has been added to the status enum in credit_note_einvoice and invoice_einvoice subresources.
* type enum has been added to the subscription_discount subresource.
* subscription_entitlements_created has been added to the event_type enum.


### v3.11.0 (2022-09-20)

#### New Resource:
* discount has been added.

#### New Enum values:
* apply_on, duration_type and operation_type enums have been added.

### v3.10.0 (2022-09-20)
* * *

#### New endpoints:
* subscriptions#list_discounts has been added to the subscriptions resource.

#### New attributes:
* billing_month has been added to the customer resource.

#### Added input parameters:
* billing_month has been added to the customers#change_billing_date API.
* line_items[subscription_id] has been added to the invoices#import_invoice API.
* layout has been added to hosted_pages#checkout_onetime_for_items, hosted_pages#checkout_new_for_items and hosted_pages#checkout_existing_for_items APIs.
* discounts[apply_on], discounts[percentage], discounts[amount] and discounts[item_price_id] have been added to estimates#create_subscription_for_items, estimates#create_subscription_for_items_estimate, estimates#update_subscription_for_items, hosted_pages#checkout_onetime_for_items, hosted_pages#checkout_new_for_items, hosted_pages#checkout_existing_for_items, invoices#create_for_charge_items_and_charges, quotes#create_subscription_for_items, quotes#edit_create_subscription_quote_for_items, quotes#update_subscription_quote_for_items, quotes#edit_update_subscription_quote_for_items, quotes#create_for_charge_items_and_charges, quotes#edit_for_charge_items_and_charges, subscriptions#create_subscription_for_items, subscriptions#update_subscription_for_items and subscriptions#import_subscription_for_items APIs.
* discounts[duration_type], discounts[period], discounts[period_unit] and discounts[included_in_mrr] have been added to estimates#create_subscription_for_items, estimates#create_subscription_for_items_estimate, estimates#update_subscription_for_items, hosted_pages#checkout_new_for_items, hosted_pages#checkout_existing_for_items, quotes#create_subscription_for_items, quotes#edit_create_subscription_quote_for_items, quotes#update_subscription_quote_for_items, quotes#edit_update_subscription_quote_for_items, subscriptions#create_subscription_for_items, subscriptions#update_subscription_for_items and subscriptions#import_subscription_for_items APIs.
* discounts[operation_type] and discounts[id] have been added to estimates#update_subscription_for_items, quotes#update_subscription_quote_for_items, hosted_pages#checkout_existing_for_items, quotes#edit_update_subscription_quote_for_items, subscriptions#update_subscription_for_items and subscriptions#import_subscription_for_items APIs.

#### New Enum values:
* global_payments has been added to gateway enum.
* layout enum has been added.

### v3.9.0 (2022-08-22)
* * *

#### Fixes:
* fixed incorrect reference of OperationFailedException class in TimeMachine model.

#### New endpoints:
* Purchase#Retrieve has been added to the Purchase resource.

#### New attributes:
* ResourceVersion has been added to the Token resource.
* UpdatedAt has been added to the Token and UnbilledCharge resources.
* ReferenceLineItemId has been added to the CreditNote#LineItem, CreditNoteEstimate#LineItem, Quote#LineItem, QuoteLineGroup#LineItem, InvoiceEstimate#LineItem and Invoice#LineItem subResources.
* Index has been added to the Order#ShippingAddress, Invoice#ShippingAddress, Quote#ShippingAddress, QuotedCharge#ItemTier, QuotedSubscription#ItemTier, Subscription#ItemTier, Subscription#ShippingAddress and SubscriptionEstimate#ShippingAddress subResources.
* VoidWithCreditNote has been added to the Invoice#VoidInvoiceRequest subresources.
* PaymentMethodDetails has been added to the Transaction resource.

#### New Resource:
* InAppSubscription have been added.

#### Removed input parameters:
* BusinessEntityId has been removed from Purchase#CreateRequest and Purchase#EstimateRequest.


### v3.8.0 (2022-07-08)
* * *

### Fixes:
* Fixed Status Enum related issues
* Fixed EmbeddedResource related issues 

#### New endpoints:
* hostedpage#PreCancel has been added to the hostedpage resource.

#### New attributes:
* business_entity_id have been added to the CreditNote, Customer,HostedPage, Invoice, PaymentIntent, Quote, Subscription and Transaction resources.
* coupon_set_code have been added to the CreditNote, CreditNoteEstimate, Invoice, InvoiceEstimate, Quote and QuoteLineGroup resources.
* List of SubscriptionEstimate have been added to Estimate resource.

#### New Resource:
* ImpactedSubscription, ImpactedItem, Purchase have been added.

#### New Enum values:
* direct_debit has been added to payment_method_type enum.
* bancontact, not_applicable added to payment_source_card_brand enum.
* business_entity added to entity_type Enum
* business_entity_created, business_entity_updated, business_entity_deleted, purchase_created added to event_type Enum
* chargebee_payments added to gateway Enum


### v3.7.0 (2022-05-23)
* * *

#### New endpoints:
* invoice#sync_usages and invoice#resend_einvoice have been added to the invoice resource.
* credit_notes#resend_einvoice has been added to the credit_notes resource.
* features#list_features, features#create_a_feature, features#update_a_feature, features#retrieve_a_feature, features#delete_a_feature, features#activate_a_feature, features#archive_a_feature and features#reactivate_a_feature have  been added to the features resource.
* subscription_entitlements#subscription_entitlements_for_subscription and subscription_entitlements#set_subscription_entitlement_availability have been added to the subscription_entitlements resource.
* item_entitlements#item_entitlements_for_an_item, item_entitlements#item_entitlements_for_a_feature, item_entitlements#add_an_item_entitlements and item_entitlements#upsert_or_remove_an_item_entitlements_for_item have been added to the item_entitlements resource.
* entitlement_overrides#add_entitlement_override_for_a_subscription and entitlement_overrides#list_entitlement_override_for_a_subscription have been added to the entitlement_overrides resource.

#### New Resource:
* features, subscription_entitlements, item_entitlements and entitlement_overrides have been added.

#### New filter parameters:
* einvoice[status] filter parameter has been added in credit_notes#list_credit_notes api.

#### New Enum values:
* paypal_express_checkout has been added to payment_method_type enum.
* feature_created, feature_updated, feature_deleted, feature_activated, feature_reactivated, feature_archived, item_entitlements_updated, entitlement_overrides_updated, entitlement_overrides_removed, item_entitlements_removed and entitlement_overrides_auto_removed have been added to the event_type enum.
* action enum has been added.

### v3.6.0 (2022-04-25)
* * *

#### New endpoints:
* UnbilledCharge#CreateUnbilledCharge has been added to UnbilledCharge resource. Applicable only for PC1.0.

#### New attributes:
* channel have been added to the Addon, AttachedItem, CreditNote, Customer, Invoice, ItemFamily, ItemPrice, Plan and Subscription resources.
* external_name and channel have been added to the Item resource.

#### New input parameters:
* external_name have been added to Item#CreateRequest and Item#UpdateRequest.
* channel have been added to Addon#AddonListRequest.
* channel have been added to CreditNote#CreditNoteListRequest.
* channel have been added to Customer#CustomerListRequest.
* invoice[channel], subscription[channel] and customer[channel] have been added to Export#RevenueRecognitionRequest and Export#DeferredRevenueRequest.
* plan[channel] have been added to Export#PlansRequest.
* addon[channel] have been added to Export#AddonsRequest.
* customer[channel] have been added to Export#CustomersRequest.
* subscription[channel] have been added to Export#SubscriptionsRequest.
* invoice[channel] have been added to Export#InvoicesRequest. 
* credit_note[channel] have been added to Export#CreditNotesRequest.
* item[channel] have been added to Export#ItemsRequest.
* item_price[channel] have been added to Export#ItemPricesRequest.
* channel have been added to Invoice#InvoiceListRequest.
* channel have been added to Item#ItemListRequest.
* channel have been added to ItemPrice#ItemPriceListRequest.
* channel have been added to Plan#PlanListRequest.
* channel have been added to Subscription#SubscriptionListRequest.

### Existing input parameter changes:
* item_family_id in Item#CreateRequest has been made as required field.

### Removed enum values:
* coupon_expired event has been removed from EventTypeEnum. 


### v3.5.2 (2022-03-30)
* * *

### Fixes:
* Fixed typo error for content model.

### v3.5.1 (2022-03-30)
* * *

### Fixes:
* Fixed deprecation warnings for PHP 8.1.


### v3.5.0 (2022-03-14)
* * *

#### New Input parameters:
* net_term_days has been added to subscriptions#create_subscription_for_items, subscriptions#update_subscription_for_items, subscriptions#import_subscription_for_items endpoints.


### v3.4.0 (2022-03-08)
* * *

### Fixes:
* Fixed array access implemetation.

#### New attributes:
* upi, mandates and their subresources have been added to the payment_source resource.

#### New Input parameters:
* bank_account[phone] have been added to customers#create_bank_account
* payment_intent[payment_method_type] have been added to customers#create_payment_intent, customers#collect_payment_intent
* payment_intent[payment_method_type] have been added to estimate#gift_subscription and estimate#gift_subscription_for_items.
* payment_intent[payment_method_type] have been added to gift#create_payment_intent and gift#create_gift_for_items_payment_intent.
* customer[is_einvoice_enabled], customer[entity_identifier_scheme], customer[entity_identifier_standard], entity_identifiers[id], entity_identifiers[scheme], entity_identifiers[value], entity_identifiers[operation], entity_identifiers[standard] have been added to hosted_page#checkout_onetime_for_items, hosted_page#checkout_new_for_items and hosted_page#checkout_existing_for_items.
* bank_account[phone] have been added to invoice#create_bank_account, invoice#create_bank_account_for_chargeitems_and_charges
* payment_intent[payment_method_type] have been added to invoice#create_payment_intent, invoice#create_payment_intent_for_chargeitems_and_charges
* bank_account[phone] have been added to payment_source#create_bank_account
* payment_intent[payment_method_type] have been added to payment_source#create_using_payment_intent
* subscription_id have been added to payment_source#list_payment_source
* bank_account[phone] have been added to subscription#create_bank_account
* payment_intent[payment_method_type] have been added to subscription#create_payment_intent, subscription#create_payment_intent_for_customer, subscription#create_payment_intent_with_items, subscription#update_payment_intent, subscription#update_payment_intent_for_items, subscription#reactivate_payment_intent, subscription#resume_payment_intent
* activated_at have been added to subscription#import_subscription, subscription#import_subscription_for_customer, subscription#import_subscription_for_items

#### New Enum values:
* upi, netbanking_emandates enum has been added in customer_payment_method_type subresource of customer resource
* current enum has been added in account_type.  
* quickbooks, razorpay enum has been added in gateway.
* upi, netbanking_emandates enum has been added in payment_method,payment_method_type, type
* upi, netbanking_emandates, apple_pay enum has been added in payment_method_type subresource of payment_intent resource
* current enum has been added in bank_account_type subresource of payment_source.

#### Deprecated attributes:
* coupon attribute have been added and deprecated in hosted_page resource.

#### Deprecated enums:
* NetdPaymentDueReminder have been deprecated in event_type.


### v3.3.0 (2022-01-21)
* * *

#### New endpoints:
* credit_notes#download_einvoice has been added to the credit_notes resource.
* invoice#download_einvoice has been added to the invoice resource.

#### New attributes:
* is_einvoice_enabled, entity_identifier_scheme, entity_identifier_standard and entity_identifiers[] have been added to the customer resource.
* einvoice has been added to the invoice resource.
* einvoice has been added to the credit_notes resource.
* mime_type has been added to the download resource.

#### New Input parameters:
* entity_identifier_scheme, entity_identifier_standard, is_einvoice_enabled, entity_identifiers[id][0..N], entity_identifiers[scheme][0..N], entity_identifiers[value][0..N], entity_identifiers[standard][0..N] have been added to customers#create_a_customer, customers#update_billing_info_for_a_customer apis.
* customer[entity_identifier_scheme], customer[entity_identifier_standard], customer[is_einvoice_enabled], entity_identifiers[id][0..N], entity_identifiers[scheme][0..N], entity_identifiers[value][0..N], entity_identifiers[standard][0..N] have been added to the subscriptions#create_a_subscription api.
* customer[entity_identifier_scheme], customer[entity_identifier_standard], customer[is_einvoice_enabled] have been added to subscriptions#update_a_subscription and subscriptions#update_subscription_for_items apis.

#### New Enum values:
* operation enum has been added.
* status enum has been added in credit_notes_einvoice subresource of credit_notes resource.

#### Deprecated attributes:
* user, type, payment_method and exchange_rate have been deprecated from TaxWithHeld resource.

#### Deprecated enums:
* type and payment_method have been deprecated in TaxWithHeld resource.

#### Updated parameters:
* hierarchy_operation_type has been made mandatory in customers#get_hierarchy api.

#### Removed Filter parameters:
* create_pending_invoices has been removed from subscriptions#list_subscriptions api.


### v3.2.1 (2022-01-05)
* * *

### Fixes:
* Improved error message for Invalid JSON response.

### v3.2.0 (2021-12-08)
* * *

### Fixes:
* Included 3.2.0-rc.1 beta changes.
* Exposed function Environment#updateConnectTimeoutInSecs and Environment#updateRequestTimeoutInSecs to set custom connect and request timeout.
* Updated default connect and request timeout to 30s and 80s respectively.

#### New endpoints:
* payment_sources#update_bank_account have been added in payment_sources resource.
* item_price#item_price_find_applicable_items and item_price#item_price_find_applicable_item_prices have been added in item_price resource.

#### New Attributes:
* hsn_code have been added to the resource addon, item_price and plan.
* first_name, last_name and email have been added to the resource payment_sources.

#### New Resource:
* TaxWithheld has been added.Applicable only for API V2. 

#### New Input parameters:
* hsn_code have been added to addons#create_an_addon, addons#update_an_addon, plan#create_an_plan and plan#update_an_plan  apis.
* bank_account[first_name],bank_account[last_name] and bank_account[email] have been added to payment_sources#update_bank_account api.
* charges[hsn_code] have been added in estimate#Create_Invoice, estimate#Create_Invoice_For_Items, hosted_pages#Checkout_One_Time, hosted_pages#Checkout_One_Time_For_Items, invoice#create_an_invoice, invoice#Create_For_Charge_Items_And_Charges and unbilledCharge#create_an_unbilledCharge apis.
* tax_detail[hsn_code] have been added in item_price#create_an_itemPrice and item_price#update_an_itemPrice apis.
* include_deleted have been added in plan#plan_list and addon#addon_list apis.Applicable only for Product Catalog V1.

#### New Enum values:
* subscription_activated_with_backdating, tax_withheld_recorded, tax_withheld_deleted and tax_withheld_refunded has been added to event_type enum.

### v3.1.0 (2021-10-14)
* * *

#### New Attributes:
* entity_id has been added in order_line_item_discounts resource.

#### New Input parameters:
* line_items[tax5_name], line_items[tax5_amount], line_items[tax6_name], line_items[tax6_amount], line_items[tax7_name], line_items[tax7_amount], line_items[tax8_name], line_items[tax8_amount], line_items[tax9_name],  line_items[tax9_amount], line_items[tax10_name], line_items[tax10_amount] have been added in import_invoice api.
* replace_primary_payment_source has been added in create_subscription_for_customer and create_subscription_for_items apis.

#### New Enum values:
* coupon_expired has been added to event_type enum.
* mollie has been added to gateway enum.
* item_level_discount and document_level_discount has been added to discount_type.

### v3.0.0 (2021-08-16)
* * *
* Bumped minimum php version to 5.6.0.
* Implemented namespaces.
* Switched to Guzzle PHP Http Client to make HTTP requests.

#### New Attributes:
* generated_at has been added in credit_note and invoice resources.
* change_option have been added in quoted_subscription resource.
* changes_scheduled_at has been added in subscription and quoted_subscription resources.
* iin and last4 have been added in transaction resource.

#### New Resource:
* quoted_charge has been added. 

#### New Input parameters:
* invoice_date has been added in estimates##create_subscription_estimate, estimates#estimate_for_creating_a_customer_and_subscription, estimates#estimate_for_creating_a_subscription, estimates#create_subscription_for_a_customer_estimate, estimates#update_subscription_estimate, estimates#estimate_for_updating_a_subscription, estimates#cancel_subscription_estimate, estimates#cancel_subscription_for_items_estimate, estimates#create_invoice_for_items_estimate, estimates#create_invoice_estimate, hosted_pages#checkout_existing_subscription, hosted_pages#create_checkout_to_update_a_subscription, invoices#create_an_invoice, invoices#create_invoice_for_items_and_one-time_charges, subscriptions#create_a_subscription, subscriptions#create_subscription_for_customer, subscriptions#update_a_subscription, subscriptions#create_subscription_for_items, subscriptions#update_subscription_for_items, subscriptions#reactivate_a_subscription, subscriptions#cancel_subscription_for_items and subscriptions#cancel_a_subscription endpoints.
* coupon_ids has been added to invoices#create_invoice_for_a_one-time_charge, invoice#create_invoice_for_a_non-recurring_addon, quotes#create_quote_for_one-time_charges, quotes#edit_quote_for_one-time_charges, quotes#create_a_quote_for_charge_and_charge_items, quotes#edit_quote_for_charge_items_and_charges endpoints.
* change_option and changes_scheduled_at have been added in quotes#create_quote_for_updating_a_subscription, quotes#edit_quote_for_updating_a_subscription, quotes#create_a_quote_for_update_subscription_items, quotes#edit_update_subscription_quote_for_items, subscriptions#update_a_subscription and subscriptions#create_subscription_for_items endpoints.
* invoice_date, create_pending_invoices and first_invoice_pending have been added in quotes#convert_a_quote endpoint.
* subscription[auto_close_invoices] has been added in quotes#convert_a_quote endpoint.

#### New Enum values:
* subscription_cancel has been added to charge_event enum in quote_line_groups resource.
* subscription_created_with_backdating, subscription_changed_with_backdating, subscription_canceled_with_backdating, subscription_reactivated_with_backdating, invoice_generated_with_backdating and credit_note_created_with_backdating have been added to event_type enum 
* change_option enum has been added.

#### Deprecated parameters:
* coupon has been deprecated in invoices#create_invoice_for_a_one-time_charge and invoices#create_invoice_for_a_non-recurring_addon endpoints.

### v2.8.3 (2021-07-22)
* * *
#### New endpoints:
* hosted_pages#checkout_one_time_for_items and hosted_pages#checkout_gift_for_items have been added in hosted_pages resource. 
* orders#resend_an_order has been added in orders resource.
* quotes#edit_create_subscription_quote_for_items, quotes#edit_update_subscription_quote_for_items and quotes#edit_quote_for_charge_items_and_charges have been added in quotes resource. Applicable only for Product Catalog V2.

#### New attributes:
* accounting_category3 and accounting_category4 have been added to addon, item_price and plan resources. 
* quantity_in_decimal has been added to attached_item resource.
* period and period_unit have been added to coupon resource.
* entity_id has been added to line_item_discounts object of credit_note, credit_note_estimate, invoice, invoice_estimate, quote and quote_line_group resources. 
* vat_number_prefix has been added to credit_note, customer, invoice and quote resources.
* price_in_decimal has been added to differential_price and item_price resources. 
* exchange_rate and new_sales_amount have been added to invoice resource.
* archived_at has been added to item and item_price resources.
* trial_end_action has been added to item_price, plan, subscription and subscription_estimate resources.
* resent_orders, tracking_url, resent_status, is_resent, original_order_id and resend_reasons have been added to order resource. 
* line_item_tiers have been added to quote resource.
* plan_quantity_in_decimal and plan_unit_price_in_decimal have been added to quoted_subscription and subscription resources. Applicable only for Product Catalog V1.
* contract_term_billing_cycle_on_renewal and quoted_contract_term have been added to quoted_subscription resource.
* quantity_in_decimal, metered_quantity, last_calculated_at, unit_price_in_decimal, amount_in_decimal and free_quantity_in_decimal have been added to subscription_items object of quoted_subscription and subscription resources.
* starting_unit_in_decimal, ending_unit_in_decimal and price_in_decimal have been added to item_tiers object in quoted_subscription resources.
* cancel_schedule_created_at has been added to subscription resource.
* exchange_rate and merchant_reference_id have been added to transaction resource.

#### New parameters:
* accounting_category3 and accounting_category4 have been added in addons#create_an_addon, addons#update_an_addon, plans#create_a_plan and plans#update_a_plan endpoints.
* quantity_in_decimal has been added in attached_items#create_an_attached_item, attached_items#update_an_attached_item and gifts#create_a_gift_subscription_for_items endpoints.
* period and period_unit have been added in coupons#create_a_coupon, coupons#update_a_coupon, coupons#create_a_coupon_for_items and coupons#update_a_coupon_for_items endpoints.
* vat_number_prefix has been added in customers#create_a_customer, customers#update_billing_info_for_a_customer, estimates#create_subscription, estimates#create_subscription_estimate, estimates#create_subscription_for_items, estimates#create_subscription_for_items_estimate, estimates#update_subscription_for_items, estimates#update_subscription, hosted_pages#checkout_new_subscription, hosted_pages#checkout_one-time_payments, hosted_pages#create_checkout_for_a_new_subscription hosted_pages#checkout_existing_subscription, hosted_pages#create_checkout_to_update_a_subscription, invoices#import_invoice, invoices#update_invoice_details, subscriptions#create_a_subscription, subscriptions#update_a_subscription, subscriptions#update_subscription_for_items and subscriptions#import_a_subscription endpoints.
* payment_method[additional_information] has been added in customers#create_a_customer, customers#update_payment_method_for_a_customer,  customers#collect_payment_for_customer, invoices#create_an_invoice, invoices#create_invoice_for_items_and_one-time_charges, subscriptions#create_a_subscription, subscriptions#update_a_subscription, subscriptions#update_subscription_for_items and subscriptions#import_a_subscription endpoints.
* card[additional_information] has been added in customers#create_a_customer, customers#collect_payment_for_customer, invoices#create_an_invoice, invoices#create_invoice_for_items_and_one-time_charges, payment_sources#create_a_card_payment_source, subscriptions#create_a_subscription, subscriptions#update_a_subscription, subscriptions#update_subscription_for_items and subscriptions#import_a_subscription endpoints.
* bank_account[billing_address] has been added in customers#create_a_customer, invoices#create_an_invoice, invoices#create_invoice_for_items_and_one-time_charges, payment_sources#create_a_bank_account_payment_source and subscriptions#create_a_subscription endpoints.
* price_in_decimal has been added in differential_prices#create_a_differential_price and differential_prices#update_a_differential_price endpoints.
* tiers[starting_unit_in_decimal][0..N], tiers[ending_unit_in_decimal][0..N] and tiers[price_in_decimal][0..N] have been added in differential_prices#create_a_differential_price, differential_prices#update_a_differential_price, item_prices#create_an_item_price and item_prices#update_an_item_price endpoints.
* remove_general_note and notes_to_remove been added in estimates#create_invoice_estimate, estimates#create_invoice_for_items_estimate and invoices#create_invoice_for_items_and_one-time_charges endpoints.
* trial_end_action has been added in estimates#create_subscription, estimates#create_subscription_estimate, estimates#create_subscription_for_items, estimates#create_subscription_for_items_estimate, estimates#update_subscription_for_items, estimates#update_subscription, plans#create_a_plan, plans#update_a_plan, item_prices#create_an_item_price, item_prices#update_an_item_price, subscriptions#create_a_subscription, subscriptions#create_subscription_for_customer, subscriptions#create_subscription_for_items, subscriptions#update_a_subscription and subscriptions#update_subscription_for_items endpoints.
* subscription_items[unit_price_in_decimal][0..N], item_tiers[starting_unit][0..N], item_tiers[ending_unit][0..N] and item_tiers[price_in_decimal][0..N] have been added in estimates#create_subscription_for_items, estimates#create_subscription_for_items_estimate, estimates#update_subscription_for_items, estimates#update_subscription, estimates#cancel_subscription_for_items_estimate, hosted_pages#create_checkout_for_a_new_subscription, hosted_pages#create_checkout_to_update_a_subscription, subscriptions#create_subscription_for_items, subscriptions#update_subscription_for_items and subscriptions#import_subscription_for_items endpoints.
* subscription_items[quantity_in_decimal][0..N] has been added in estimates#create_subscription_for_items, estimates#create_subscription_for_items_estimate, estimates#cancel_subscription_for_items_estimate, estimates#update_subscription_for_items, estimates#update_subscription, estimates#gift_subscription_for_items, estimates#cancel_subscription_for_items_estimate, gifts#create_a_gift_subscription_for_items, hosted_pages#create_checkout_for_a_new_subscription, hosted_pages#create_checkout_to_update_a_subscription, subscriptions#create_subscription_for_items, subscriptions#update_subscription_for_items, subscriptions#import_subscription_for_items and subscriptions#cancel_subscription_for_items endpoints.
* notes_to_remove[entity_type][0..N] and notes_to_remove[entity_id][0..N] have been added in estimates#create_invoice, estimates#create_invoice_for_items and invoices#create_invoice_for_items_and_one-time_charges endpoints.
* item_prices[quantity_in_decimal][0..N] and item_prices[unit_price_in_decimal][0..N] have been added in estimates#create_invoice_for_items, invoices#create_invoice_for_items_and_one-time_charges and unbilled_charges#create_unbilled_charges_for_a_subscription endpoints.
* item_tiers[starting_unit_in_decimal][0..N], item_tiers[ending_unit_in_decimal][0..N] and item_tiers[price_in_decimal][0..N] have been added in estimates#create_invoice_for_items, invoices#create_invoice_for_items_and_one-time_charges and unbilled_charges#create_unbilled_charges_for_a_subscription endpoints.
* payment_intent[additional_information] has been added in customers#create_a_customer, customers#collect_payment_for_customer, gifts#create_a_gift_subscription_for_items, gifts#create_a_gif and payment_sources#create_using_payment_intent endpoints.
* invoice_note has been added in hosted_pages#checkout_one-time_payments endpoint.
* allow_offline_payment_methods has been added in hosted_pages#create_checkout_for_a_new_subscription and hosted_pages#create_checkout_to_update_a_subscription endpoints.
* free_quantity_in_decimal, price_in_decimal and trial_end_action have been added in item_prices#create_an_item_price and item_prices#update_an_item_price endpoints.
* tracking_url has been added in orders#create_an_order, orders#update_an_order and orders#import_an_order endpoints.
* additional_information has been added in payment_sources#create_using_gateway_temporary_token and payment_sources#create_using_permanent_token endpoints.

#### New enum values:
* bancontact has been added to card_type enum.
* card and latam_local_card have been added to powered_by enum.
* item_level_discount and document_level_discount have been added to entity_type enum of credit_note_discount, credit_note_estimate_discount, invoice_discount, line_item_discount and invoice_estimate_discount resources.
* item_level_discount and document_level_discount have been added to discount_type enum.
* add_usages_reminder and order_resent have been added to event_type enum.
* ingenico_direct and exact have been added to gateway enum. 
* max_usage has been added to usage_calculation enum.
* trial_end_action enum has been added.
* order_resent has been added to cancellation_reason enum.
* resent_status enum has been added.
* custom_discount has been added in discount_type enum of order_line_item_discount. 

#### New filter parameters:
* resent_status, is_resent and original_order_id filter parameters have been added in exports#orders and orders#list_orders enpoints.
* updated_at filter parameter has been added in exports#item_families and item_families#list_item_families endpoints.

#### New sort parameters:
* name, id and updated_at sort parameters are added to items#list_items and item_prices#list_item_prices endpoints.
* created_at and updated_at sort parameters are added to payment_sources#list_payment_sources endpoint.
* usage_date sort parameter has been added to usages#list_usages endpoint.

#### Deprecated parameters:
* duration_month parameter has been deprecated in coupon resource.

### v2.8.2 (2021-02-04)
* * *
* fixed: missing requires for Product Catalog V2 resources.

### v2.8.1 (2021-01-19)
* * *
##### New resources:
* Usages is added. Applicable only for Product Catalog V2

##### New end points:
* hosted_pages#checkout_one-time_payments has been added in hosted_pages resource

##### New attributes:
* auto_close_invoices has been added to customers, subscriptions resources
* metered, usage_calculation have been added to items resources
* create_pending_invoices, auto_close_invoices have been added to subscriptions resources

##### New parameters:
* auto_close_invoices has been added to the endpoint: customers#create_a_customer, customers#list_customers, customers#update_a_customer
* invoice_allocations[invoice_id] has been added to the endpoint: customers#collect_payment_for_customer
* coupon_ids has been added to the endpoint: estimates#create_invoice_for_items_estimate. Applicable only for Product Catalog V2
* subscription[auto_close_invoices] has been added to the endpoint: exports#export_revenue_recognition_reports, exports#export_deferred_revenue_reports, exports#export_subscriptions
* customer[auto_close_invoices] has been added to the endpoint: exports#export_revenue_recognition_reports, exports#export_deferred_revenue_reports, exports#export_customers
* item[metered], item[usage_calculation] have been added to the endpoint: exports#export_items. Applicable only for Product Catalog V2
* subscription_id has been added to the endpoint: invoices#add_one-time_charge_to_a_pending_invoice, invoices#add_non-recurring_addon_to_a_pending_invoice
* subscription_id has been added to the endpoint: invoices#add_a_charge-item_to_a_pending_invoice. Applicable only for Product Catalog V2
* metered, usage_calculation have been added to the endpoint: items#create_an_item, items#list_item. Applicable only for Product Catalog V2
* create_pending_invoices, auto_close_invoices, first_invoice_pending have been added to the endpoint: subscriptions#create_subscription_for_items, subscriptions#update_subscription_for_items,subscriptions#import_subscription_for_items. Applicable only for Product Catalog V2
* create_pending_invoices, auto_close_invoices have been added to the endpoint: subscriptions#list_subscriptions

### v2.8.0 (2020-12-15)
* * *
##### New end points:
* estimate_for_creating_a_customer_and_subscription, cancel_subscription_for_items_estimate, gift_subscription_estimate_for_items have been added in estimate resource. Applicable only for Product Catalog V2
* regenerate_invoice_estimate has been added in estimate resource
* create_a_gift_subscription_for_items has been added in gift resource. Applicable only for Product Catalog V2
* regenerate_invoice has been added in subscription resource

##### New attributes:
* show_description_in_invoices, show_description_in_quotes have been added to the resource item_prices
* tiers[starting_unit_in_decimal], tiers[ending_unit_in_decimal], tiers[price_in_decimal] have been added to the resource differential_prices
* show_description_in_invoices, show_description_in_quotes have been added to the resource item_prices. Applicable only for Product Catalog V2

##### New parameters:
* payment_intent[additional_info] has been added to the endpoints customers#create_a_customer, invoices#create_an_invoice, payment_sources#create_using_payment_intent, subscriptions#create_a_subscription, subscriptions#update_a_subscription, subscriptions#create_subscription_for_customer, subscriptions#reactivate_a_subscription, subscriptions#resume_a_subscription
* payment_intent[additional_info] has been added to the endpoints gifts#create_a_gift_subscription_for_items, invoices#create_invoice_for_items_and_one-time_charges, subscriptions#create_subscription_for_items, subscriptions#update_subscription_for_items. Applicable only for Product Catalog V2
* contract_term[action_at_term_end], contract_term[cancellation_cutoff_period], subscription[contract_term_billing_cycle_on_renewal] has been added to the endpoint estimates#estimate_for_creating_a_subscription. Applicable only for Product Catalog V2
* cancel_at, contract_term_cancel_option, cancel_reason_code have been added to the endpoint estimates#cancel_subscription_for_items_estimate
* event_based_addons has been added to the endpoint estimates#cancel_subscription_for_items_estimate
* redirect_url has been added to the endpoint hosted_pages#accept_a_quote
* token_id, retain_payment_source, card, bank_account, payment_method added have been added to the endpoint invoices#create_an_invoice
* token_id, retain_payment_source, card, bank_account, payment_method added have been added to the endpoint invoices#create_invoice_for_items_and_one-time_charges. Applicable only for Product Catalog V2
* show_description_in_invoices, show_description_in_quotes have been added to the endpoints item_prices#create_an_item_price, item_prices#update_an_item_price. Applicable only for Product Catalog V2

### v2.7.9 (2020-11-26)
* * *
##### New resources:
item_family, item, item_price, attached_item and differential_price are added. Applicable only for Product Catalog V2

##### New end points:
* coupons#create_a_coupon_for_items and coupons#update_a_coupon_for_items have been added in coupon resource. Applicable only for Product Catalog V2
* estimates#estimate_for_creating_a_subscription, estimates#estimate_for_updating_a_subscription and estimates#create_invoice_for_items_estimate have been added in estimate resource. Applicable only for Product Catalog V2
* estimates#advance_invoice_estimate has been added in estimate resource
* exports#export_item_families, exports#export_items, exports#export_item_prices, exports#export_attached_items and exports#export_differential_price have been added in export api. Applicable only for Product Catalog V2
* checkout_new_for_items and checkout_existing_for_items have been added in hosted_pages api. Applicable only for Product Catalog V2
* invoices#create_invoice_for_items_and_one-time_charges, invoices#create_invoice_for_a_charge-item and invoices#add_a_charge-item_to_a_pending_invoice have been added in invoice resource. Applicable only for Product Catalog V2
* quotes#create_a_quote_for_a_new_subscription_items, quotes#create_a_quote_for_update_subscription_items and quotes#create_a_quote_for_charge_and_charge_items have been added in quote resource. Applicable only for Product Catalog V2
* subscriptions#create_subscription_for_items, subscriptions#update_subscription_for_items, subscriptions#import_subscription_for_items and subscriptions#cancel_subscription_for_items have been added in subscription resource. Applicable only for Product Catalog V2
* subscriptions#edit_advance_invoice_schedule, subscriptions#retrieve_advance_invoice and subscriptions#remove_an_advance_invoice_schedules have been added in subscription resource
* unbilled_charges#create_an_invoice_for_unbilled_charges has been added to unbilled_charge resource

##### New attributes:
* item_constraints and item_constraint_criteria have been added in coupon resource. Applicable only for Product Catalog V2
* success_url and failure_url have been added in payment_intent resource
* subscription_items and item_tiers have been added in quoted_subscription resource. Applicable only for Product Catalog V2
* has_scheduled_advance_invoices has been added in subscription resource
* subscription_items, item_tiers and charged_items have been added in subscription resource. Applicable only for Product Catalog V2

##### New parameters:
* item_id and item_price_id have been added to the end point: subscriptions#list_subscriptions, exports#export_revenue_recognition_reports, exports#export_deferred_revenue_reports, exports#export_subscriptions. Applicable only for Product Catalog V2
* invoice_immediately, schedule_type and fixed_interval_schedule have been added to the end point: subscriptions#charge_future_renewals
*  success_url and failure_url have been added to the end points: payment_intents#create_a_payment_intent, payment_intents#update_a_payment_intent

##### New Enum values:
* PLAN_ITEM_PRICE, ADDON_ITEM_PRICE, CHARGE_ITEM_PRICE are added to Entitytype Enum
* ITEM_FAMILY_CREATED, ITEM_FAMILY_UPDATED, ITEM_FAMILY_DELETED, ITEM_CREATED, ITEM_UPDATED, ITEM_DELETED, ITEM_PRICE_CREATED, ITEM_PRICE_UPDATED, ITEM_PRICE_DELETED, ATTACHED_ITEM_CREATED, ATTACHED_ITEM_UPDATED, ATTACHED_ITEM_DELETED, DIFFERENTIAL_PRICE_CREATED, DIFFERENTIAL_PRICE_UPDATED, DIFFERENTIAL_PRICE_DELETED are added to EventType Enum

### v2.7.8 (2020-11-16)
* * *
* New attributes price_in_decimal, tiers[starting_unit_in_decimal], tiers[ending_unit_in_decimal], tiers[price_in_decimal] have been added to the resource addon
* New input parameters price_in_decimal, tiers[starting_unit_in_decimal], tiers[ending_unit_in_decimal], tiers[price_in_decimal] have been added to addons#create_an_addon, addons#update_an_addon apis.
* New attributes unit_amount_in_decimal, quantity_in_decimal, amount_in_decimal, line_item_tiers[starting_unit_in_decimal], line_item_tiers[ending_unit_in_decimal], line_item_tiers[quantity_used_in_decimal], line_item_tiers[unit_amount_in_decimal] have been added to the resources credit_note, credit_note_estimate, invoice, invoice_estimate
* New input parameters line_items[unit_amount_in_decimal], line_items[quantity_in_decimal] have been added to credit_notes#create_credit_note api.
* New input parameters subscription[plan_unit_price_in_decimal], subscription[plan_quantity_in_decimal], addons[quantity_in_decimal], addons[unit_price_in_decimal], event_based_addons[quantity_in_decimal], event_based_addons[unit_price_in_decimal] have been added to estimates#create_subscription_estimate, estimates#create_subscription_for_a_customer_estimate, estimates#update_subscription_estimate, hosted_pages#checkout_new_subscription, hosted_pages#checkout_existing_subscription, quotes#create_a_quote_for_a_new_subscription,  quotes#edit_create_subscription_quote, quotes#create_a_quote_for_update_subscription, quotes#edit_update_subscription_quote,  apis
* New input parameters subscription[plan_quantity_in_decimal], addons[quantity_in_decimal] have been added to estimates#gift_subscription_estimate, gifts#create_a_gift, hosted_pages#checkout_gift_subscription apis
* New input parameters addons[quantity_in_decimal], addons[unit_price_in_decimal], charges[amount_in_decimal] have been added to estimates#create_invoice_estimate, invoices#create_an_invoice, quotes#create_a_quote_for_one-time_charges, quotes#edit_one-time_quote apis
* New input parameter amount_in_decimal has been added to invoices#create_invoice_for_a_one-time_charge api
* Input parameter amount has been made optional to invoices#create_invoice_for_a_one-time_charge api
* New input parameters addon_quantity_in_decimal, addon_unit_price_in_decimal have been added to invoices#create_invoice_for_a_non-recurring_addon
* New input parameters line_items[unit_amount_in_decimal], line_items[quantity_in_decimal], line_items[amount_in_decimal], line_item_tiers[starting_unit_in_decimal], line_item_tiers[ending_unit_in_decimal], line_item_tiers[quantity_used_in_decimal], line_item_tiers[unit_amount_in_decimal] have been added to invoices#import_invoice api
* Input parameters line_item_tiers[starting_unit], line_item_tiers[ending_unit], line_item_tiers[quantity_used], line_item_tiers[unit_amount] have beed made optional in invoices#import_invoice api
* New input parameters addon_quantity_in_decimal, addon_unit_price_in_decimal have been added to invoices#add_non-recurring_addon_to_a_pending_invoice api
* New input parameter invoice_date has been added to invoices#close_a_pending_invoice api
* New attributes tiers[starting_unit_in_decimal], tiers[ending_unit_in_decimal], tiers[price_in_decimal], attached_addons[quantity_in_decimal], event_based_addons[quantity_in_decimal], free_quantity_in_decimal, price_in_decimal have been added to the resource plan
* New input parameters tiers[starting_unit_in_decimal], tiers[ending_unit_in_decimal], tiers[price_in_decimal], attached_addons[quantity_in_decimal], event_based_addons[quantity_in_decimal], free_quantity_in_decimal, price_in_decimal have been added to plans#create_a_plan, plans#update_a_plan apis
* New attribute amount_in_decimal has been added to the resource promotional_credit
* New input parameter amount_in_decimal has been added to promotional_credits#add_promotional_credits, promotional_credits#deduct_promotional_credits, promotional_credits#set_promotional_credits apis
* Input parameter amount has been made optional in promotional_credits#add_promotional_credits, promotional_credits#deduct_promotional_credits, promotional_credits#set_promotional_credits apis
* New attributes unit_amount_in_decimal, quantity_in_decimal, amount_in_decimal have been added to the resource quote
* New attributes addons[quantity_in_decimal], addons[unit_price_in_decimal], addons[amount_in_decimal], event_based_addons[quantity_in_decimal], event_based_addons[unit_price_in_decimal] have been added to the sub resource quoted_subscription
* New attributes unit_amount_in_decimal, quantity_in_decimal, amount_in_decimal have been added to the sub resource quoted_line_group
* New attributes addons[quantity_in_decimal], addons[unit_price_in_decimal], addons[amount_in_decimal], event_based_addons[quantity_in_decimal], event_based_addons[unit_price_in_decimal], plan_free_quantity_in_decimal, plan_quantity_in_decimal, plan_unit_price_in_decimal, plan_amount_in_decimal have been added to the resource subscription
* New input parameters plan_unit_price_in_decimal, plan_quantity_in_decimal, addons[quantity_in_decimal], addons[unit_price_in_decimal], event_based_addons[quantity_in_decimal], event_based_addons[unit_price_in_decimal] have been added to subscriptions#create_a_subscription, subscriptions#create_subscription_for_customer, subscriptions#update_a_subscription, subscriptions#import_a_subscription, subscriptions#import_subscription_for_customer apis
* New input parameter amount_in_decimal has been added to subscriptions#add_charge_at_term_end apis
* Input parameter amount has been made optional in subscriptions#add_charge_at_term_end apis
* New input parameters addon_quantity_in_decimal, addon_unit_price_in_decimal have been added to subscriptions#charge_addon_at_term_end api
* New attributes tiers[starting_unit_in_decimal], tiers[ending_unit_in_decimal], tiers[quantity_used_in_decimal], tiers[unit_amount_in_decimal], unit_amount_in_decimal, quantity_in_decimal, amount_in_decimal have been added to the resource unbilled_charge
* New endpoint transactions#refund_a_payment has been added to the resource transaction
### v2.7.7 (2020-10-19)
* * *
* New optional attribute quoted_subscriptions has been added to the resource quote
* New optional attributes resource_version and updated_at are added to the resource payment_intent
### v2.7.6 (2020-09-29)
* * *

* New attribute included_in_mrr has been added in addon and coupon resource
* New attribute offline_payment_method has been added in subscription and customer resource
* New input parameter included_in_mrr has been added in create_an_addon, update_an_addon, create_a_coupon and update_a_coupon apis.
* New input parameter offline_payment_method has been added in create_a_customer, list_customers, update_a_customer, create_a_subscription, create_subscription_for_customer and list_subscriptions apis
* New input parameter auto_collection has been added in update_a_subscription
* New input parameter subscription[offline_payment_method] has been added in create_subscription_estimate, create_subscription_for_a_customer_estimate, update_subscription_estimate, export_revenue_recognition_reports, export_deferred_revenue_reports, export_subscriptions, checkout_new_subscription and checkout_existing_subscription apis
* New input parameter subscription[auto_collection] has been added in checkout_existing_subscription and update_subscription_estimate apis
* New input parameter customer[offline_payment_method] has been added in export_revenue_recognition_reports, export_deferred_revenue_reports, export_customers and create_a_subscription

### v2.7.5 (2020-09-09)
* * *

* New input parameter currency_code is added in list_addons, list_coupons, list_plans, export_plans, export_addons, export_coupons apis
* New attributes powered_by has been added in card resource
* New input parameters subscription[free_period], subscription[free_period_unit] have been added in create_subscription_estimate, create_subscription_for_a_customer_estimate, update_subscription_estimate apis
* Input parameter invoice[customer_id] is made optional in create_invoice_estimate api
* Input parameter customer_id is made optional in create_an_invoice
* Attribute created_at in dunning_attempts is made optional in the invoice resource
* New attributes free_period and free_period_unit have been added in the Subscription resource
* New enum type free_period_unit has been added with the values:
	DAY,
	WEEK,
	MONTH,
	YEAR
* New enum type powered_by has been added in card resource with the values: 
	IDEAL,
    SOFORT,
    BANCONTACT,
    GIROPAY,
    NOT_APPLICABLE
* New endpoint import_contract_term has been added to the subscription resource
* Attributes status, amount and date inside the linked_payment are made optional in the transaction resource
* New endpoint delete has been added to the virtual_bank_account resource
* New values GIROPAY and DOTPAY have been added to the payment_method_types enum
* New values PAYMENT_SOURCE_EXPIRING and PAYMENT_SOURCE_EXPIRED have been added to the event_type enums
* New value PAYPAL has been added to the gateway enum

### v2.7.4 (2020-07-15)
* * *

* New attributes show_description_in_invoices, show_description_in_quotes have been added in Addon, Plan resource
* New input parameters show_description_in_invoices, show_description_in_quotes have been added for create_an_addon, update_an_addon, create_a_plan, update_a_plan apis
* New attribute create_reason_code has been added in Credit notes resource
* Attribute reason_code is made optional in the Credit notes resource
* New filter parameter create_reason_code is added in list_credit_notes api
* New input parameter refund_reason_code has been added in Credit notes' Refund, Record a refund apis
* Sub-resources parent_account_access and child_account_access have been added in Customer resource
* New attribute use_default_hierarchy_settings has been added in Customer resource
* New endpoint update_hierarchy_settings has been added in Customer resource
* New input parameters use_default_hierarchy_settings,  parent_account_access, child_account_access have been added in link_a_customer api
* New input parameter invoice_notes, coupon_ids, invoice[subscription_id], charges[taxable], charges[tax_profile_id], charges[avalara_tax_code], charges[taxjar_product_code] has been added to create_invoice_estimate api
* New input param cancel_reason_code has been added to export_revenue_recognition_reports, export_deferred_revenue_reports, export_subscriptions, export_credit_notes apis
* New input param coupon_ids has been added to checkout_new_subscription, checkout_existing_subscription apis
* Input param subscription_coupon has been deprecated in checkout_new_subscription, checkout_existing_subscription apis
* New attribute void_reason_code has been added to the Invoice resource
* Attribute cn_reason_code has been made optional in applied_credits, adjustment_credit_notes, issued_credit_notes, linked_credit_note sub-resources
* New attribute cn_create_reason_code has been added in applied_credits, adjustment_credit_notes, issued_credit_notes, linked_credit_note sub-resources
* New input parameter subscription_id, invoice_note, remove_general_note, coupon_ids, charges[taxable], charges[tax_profile_id], charges[avalara_tax_code], charges[taxjar_product_code] have been added to create_an_invoice api
* Input parameter coupon is deprecated from create_an_invoice api
* New filter parameter void_reason_code has been added to list_invoices api
* New input parameter invoice_note, remove_general_note, notes_to_remove[entity_type], notes_to_remove[entity_id] have been added to close_a_pending_invoice api
* New input parameter void_reason_code has been added to void_an_invoice api
* New input parameter credit_note[create_reason_code] has been added to refund_an_invoice, record_refund_for_an_invoice api
* New endpoints import_an_order and delete_an_imported_order have been added to Order resource
* New filter parameter exclude_deleted_credit_notes has been added to list_orders api
* New attribute payment_method_type has been added to payment_intent resource and active_payment_attempt sub-resource
* New input parameter payment_method_type has been added to create_a_payment_intent, update_a_payment_intent api
* New attributes version, contract_term_start, contract_term_end, contract_term_termination_fee have been added to Quotes resource
* New endpoints edit_create_subscription_quote, edit_update_subscription_quote, edit_one_time_quote, extend_expiry_date have beed added to Quotes resource
* New input parameters contract_term[action_at_term_end], contract_term[cancellation_cutoff_period], subscription[contract_term_billing_cycle_on_renewal] have been added to create_a_quote_for_a_new_subscription, create_a_quote_for_update_subscription apis
* New attribute version has been added to quote_line_group sub-resource
* New attribute cancel_reason_code has been added to Subscriptions resource
* New filter parameter cancel_reason_code has been added to list_subscriptions, cancel_a_subscription apis
* New input parameter contract_term_billing_cycle_on_renewal has been added to import_a_subscription, import_subscription_for_customer apis
* New input parameter event_based_addon has been added to cancel_a_subscription api
* New filter parameter is_voided has been added to list_unbilled_charges api
* New event_types MRR_UPDATED, ORDER_DELETED have been added
* New values SOFORT, BANCONTACT have been added to the payment_method_types enum
* New attributes entity_type_description has been added to the line_items sub-resource

### v2.7.3 (2020-04-03)
* * *

* A subresource contract_term has been added in Subscription resource
* New endpoint refund_a_credit_note has been added in Credit notes resource
* New endpoint list_quote_line_groups has been added in Quotes resource
* New endpoint list_contract_terms_for_a_subscription has been added in Subscriptions resource
* New input parameter contract_term_billing_cycle_on_renewal, contract_term[action_at_term_end], contract_term[cancellation_cutoff_period] has been added in create_a_subscription, create_subscription_for_customer, update_a_subscription and reactivate_a_subscription apis
* New input parameter contract_term_cancel_option has been added in cancel_a_subscription api
* New input parameter contract_term[action_at_term_end], contract_term[cancellation_cutoff_period], subscription[contract_term_billing_cycle_on_renewal] has been added in create_subscription_estimate, create_subscription_for_a_customer_estimate, checkout_new_subscription, checkout_existing_subscription apis
* New input parameter business_customer_without_vat_number has been added in create_a_customer and update_billing_info_for_a_customer apis
* New input parameter addons[service_period] replaces the parameter addons[date_from] and addons[date_to] in create_a_quote_for_one-time_charges api
* New input parameter charges[service_period] replaces the parameter charges[date_from] and charges[date_to] in create_a_quote_for_one-time_charges api
* New input parameter consolidated_view has been added in retrieve_quote_as_pdf api
* New input parameter customer[business_customer_without_vat_number] has been added in create_a_subscription, update_a_subscription apis
* New value CHECKOUT_COM has been added in gateway enum
* New value CONTRACT_TERMINATION has been added to eventBasedAddons onEvent enum
* New values IDEAL, GOOGLE_PAY has been added to payment types enum
* New event types CONTRACT_TERM_CREATED, CONTRACT_TERM_RENEWED, CONTRACT_TERM_TERMINATED, CONTRACT_TERM_COMPLETED, CONTRACT_TERM_CANCELLED have been added

### v2.7.2(2020-02-06)
* * *

* New attribute total_payable and charge_on_aaceptance has been added in Quote.java
* New input parameter cancel_at has been added in cancel_a_subscription api

### v2.7.1(2020-01-08)
* * * 

* New attribute taxjar_product_code has been added in Addon and Plan resource.
* New input parameter taxjar_product_code has been added in create_an_addon, update_an_addon, create_a_plan and update_a_plan api
* New input parameter taxjar_exemption_category has been added in create_a_customer, update_a_customer , create_a_subscription and import_a_subscription api
* New input parameter no_expiry has been added in gift_subscription_estimate and create_a_gift api
* New attribute no_expiry has been added in Gift resource
* New endpoint update_gift has been added in Gift resource
* New value BUSINESS_CHECKING has been added in AccountType enum
* New value CCD has been added in EcheckType enum
* New event type GIFT_UPDATED has been added
* New enum taxjar_exemption_category has been added

### v2.7.0(2019-10-25)
* * * 

* Fix - Added CustomerRelationship to chargebee.php

### v2.6.9 (2019-09-13)
* * *

* New endpoints gift_subscription_estimate and create_invoice_estimate have been added in estimate resource.
* New input parameter reference_id in payment_intent has been added in create_a_gift, create_an_invoice, create_using_payment_intent, create_a_subscription, create_subscription_for_customer, update_a_subscription, reactivate_a_subscription, resume_a_subscription, create_a_customer and collect_payment_for_customer api.
* New endpoint record_refund_for_a_payment has been added in transaction resource.

### v2.6.8 (2019-08-27)
* * * 

* New attribute client_profile_id has been added in customer resource.
* New input parameter client_profile_id has been added in create_a_customer, update_a_customer, create_subscription_estimate, create_a_subscription and import_a_subscription api.
* New input parameter payment_intent has been added in create_a_gift, create_an_invoice, reactivate_a_subscription and resume_a_subscription api.
* New input parameter replace_primary_payment_source has been added in create_an_invoice api.
* New attribute currency_code has been added in payment_intent resource.

### v2.6.7 (2019-08-14)
* * *

* New resource payment_intent has been added.
* New input parameter 'id' in payment_intent sub-param has been added in create_a_customer, collect_payment_for_customer, create_using_payment_intent, create_a_subscription, create_subscription_for_customer and update_a_subscription .
* New event_types PAYMENT_INTENT_CREATED and PAYMENT_INTENT_UPDATED have been added.

### v2.6.6 (2019-08-07)
* * *

* New attributes tax_amount_in_local_currency and local_currency_code have been added in line_item_tax sub-resource of credit_note, credit_note_estimate, invoice, invoice_estimate, order and quote resources.
* New attributes sub_total_in_local_currency, total_in_local_currency and local_currency_code have been added in credit_note and invoice resources.
* New input parameter gw_payment_method_id has been added in create_a_customer, collect_payment_for_customer, create_using_payment_intent, create_a_subscription, create_subscription_for_customer and update_a_subscription api.
* New attributes name, invoice_id and notes have been added in quote resource.
* New input parameters name, notes and expires_at have been added in create_a_quote_for_a_new_subscription, create_a_quote_for_update_subscription and create_a_quote_for_one-time_charges api.
* New input parameters id, auto_collection and po_number have been added in convert_a_quote api.

### v2.6.5 (2019-07-22)
* * *

* The attribute ref_tx_id has been added in card resource.
* The attribute custmer_id has been added in credit_note_estimate and invoice_estimate resource.
* The input parameters payment_intent with gateway_account_id and gw_token have been added in create a customer, collect payment for customer, create subscription and create subscription for customer API.
* New enum dunning_type has been added.
* New value vantiv has been added in the gateway enum.
* New value sepa_credit has been added in payment method enum. 
* The attribute dunning_attempts has been added in invoice resource.
* New enpoint create_using_payment_intent has been added in payment_source resouce.
* The input parameter reference_transaction has been added in update card payment source API.
* New endpoint list quote has been added in qoutes resource.
* The attributes initiator_type and three_d_secure have been added in transaction resource.
* New attribute scheme has been added in virtual_bank_account resource.
* New input parameter scheme has been added in create a virtual bank account using permanent token and create a virtual bank account API.

### v2.6.4 (2019-07-08)
* * *

* The resources hierarchy and token are added.
* Value ‘day’ is added in period_unit and shipping_frequency_period_unit .
* The parameters fractional_correction, comment, date_from and date_to are added in Create credit note API.
* The attribute customer_id is added to line_item sub resource of Credit note, Credit note estimate, Invoice, Invoice estimate and Quote.
* Endpoints Link a customer, Delink a customer, Get hierarchy, CreateUsingToken are added.
* The attributes business_customer_without_vat_number and relationship are added to customer resource.
* The filter parameters parent_id, payment_owner_id, invoice_owner_id are added in List customers, Export revenue recognition reports, Export Deferred Revenue Reports and Export customers APIs.
* The parameter token_id is added in Collect payment API.
* Event types hierarchy_created, hierarchy_deleted, token_created, token_consumed and token_expired are added.
* The parameter service_period_in_days is added in Create subscription estimate, Create subscription for customer estimate, Update subscription estimate, Checkout new, Checkout existing, Create subscription for customer quote, Update subscription quote, Create subscription, Create subscription for customer, Update subscription, Import subscription and Import subscription for customer.
* The filter parameter payment_owner is added in Export revenue recognition reports,Export Deferred Revenue Reports, Export Invoice and List Invoice APIs.
* The attribute payment_owner is added to invoice.
* The attributes date_from and date_to are added to Create an invoice, create a invoice for add-on and create a invoice for charge,Create a quote for one-time charges, Add charge at term end and Add add-on at term end.
* The parameter comment is added to Stop dunning, Apply payments, Apply credits, Add charge, Add add-on charge, Update details and Close Invoice APIs.
* The parameter ‘claim_credits’ is added to delete invoice API.
* The attribute override_relationship is added to subscription resource.
* The parameter token_id is added to Create subscription API.
* The parameter override_relationship is added to Create subscription for customer and Update subscription APIs.
* The attribute service_period_in_days is added to event add ons sub resource.

### v2.6.3 (2019-04-11)
* * *

* The attributes avalara_sale_type, avalara_transaction_type and avalara_service_type are added in Addon and plan resource.
* The input parameters avalara_sale_type, avalara_transaction_type , avalara_service_type are added in create addon , update addon  ,create plan , update  plan, create invoice  , create invoice for charge, add_charge , add_charge_at_term_end and create_for_onetime_charges api endpoints.
* The attributes is_partial_tax_applied, is_non_compliance_tax and taxable_amount are added in line_item_taxes of credit_note ,credit_note_estimate , invoice, invoice_estimate , quote and order resources.
* The attributes exemption_details and customer_type are added in customer resource .
* The input parameters exemption_details and customer_type are added in create customer, update customer , create subscription estimate, create subscription and import subscription api endpoints.
* The enum values federal and unincorporated are added in tax_juris_type.
* The enum value export is added in tax_override_reason .
* The input parameter cancelled_at is added in cancel order api endpoint.
* New endpoint delete_local is added in payment_source and virtual_bank_account resources.

### v2.6.2 (2019-03-09)
* * *

* Bug fix when adding headers.

### v2.6.1 (2019-03-07)
* * *

* The attributes created_at, resource_version and updated_at are added in card, payment_source and virtual_bank_account resources.
* The input filter parameter sort_by with updated_at attribute is added in list customer and list subscription api endpoints.
* New endpoint export orders is added in export resource.
* New endpoint accept quote is added in hosted_pages resource.
* The input filter parameters updated_at and created_at are added in list payment_source api endpoint and list virtual_bank_accounts endpoint .
* New endpoint delete an offline transaction is added in transaction resource.

### v2.6.0 (2019-01-10)
* * *

* New event type 'quote_deleted' has been added
* New gateway type 'cybersource' has been added.
* New filter parameters 'subscription_id' and 'order_type' have been added in List Order API.
* New endpoints Create subscription for customer quote, Update subscription quote and Delete have been added to Quote resource.

### v2.5.9 (2018-11-09)
* * *

* New resource 'Quote' with endpoints 'Retrieve a quote', 'Create a quote for one-time charges', 'Convert a quote', 'Update quote status', 'Retrieve quote as PDF' has been added. See : https://apidocs.chargebee.com/docs/api/quotes
* Entity type 'quote' has been added.
* Event types 'quote_created' and 'quote_updated' have been added.


### v2.5.8 (2018-11-02)
* * *

* New resource 'Gift' with endpoints 'Create a gift', 'Retrieve a gift', 'Claim a gift',  'Cancel a gift' and  'List gifts' has been added.
* New event types gift_scheduled, gift_unclaimed, gift_claimed, gift_expired and gift_cancelled have been added.
* New endpoints 'Checkout gift' and 'Claim gift' have been added to Hosted page resource.
* Input param 'redirect_url' has been added in 'Manage payment sources' and 'Collect now' APIs.
* Hosted page types 'checkout_gift' and 'claim_gift' have been added.
* The attributes 'term_finalized' and 'is_gifted' have been added in Invoice attributes.
* The attributes 'is_gifted', 'gift_note' and 'gift_id' have been added in Orders attributes.
* The attribute 'sku' has been added in Gift attributes.
* The input parameter 'sku' has been added in Update orders API.
* The order status 'cancelled' has been added.
* The attributes 'giftable' and 'claim_url' have been added in Plan resource.
* The input parameters 'giftable' and 'claim_url' have been added in Create a plan API.
* List filter parameter 'giftable' has been added in List Plans API.
* The attribute 'gift_id' has been added to Subscription resource.

### v2.5.7 (2018-10-26)
* * *

* The attributes authorization_reason, reference_authorization_id, amount_capturable and linked_payments have been added in Transaction resource.
* The input parameter transaction amount_capturable has been added in export transaction API.
* The input parameters authorization_transaction_id and auto_collection have been added in create invoice API.
* The input parameter authorization_transaction_id has been added in Collect payment for invoice API.
* Type authorization_reason with values blocking_funds and verification has been added in Transaction resource.
* New endpoints "Create an authorization payment " and "Void an authorization transaction" have been in added in Transaction API.
* The input filter parameter amount_capturable has been added in list transactions API.
* The Event types authorization_succeeded, authorization_voided, order_ready_to_process, order_ready_to_ship have been added.

### v2.5.6 (2018-10-17)
* * *

* The attributes pricing_model and tiers has been added in Addon , Plan and UnbilledCharge resources.
* The attribute price is made optional in Plan and Addon resource.
* The input parameters pricing_model, tier_starting_unit, tier_ending_unit and tier_price have been added in Create addon , Update addon , Create Plan and Update Plan APIs.
* The attributes line_item_tiers would be added in creditNote , Invoice , InvoiceEstimate and CreditNoteEstimate resources.
* The attribute pricing_model have been added to line_tem sub-resource of CreditNote , Invoice , InvoiceEstimate and CreditNoteEstimate resources.
* The input parameter line_item_amount has been added in Create credit note API.
* The input parameters line_item_unit_amount and line_item_quantity have been changed to optional parameters in Create Credit Note API.
* The input parameter line_item_id, line_item_tier_line_item_id, line_item_tier_starting_unit, line_item_tier_ending_unit, line_item_tier_quantity_used, line_item_tier_unit_amount have been added in Import invoice API.
* The attribute amount has been added to Addon subResource attributes of Subscription API.
* The attribute plan_amount has been added to Subscription API.
* The type pricing_model with values flat_fee, per_unit, tiered, volume and stairstep have been added.
* The values tiered, volume and stairstep  have been added the attribute type of Addon resource.
* The values tiered, volume and stairstep have been added to the attribute charge_model of Plan resource.
* The input parameter type has been deprecated in Create Addon and Update Addon APIs.
* The input parameter charge_model has been deprecated in Create Plan and Update Plan APIs.
* The filter parameter type has been deprecated in List Addon API.
* The filter parameter charge_model has been deprecated in List Plan API.
* The filter parameter pricing_model has been added to List Plan and List Addon APIs.

### v2.5.5 (2018-10-03)
* * *

* The attributes `is_shippable`, `shipping_frequency_period` and`shipping_frequency_period_unit` has been added in Plan and Addon resource.
* The input parameters `is_shippable`, `shipping_frequency_period` and`shipping_frequency_period_unit` has been added in Create plan , Update plan , Create addonand Update addon APIs.
* The attributes `vat_number_validated_time`, `vat_number_status` and `is_location_valid`has been added in Customer resource.
* The event types `order_created`, `order_updated`, `order_cancelled`, `order_delivered`and `order_returned` has been added.
* New order status `queued`, `awaiting_shipment`, `on_hold`, `delivered`, `shipped`,`partially_delivered` and `returned` has been added.
* New endpoints Export plans , Export addons , Export coupons , Export customers , Export subscriptions , Export invoices , Export creditnotes and Export transactions has been added to Exportst API.
* The input parameter `subscription_affiliate_token` has been added to Checkout New Hosted Pages API.
* The attributes `document_number` and `order_type` has been added to Invoice resource.
* The attributes `document_number`, `customer_id`, `subscription_id`,`cancellation_reason`, `payment_status`, `order_type`, `price_type`, `order_date`,`shipping_date`, `shipment_carrier`, `invoice_round_off_amount`, `tax`, `amount_paid`,`amount_adjusted`, `refundable_credits_issued`, `refundable_credits`,`rounding_adjustement`, `paid_on`, `shipping_cut_off_date`, `delivered_at`,`shipped_at`, `resource_verison`, `updated_at`, `cancelled_at`, `order_line_items`,`shipping_address`, `billing_address`, `discount`, `sub_total`, `total`,`line_item_taxes`, `line_item_discounts`, `linked_credit_notes`, `deleted` and`currency_code` has been added in Order resource.
* The input parameters `shipping_date`, `order_date`, `cancelled_at`,`cancellation_reason`, `shipped_at`, `delivered_at`, `shipment_carrier`,`shipping_address`, `order_line_item` has been added in Update order API.
* The filters `include_deleted`, `shipping_date`, `order_date`, `paid_on` and `updated_at` has been added in List Orders API.
* New endpoints Assign order number , Cancel an order , Create a refundable credit note and Reopen a cancelled order has been added to Orders API.

### v2.5.4 (2018-09-12)
* * *

* The attributes addon_applicability, applicable_addons, attached_addons and event_based_addons has been added to Plan resource.
* The input parameters addon_applicability, applicable_addons, attached_addons and event_based_addons has been added in Create and Update plan APIs.
* The attributes event_based_addons and charged_event_based_addons has been added to Subscription resource.
* The input parameters mandatory_addons_to_remove, event_based_addons and charged_event_based_addons has been added in Create subscription, Create subscription for customer, Update subscription, Create subscription estimate, create subscription for customer estimate, update subscription estimate, checkout new subscription and checkout existing subscription APIs.

### v2.5.3 (2018-08-17)
* * *

* New endpoint 'Clear Personal Data of a customer' has been added to Customer resource.
* New endpoint 'Merge customers' has been added to Customer resource.
* New endpoint 'Extend subscription' has been added to Hosted page resource.
* The input parameter 'charges_handling' has been added to Resume a subscription and Resume a subscription estimate APIs.
* The input parameters 'pause_date' and 'resume_date' has been added to Import subscription and Import subscription for customer APIs.
* New tax_exempt_reason 'high_value_physical_goods' has been added.

### v2.5.2 (2018-06-21)
* * *

* New attribute round_off_amount is added in Credit Note Estimate, Invoice Estimate Object
* Sort List Invoice API results based on invoice updated_at attribute.
* Create Customer and Create Subscription additionally take bank account details as input parameter.
* New API end point in Hosted Page resource to retrieve direct debit agreement payment PDF
* New Enum AccountHolderType, AccountType, Echeck Type has been added in  Payment Source
* New attribute echeck, account_holder_type, last4 has been added
* New API end points create bank account payment source and verify bank account payment source has been added


### v2.5.1 (2018-05-23)
* * *

* New Resource [Export](https://apidocs.chargebee.com/docs/api/exports) has been added
* New payment gateway bluesnap has been added


### v2.5.0 (2018-05-14)
* * * 

New endpoint 'List contacts for a customer' has been added to Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#list_of_contacts_for_a_customer

### v2.4.9 (2018-05-03)
* * * 

New endpoint 'Update a coupon' has been added.
See : https://apidocs.chargebee.com/docs/api/coupons#update_a_coupon

### v2.4.8 (2018-04-27)
* * * 

New resource 'Virtual Bank Account' has been added.
See : https://apidocs.chargebee.com/docs/api/virtual_bank_accounts

New event types virtual_bank_account_added, virtual_bank_account_updated and virtual_bank_account_deleted has been added.
See : https://apidocs.chargebee.com/docs/api/events#event_types

The payment method ach_credit has been added.
See : https://apidocs.chargebee.com/docs/api/transactions#transaction_attributes

### v2.4.7 (2018-03-29)
* * * 

New status 'Pause' has been added to subscription.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_status

The attribues 'pause_date' and 'resume_date' have been added to subscription and estimate resources.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

The input params 'create_current_term_invoice', transaction amount, payment method, reference number and date have been added to Import a subscription and Import subscription for customer APIs.
See : https://apidocs.chargebee.com/docs/api/subscriptions#import_a_subscription

The attribute 'expected_payment_date' has been added to Invoice attributes.
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

The reason code 'subscription_pause' has been added to Credit note attributes.
See : https://apidocs.chargebee.com/docs/api/credit_notes#credit_note_reason_code

New event types subscription_paused, subscription_pause_scheduled, subscription_scheduled_pause_removed, subscription_resumed, subscription_resumption_scheduled and subscription_scheduled_resumption_removed have been added.
See : https://apidocs.chargebee.com/docs/api/events#event_types

New endpoints 'Pause a subscription', 'Resume a subscription', 'Remove scheduled pause' and 'Remove scheduled resumption' have been added to Subscription resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions

New endpoints 'Pause subscription estimate' and 'Resume subscription estimate' have been added to Estimate resource.
See : https://apidocs.chargebee.com/docs/api/estimates

### v2.4.6 (2018-03-20)
* * * 

New attribute 'deleted' has been added to Payment source resource.
See : https://apidocs.chargebee.com/docs/api/payment_sources#payment_source_attributes

### v2.4.5 (2018-03-08)
* * * 

The input parameter disposition_type has been added to 'Retrieve Invoice as PDF' and 'Retrieve Credit Note as PDF' APIs.
See : https://apidocs.chargebee.com/docs/api/invoices#retrieve_invoice_as_pdf

### v2.4.4 (2018-03-02)
* * * 

The attribute 'balance_currency_code' has been deprecated and attribute 'currency_code' has been added to Balances sub-resource in Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The attribute done_by has been added to Promotional credits resource.
See : https://apidocs.chargebee.com/docs/api/promotional_credits

New payment method wechat_pay has been added.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The endpoint Manage Payment Sources has been undeprecated in Hosted pages resource.
See : https://apidocs.chargebee.com/docs/api/hosted_pages

### v2.4.3 (2018-02-01)
* * * 

The attribute 'round_off_amount' have been added in Invoice an Credit note resources.
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

The attribute 'settled_at' has been added to transaction resource.
See : https://apidocs.chargebee.com/docs/api/transactions#transaction_attributes

'Collect now' API in Hosted pages resource has been undeprecated.
See : https://apidocs.chargebee.com/docs/api/hosted_pages#collect_now

### v2.4.2 (2018-01-12)
New endpoint "Update invoice details" has been added to Invoice resource.

### v2.4.1 (2017-12-15)

* New Gateway Type orbital has been released
* toJson() method in Result and List Result Object

** Events added**:

New Event Type subscription_changes_scheduled, subscription_scheduled_changes_removed and pending_invoice_updated has been released


### v2.4.0 (2017-11-27)
* * * 

** API changes **:  
* The new resource [Promotional Credits](http://apidocs.chargebee.com/docs/api/promotional_credits) has been added

* The new sub resource [balances](https://apidocs.chargebee.com/docs/api/customers#customer_balances) has been added

* The API end point add_promotional_credits, deduct_promotional_credits and set_promotional_credits has been deprecated in customer resource

** Events added**:
* New Event Type promotional_credits_added and promotional_credits_deducted has been added

### v2.3.9 (2017-11-13)
* * * 

** API changes**: 
* The new resource [Coupon Set](https://apidocs.chargebee.com/docs/api/coupon_sets) has been added

* The API end point create a coupon code for a coupon has been deprecated in coupon code resource

* The attribute [coupon_set_id](https://apidocs.chargebee.com/docs/api/coupon_codes#coupon_code_coupon_set_id) has been added to Coupon Code resource

* The deprecation has been removed for [Collect payment for customer](https://apidocs.chargebee.com/docs/api/customers#collect_payment_for_customer) in customer resource

* New end point Manage payment source and Collect now has been added as deprecated API to hosted page. Please mail us at support@chargebee.com to enable

** Attributes added**:
* New attribute [remaining_billing_cycles](https://apidocs.chargebee.com/docs/api/subscriptions#subscription_addons_remaining_billing_cycles) has been added in addons under subscription resource.


** Events added**:
* New event type coupon_set_created, coupon_set_updated, coupon_set_deleted, coupon_codes_added, coupon_codes_updated, coupon_codes_deleted


### v2.3.8 (2017-09-22)
* * * 

** APIs added**: 

New endpoint 'Collect payment for a customer' has been added as a restricted and deprecated API.

** APIs updated**: 

The attribute 'amount_to_collect' would be added to Invoice resource.
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

### v2.3.7 (2017-09-15)
* * * 

** APIs updated**: 

The attribute payment_source_id would be added to the transaction resource.
See : https://apidocs.chargebee.com/docs/api/transactions#transaction_payment_source_id

The filter parameter payment_source_id would be added in List transactions API.
See : https://apidocs.chargebee.com/docs/api/transactions#list_transactions

The gateway types amazon_payments and paypal_express_checkout would be added.
See : https://apidocs.chargebee.com/docs/api/customers#customer_payment_method_gateway

### v2.3.6 (2017-09-14)
* * * 

** APIs updated**: 

The attribute registered_for_gst has been added to the Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The parameter registered_for_gst has been added in Create a customer , Update billing info for a customer , Create subscription estimate , Update subscription estimate , Create a subscription and Update a subscription APIs.
See : https://apidocs.chargebee.com/docs/api/customers#create_a_customer

### v2.3.5 (2017-09-06)
* * * 

** APIs added**: 

The new endpoint Record refund for a credit note has been added to Credit note resource.
See : https://apidocs.chargebee.com/docs/api/credit_notes#record_refund_for_a_credit_note

** APIs updated**: 

The parameter tmp_token has been deprecated in card subresource in Create a customer , Create a subscription , Update a subscription and Import subscription APIs.
See : https://apidocs.chargebee.com/docs/api/customers#create_a_customer

The parameter tmp_token has been added to payment method subresource in Create a subscription API.
See : https://apidocs.chargebee.com/docs/api/subscriptions#create_a_subscription

The type apple_pay has been added to payment method types.
See : https://apidocs.chargebee.com/docs/api/customers#create_a_customer_payment_method_type

### v2.3.4 (2017-08-31)
* * * 

** APIs added**: 

The parameters credit_option_for_current_term_charges, unbilled_charges_option,refundable_credits_handling and account_receivables_handling would be added inCancel subscription API.
See : https://apidocs.chargebee.com/docs/api/subscriptions#cancel_a_subscription

A new endpoint Cancel subscription estimate would be added to the Estimate resource.
See : https://apidocs.chargebee.com/docs/api/estimates#cancel_subscription_estimate

The attribute deleted would be added to the Unbilled charge resource.
See : https://apidocs.chargebee.com/docs/api/unbilled_charges#unbilled_charge_attributes

The parameter include_deleted would be added in List Unbilled Charges API.
See : https://apidocs.chargebee.com/docs/api/unbilled_charges#list_unbilled_charges


### v2.3.3 (2017-08-28)
* * * 

** APIs added**: 

The endpoints Void a credit note and Delete a credit note would be added to the Credit notes resource.
See : https://apidocs.chargebee.com/docs/api/credit_notes

The endpoints Apply payments for an invoice, Apply credits for an invoice, Remove payment from an invoice and Remove credit note from an invoice would be added to the Invoice resource.
See : https://apidocs.chargebee.com/docs/api/invoices

### v2.3.2 (2017-08-16)
* * * 

** APIs added**: 

A new endpoint 'Update a card payment source' would be added to the Payment source resource.
See : https://apidocs.chargebee.com/docs/api/payment_sources#update_a_card_payment_source

### v2.3.1 (2017-08-03)
* * * 

** APIs updated**: 

The attribute trial_end has been added to Subscriptions Addon subresource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_addons_trial_end

The parameter trial_end would be added to Addon subresource in Create a subscription,Create subcription for customer, Update a subcription, Create subscription estimate, Create subscription for customer estimate and Update subscription estimate APIs.
See : https://apidocs.chargebee.com/docs/api/subscriptions#create_a_subscription_addons_trial_end

### v2.3.0 (2017-07-26)
* * * 

** APIs added**: 

The new resource 'Time Machine' has been added.

### v2.2.9 (2017-07-21)
* * * 

** APIs added**: 

The new endpoint 'Change Billing Date' has been added to Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#change_billing_date

The new endpoints 'Upcoming invoices estimate' and  'Subscription change term end estimate' have been added to Estimate API.
See : https://apidocs.chargebee.com/docs/api/estimates#upcoming_invoices_estimate

** APIs updated**: 

The attributes 'billing_date', 'billing_date_mode', 'billing_day_of_week', 'billing_day_of_week_mode', 'unbilled_charges' have been added to the Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The event types 'unbilled_charges_created', 'unbilled_charges_voided', 'unbilled_charges_deleted' and 'unbilled_charges_invoiced' have been added.
See : https://apidocs.chargebee.com/docs/api/events#event_types

The parameter 'billing_alignment_mode' has been added to Create a subscription, Create a subscription for customer, Update a customer, Reactivate a subscription, Create subscription estimate, Create subscription for customer estimate, Update a subscription estimate, Checkout new subscription and Checkout existing subscription API.
See : https://apidocs.chargebee.com/docs/api/subscriptions#create_a_subscription

The parameters 'line_item_date_from' and 'line_item_date_to' have been added to Add Charge API.
See : https://apidocs.chargebee.com/docs/api/invoices#add_charge_item_to_pending_invoice

The parameters 'prorate' and 'invoice_immediately' have been added Change term end API.
See : https://apidocs.chargebee.com/docs/api/subscriptions#change_term_end

### v2.2.8 (2017-07-06)
* * * 

** APIs updated**: 

The parameter "status" has been added to the Create a plan, Create an addon and Create a coupon APIs.
See : https://apidocs.chargebee.com/docs/api/plans#create_a_plan

The attribute "issuing_country" has been added to the Card and Payment source resource.
See : https://apidocs.chargebee.com/docs/api/payment_sources#payment_source_attributes

The reason code "fraudulent" has been added to the Credit note resource.
See : https://apidocs.chargebee.com/docs/api/credit_notes#credit_note_reason_code

The attribute "bank_name" is made optional in Bank Account subresource.
See : https://apidocs.chargebee.com/docs/api/payment_sources#payment_source_bank_account_bank_name

The parameter "redirect_url" has been made optional in Create a portal session API.
See : https://apidocs.chargebee.com/docs/api/portal_sessions#create_a_portal_session

The attributes "fraud_flag" and "fraud_reason" have been added to the Transaction resource.
See : https://apidocs.chargebee.com/docs/api/transactions#transaction_attributes


### v2.2.7 (2017-06-01)
* * * 

The endpoint Invoice Now Estimate has been added to the Unbilled Charge resource.
See : https://apidocs.chargebee.com/docs/api/customers#assign_payment_role

** APIs updated**: 

The filter  param "phone" has been added to the List Customer API.
See : https://apidocs.chargebee.com/docs/api/customers#list_customers

The subresource "invoice_estimates" has been added to the Estimate resource. 
See : https://apidocs.chargebee.com/docs/api/estimates#invoice_estimate_attributes

### v2.2.6 (2017-05-04)
* * * 

** APIs added**:
The new resources Payment Source has been added.
See: https://apidocs.chargebee.com/docs/api/payment_sources

The new resources Unbilled Charge has been added.
See : https://apidocs.chargebee.com/docs/api/unbilled_charges

The endpoint Assign payment role has been added to the Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#assign_payment_role

The endpoint Override Billing Profile has been added to the Subscription resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#override_billing_profile


** APIs updated**: 
The attribute payment_source_id has been added to the Card resource.
See : https://apidocs.chargebee.com/docs/api/cards#card_attributes

The attribute subscription_id has been added to the lineitems subresource in Invoice , Credit Note , Invoice estimate , Next invoice estimate and Credit Note estimate .
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

The attributes consolidated_invoicing, primary_payment_source_id, backup_payment_source_id and the subresource list referral_urls have been added to the Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The attributes payment_source_id and auto_collection have been added to the Subscription resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

The subresource unbilled_charge_estimates has been added to the Estimate resource.
See : https://apidocs.chargebee.com/docs/api/estimates#unbilled_charge_estimate_attributes

The param consolidated_invoicing has been added to Create a customer and Update a customer APIs.
See : https://apidocs.chargebee.com/docs/api/customers#create_a_customer

The input params auto_collection, invoice_immediately and consolidated_invoicing have been added to Create subscription API.
See : https://apidocs.chargebee.com/docs/api/subscriptions#create_a_subscription

The input params auto_collection, payment_source_id and invoice_immediately have been added to Create subscription for customer API.
See : https://apidocs.chargebee.com/docs/api/subscriptions#create_subscription_for_customer

The input params credit_type and reference have been added to Add promotional credits for a customer , Deduct promotional credits for a customer and Set promotional credits for a customer APIs.
See : https://apidocs.chargebee.com/docs/api/customers#add_promotional_credits_to_a_customer

The input param invoice_immediately has been added to the Update a subscription , Reactivate subscription , Create subscription estimate , Create subscription for customer estimate and Update subscription estimate APIs.
See : https://apidocs.chargebee.com/docs/api/subscriptions#update_a_subscription

The input param auto_collection has been added to the Subscription subresource and consolidated_invoicing have been added to the Customer subresource in Checkout new subscription API.
See : https://apidocs.chargebee.com/docs/api/hosted_pages#checkout_new_subscription

The input param payment_source_id has been added to Import a subscription , Create an invoice , Create invoice for charge , Create invoice for addon and Collect payment for an invoice APIs.
See : https://apidocs.chargebee.com/docs/api/subscriptions#import_a_subscription

The event types payment_source_added, payment_source_updated and payment_source_deleted have been added.
See : https://apidocs.chargebee.com/docs/api/events#event_types

### v2.2.5 (2017-04-19)
* * * 

** APIs added**:
The endpoints 'List' and 'Acknowledge' APIs have been added to the Hosted page resource. 
See : https://apidocs.chargebee.com/docs/api/hosted_pages

** APIs updated**:
A new subresource 'line_item_discounts' has been added to the Invoice, Credit note, Invoice estimates and Credit note estimates resources.
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

The Card statuses 'pending_verification' and 'invalid' have been added to the Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The Payment Method types 'generic', 'alipay' and 'unionpay' have been added to the Payment Method type in the Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The state 'failed' and the attribute 'failure_reason' have been deprecated in the Hosted Page resource.

The attribues 'updated_at', 'resource_version' and 'checkout_info' have been added.
See : https://apidocs.chargebee.com/docs/api/hosted_pages#hosted_page_attributes

A new gateway 'adyen' has been added.
See : https://apidocs.chargebee.com/docs/api/cards#card_attributes


### v2.2.4 (2017-03-16)
* * * 

** APIs updated**:
The input parameter 'id' have been removed in Update a Plan and Update an addon resources.
See: https://apidocs.chargebee.com/docs/api/plans#update_a_plan

The input parameter 'terms_to_charge' have been added in Create a subscription,Create subscription for a customer, Create subscription estimate, create subscription for customer estimate, Reactivate a subscription and Checkout new hosted pages APIs.
See : https://apidocs.chargebee.com/docs/api/subscriptions#create_subscription_for_customer

The filter input parameter 'next_billing_at' have been added in List Subscriptions API.
See : https://apidocs.chargebee.com/docs/api/subscriptions#list_subscriptions

The input parameter 'force_term_reset' have been added to Checkout existing hosted pages API.
See : https://apidocs.chargebee.com/docs/api/hosted_pages#checkout_existing_subscription

A new attribute 'has_advance_charges' have been added to the Invoice resource.
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

### v2.2.3 (2017-02-24)
* * * 

** APIs added**:
New resources 'Site Migration Details' and 'Resource Migrations' have been added.
See : https://apidocs.chargebee.com/docs/api/site_migration_details

A new endpoint 'Move a customer' has been added.
See : https://apidocs.chargebee.com/docs/api/customers#move_a_customer

** APIs updated**:
The attributes 'id' and 'for_site_merging' have been added to Copy an addon, Copy a coupon and Copy a plan API.
See : https://apidocs.chargebee.com/docs/api/plans#copy_a_plan

The event types 'customer_moved_out' and 'customer_moved_in' have been added.
See : https://apidocs.chargebee.com/docs/api/events#event_types

The input parameters 'ignore_scheduled_cancellation' and 'ignore_scheduled_changes' have been added to the Subscription renewal estimate API.
See : https://apidocs.chargebee.com/docs/api/estimates#subscription_renewal_estimate


### v2.2.2 (2017-01-30)
* * * 

** APIs updated**:
A new reason code 'Subscription cancellation' has been added to the Credit note resource.
See : https://apidocs.chargebee.com/docs/api/credit_notes#credit_note_attributes

A attribute 'has_advance_charges' has been added to the Invoice resource and the input filter parameter 'has_advance_charges' has been added to List Invoice API.
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

A new attribute 'next_billing_at' has been added to the Subscription resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

The input parameters 'terms_to_charge', 'reactivate', 'reactivate_from' have been added to Update a Subscription, Update a subscription estimate and Checkout existing hosted page APIs. 
See : https://apidocs.chargebee.com/docs/api/subscriptions#update_a_subscription

The input parameter 'reactivate_from' has been added to Reactivate a subscription API.
See : https://apidocs.chargebee.com/docs/api/subscriptions#reactivate_a_subscription

** APIs added**:
A new endpoint 'Charge Future Renewals' has been added to the Subscription API.
https://apidocs.chargebee.com/docs/api/subscriptions#charge_future_renewals

### v2.2.1 (2017-01-27)
* * * 

** APIs updated**:
A new attribute 'gateway_account_id' has been added to Card resource. A input param 'gateway' has been deprecated and a new input param 'gateway_account_id' has been added from Update card for customer, Switch gateway and Copy card APIs.
See: https://apidocs.chargebee.com/docs/api/cards

 A input param 'gateway' has been deprecated and  a new input param 'gateway_account_id'  has been added to Card and Payment method sub resource in Create customer, Create subscription, Update Subscription and Import subscription API.
 See: https://apidocs.chargebee.com/docs/api/customers 

A input param 'fraud_flag' has been added to Update customer API.
See: https://apidocs.chargebee.com/docs/api/customers#update_a_customer

A input param 'gateway' has been deprecated and  a new input param 'gateway_account_id'  has been added to Payment method sub resource in Update card for a customer API.
See: https://apidocs.chargebee.com/docs/api/cards#update_card_for_a_customer

A input param 'gateway' has been deprecated and  a new input param 'gateway_account_id'  has been added to the Card resource in Checkout new, Checkout existing and Update card and Update Payment method APIs.
See: https://apidocs.chargebee.com/docs/api/hosted_pages#checkout_new_subscription

A new input params 'billing_address' and 'shipping_address' has been added to Checkout new hosted page API.
See: https://apidocs.chargebee.com/docs/api/hosted_pages#checkout_new_subscription

** APIs added**:
A new endpoint Create subscription for a customer estimate has been added to the Estimate resource.
See: https://apidocs.chargebee.com/docs/api/estimates#create_subscription_for_a_customer_estimate


### v2.2.0 (2017-01-12)
* * * 

** APIs added**:
A new endpoint, Unarchive a plan has been added to the Plan resource.
See: https://apidocs.chargebee.com/docs/api/plans#unarchive_a_plan

A new endpoint, Unarchive an addon  has been  added to the Addon resource.
See : https://apidocs.chargebee.com/docs/api/addons#unarchive_an_addon

A new endpoint, Unarchive a coupon has been added to the Coupon resource.
See : https://apidocs.chargebee.com/docs/api/coupons#unarchive_a_coupon

### v2.1.9 (2016-12-30)
* * * 

** APIs updated**:

The attributes 'plan_unit_price', 'setup_fee', 'billing_period', 'billing_period_unit' and 'plan_free_quantity' has been added to the Subscription resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

The input parameters 'plan_unit_price', 'setup_fee' and Addon 'unit_price' has been added to Create a subscription, Create subscription for customer, Update a subscription, Create a subscription estimate, Update a subscription estimate, Checkout a new subscription and Checkout existing subscription, Import a subscription and Import subscription for customer APIs.
See : https://apidocs.chargebee.com/docs/api/subscriptions#create_a_subscription

An input parameter Addon 'unit_price' has been added to Charge addon at term end, Create an Invoice, Create invoice for addon and Add addon item to pending invoice APIs.
See : https://apidocs.chargebee.com/docs/api/invoices#create_an_invoice

An attribute 'tax_exempt_reason' has been added to line items sub resource in Invoice, Credit Note and Estimate resources.
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

### v2.1.8 (2016-12-09)
* * * 

** APIs updated**:
A new attribute, 'locale' has been added to the Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

A new parameter, 'locale' has been to Create a customer, Update a customer, Checkout new hosted page, Create a subscription and Import a subscription APIs.
See : https://apidocs.chargebee.com/docs/api/customers#create_a_customer

The attributes 'mrr', 'exchange_rate' and 'base_currency_code' have been added to the Subscription resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

A new filter parameter 'cancelled_at' has been added to List Subscription API.
See : https://apidocs.chargebee.com/docs/api/subscriptions#list_subscriptions

The attribute 'voided_at' has been added to the Invoice and the Credit Note resource and 'voided_at' filter has been added to List invoices and List credit notes APIs.
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

The attributes 'sku', 'accounting_code', 'accounting_category1' and 'accounting_category2' have been added to the Plan and the Addon resource.
See : https://apidocs.chargebee.com/docs/api/plans#plan_attributes

The input parameters 'sku', 'accounting_code', 'accounting_category1' and 'accounting_category2' have been added to Create a plan, Update a plan, Create an addon and Update an addon APIs.
See : https://apidocs.chargebee.com/docs/api/plans#create_a_plan

The input parameters 'transaction_id_at_gateway', 'transaction_status', 'transaction_error_code' and 'transaction_error_text' have been added to Record payment for an invoice API.
See : https://apidocs.chargebee.com/docs/api/invoices#record_an_invoice_payment

### v2.1.7 (2016-11-24)
* * * 

** APIs updated**:
A new attribute, 'funding_type' has been added to Card resource.
See : https://apidocs.chargebee.com/docs/api/cards#card_attributes

** APIs added**:
A new endpoint, List coupon codes API has been added to Coupon Code resource.
See : https://apidocs.chargebee.com/docs/api/coupon_codes#list_coupon_codes

A new endpoint, Copy a plan API has been added to Plan resource.
See : https://apidocs.chargebee.com/docs/api/plans#copy_a_plan

A new endpoint, Copy an addon API has been added to Addon resource.
See : https://apidocs.chargebee.com/docs/api/addons#copy_an_addon

A new endpoint, Copy a coupon API has been added to Coupon resource.
See : https://apidocs.chargebee.com/docs/api/coupons#copy_a_coupon

A new endpoint, Import a subscription API has been added to Subscription resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#import_a_subscription

A new endpoint, Import Subscription for customer API has been added to Subscription resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#import_subscription_for_customer

A new endpoint, Import invoice API has been added to Invoice resource.
See : https://apidocs.chargebee.com/docs/api/invoices#import_invoice



### v2.1.6 (2016-11-18)
* * * 

** APIs updated**:
A new attribute, 'tax_profile_id' has been added to Addon and Plan resource.
See : https://apidocs.chargebee.com/docs/api/plans#plan_attributes

The new input parameter 'tax_profile_id' has been added in Create and Update Addon and Plan APIs.
See : https://apidocs.chargebee.com/docs/api/plans#create_a_plan

The new cancel reason type 'non_compliant_customer' has been added to the Subscription resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

### v2.1.5 (2016-11-09)
* * * 

** APIs updated**:
The attributes "updated_at" and "resource_version" is added to Plan, Addon and Coupon resource.
See : https://apidocs.chargebee.com/docs/api/plans#plan_attributes

Following [Event types](https://apidocs.chargebee.com/docs/api/events#event_types) are added
* *plan_created*
* *plan_updated* 
* *plan_deleted* 
* *addon_created* 
* *addon_updated* 
* *addon_deleted* 
* *coupon_created* 
* *coupon_updated* 
* *coupon_deleted*
* *netd_payment_due_reminder*

The new Invoice status "posted" is added. 
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

The attribute "net_term_days" is added to Customer resource and new input parameter "net_term_days" is added to Create Customer and Update Customer API. See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The input parameter "net_term_days" is added to Create a Subscription API. See : https://apidocs.chargebee.com/docs/api/subscriptions#create_a_subscription

The attributes "net_term_days" and "due_date" is added to the Invoice resource. See : https://apidocs.chargebee.com/docs/api/invoices


### v2.1.4 (2016-10-27)
* * * 

** APIs updated**:

The attribute "preferred_currency_code" is added to Customer and a new input parameter "preferred_currency_code" is added  Create Customer and Update Customer API.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

### v2.1.3 (2016-09-30)
* * * 

** APIs updated**:
The new attributes "updated_at", "resource_version" and "deleted" is returned as part of Customer, Subscription, Invoice, Credit Note and Transaction resources.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

The new parameter "include_deleted" is added to Customer, Subscription, Invoice, Credit Note and Transaction List API.
See : https://apidocs.chargebee.com/docs/api/customers#list_customers

The new parameter "date" is added to Create Credit Note API.
See : https://apidocs.chargebee.com/docs/api/credit_notes#create_credit_note

### v2.1.2 (2016-09-03)
* * * 
** APIs added**:
A new endpoint to create Credit Note is added. See : https://apidocs.chargebee.com/docs/api/credit_notes#create_credit_note

A new endpoint to write off Invoice is added. See : https://apidocs.chargebee.com/docs/api/invoices#write_off_an_invoice

** APIs updated**:
The attribute "forward_url" is given as input for Create a Portal Session API.
See : https://apidocs.chargebee.com/docs/api/portal_sessions#create_a_portal_session

### v2.1.1 (2016-08-25)
* * * 

** APIs updated**:
The attribute "validation_status" is added to address.
See : https://apidocs.chargebee.com/docs/api/addresses#address_attributes

The attribute "validation_status" is added to Customer billing address and the attribute "fraud_flag" is now returned Customer in case of any fraudulent transactions. The API's Create Customer, Update Billing Info for a Customer now take in "validation_status" for address objects.  
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The attribute "validation_status" is added to Subscription shipping address. The API's Create Subscription, Create Subscription for Customer, Update Subscription now take in "validation_status" for address objects.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

The attribute "validation_status" is returned as part of Invoice billing and shipping address.
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

The sub resource "shipping_address" is now returned as part of Subscription Estimate in Estimate APIs.
See : https://apidocs.chargebee.com/docs/api/estimates#estimate_attributes

The attribute "created_from_ip", "card_ip_address" is deprecated from Customer and Subscription resource.
See: https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The attribute "tmp_token" is added to Payment Method subresource that can be used in Create and Update Payment Method for a Customer API for direct_debit type through Stripe gateway.
See : https://apidocs.chargebee.com/docs/api/customers#create_a_customer

The status "pending_verification" added to Payment Method status.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes


### v2.1.0 (2016-08-02)
* * * 
** APIs added**:
A new endpoint to retrieve Credit Note as PDF. See : https://apidocs.chargebee.com/docs/api/credit_notes#retrieve_credit_note_as_pdf

** APIs updated**:
The attribute "invoice notes" is added to subscription in Hosted Pages Checkout New and Checkout Existing API's.
See : https://apidocs.chargebee.com/docs/api/hosted_pages#checkout_new_subscription

The filter parameter "paid_at" is added to list invoices and "paid_on_after" is deprecated. See : https://apidocs.chargebee.com/docs/api/invoices#list_invoices

The filter parameter "occurred_at", "webhook_status", "event_type" is added to list events and parameter "start_time", "end_time", "webhook_status", "event_type" is deprecated. See : https://apidocs.chargebee.com/docs/api/events#list_events

### v2.0.9 (2016-07-18)
* * * 
** APIs added**:
A new endpoint to remove coupons associated with the subscription is added. See : https://apidocs.chargebee.com/docs/api/subscriptions#remove_coupons
A new endpoint to record excess payments for a customer is added. See : https://apidocs.chargebee.com/docs/api/customers#record_an_excess_payment_for_a_customer

### v2.0.8 (2016-07-06)
* * * 
** APIs added**:
A new endpoint to delete a coupon added. See : https://apidocs.chargebee.com/docs/api/coupons#delete_a_coupon

### v2.0.7(2016-07-04)
* * * 
** APIs updated**:
The attribute "currency_code" is added as part of Plans, Addons, Coupons, Subscription, Transaction and Estimate resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

The API's Set promotional credits for a customer, Add promotional credits to a customer and  Deduct promotional credits for a customer takes in "currency_code" as input.
See : https://apidocs.chargebee.com/docs/api/customers#set_promotional_credits_for_a_customer

### v2.0.6 (2016-06-27)
* * *

** APIs updated**:
New resource "third_party_payment_method" is returned on performing copy card for a customer API.
See : https://apidocs.chargebee.com/docs/api/cards#copy_card

### v2.0.5 (2016-06-16)
* * *

** APIs updated**:
New subresource "next_invoice_estimate" is returned as part of Estimate resource.
See : https://apidocs.chargebee.com/docs/api/estimates#estimate_attributes

### v2.0.4 (2016-05-24)
* * *

** APIs updated**:

New attribute "currency_code" is returned as part of Credit Note resource.
See: https://apidocs.chargebee.com/docs/api/credit_notes#credit_note_attributes

The new Gateway type "wepay" for card resource is added. See subscription attributes
See : https://apidocs.chargebee.com/docs/api/cards#card_attributes

### v2.0.3 (2016-05-20)
* * *

#### Filtering Resources using List API

Chargebee supports bulk fetching of resources via 'List' API methods. (List invoices, List subscriptions etc..). In the List methods, filtering of resources can be performed using filter parameters. Also in the List methods, the sort_by parameter is provided for sorting the result in the desired order. 
See : https://apidocs.chargebee.com/docs/api#pagination_and_filtering

** APIs deprecated**:

The Following API's are deprecated since these operations can be achieved through List API's
* List Subscriptions for a Customer
* List Invoices for a Customer
* List Invoices for a Subscription
* List Credit Note for a Customer
* List Credit Note for a Subscription
* List Transactions for a Customer
* List Transations for a Subscription 

** APIs added**:

Support to copy card to gateway for a customer. New api endpoint to copy card for a customer is added to Card resources. 
See: https://apidocs.chargebee.com/docs/api/cards#copy_card

** APIs updated**:

New attribute "id" is returned as part of Line Items subresource of Invoice and Credit Note resource.
See: https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

New attribute "name" is returned as part of Taxes subresource of Invoice and Credit Note resource.
See: https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes


A new sub-resource "line_item_taxes" is returned as part of the Invoice and Credit Note resource attributes.
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

### v2.0.2 (2016-05-02)
* * *
** APIs added**:

Support to archive a coupon code. See archive Coupon code API here: https://apidocs.chargebee.com/docs/api/coupon_codes#archive_a_coupon_code

** APIs updated**:

The attribute "status" is returned as part of Coupon Code resource. See : https://apidocs.chargebee.com/docs/api/coupon_codes#coupon_code_attributes

### v2.0.1 (2016-04-29)
* * *

** APIs updated**

Support to specify Avalara "tax_code" attribute in Plan and Addon resource. Now, create and update plan, create & update addon accept "tax_code" parameter. See create plan API here : https://apidocs.chargebee.com/docs/api/plans#create_a_plan

Support to specify the exemption category or exempt number for a customer by adding "entity_code" or "exempt_number" in customer resource. You can pass "entity_code" and "exempt_number" in create, update customer, create subscription and create subscription estimate APIs. See create customer API here : https://apidocs.chargebee.com/docs/api/customers#create_a_customer

The attribute "entity_code" or "exempt_number" is returned as part of Customer resource for Avalara. 
See: https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The attribute "tax_code" is returned as part of Plan & Addon resources for Avalara. 
See : https://apidocs.chargebee.com/docs/api/plans#plan_attributes

Support for address parameters in estimate APIs that is used to calculate tax. Now, create & update subscription estimate APIs accept line1, line2, line3 and city. See : https://apidocs.chargebee.com/docs/api/estimates#estimate_attributes

The new Cancel reason type "tax_calculation_failed" for subscription resource is added. See subscription attributes
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

** APIs deprecated**:

The attribute "taxability" for customer has been deprecated in the Update Subscription Estimate API.

### v2.0.0 (2016-04-11)
* * *

#### Attributes and Operations Removed/Renamed in V2
Chargebee [API V2](https://apidocs.chargebee.com/docs/api#versions) is now live! All our future developments will happen in V2. 

V2 has been released to accommodate certain backwards-incompatible changes. Refer our [API V2 Upgradation guide](https://apidocs.chargebee.com/docs/api/v1#api-v2-upgradation-guide) for the complete listing of the attributes and operations that have been removed/renamed in API V2.

#### Incremental Changes in V2

* *api_version* attribute is added to [Event](https://apidocs.chargebee.com/docs/api/events) resource. More details [here](#v1176-2016-04-06).
* Credit Notes resource is introduced. More details here: https://apidocs.chargebee.com/docs/api/credit_notes
* Operations [Update Subscription](https://apidocs.chargebee.com/docs/api/subscriptions#update_a_subscription) and [Update Subscription Estimate](https://apidocs.chargebee.com/docs/api/estimates#update_subscription_estimate) additionally returns list of Credit Notes now (if applicable).  
* Operations [Refund an Invoice](https://apidocs.chargebee.com/docs/api/invoices#refund_an_invoice) and [Record Refund for an Invoice](https://apidocs.chargebee.com/docs/api/invoices#record_refund_for_an_invoice) additionally returns a Credit Note if the operation succeeds. Besides, following *input params* are added to these operations - *credit_note[reason_code]* and *customer_notes*.
* Following attributes are added to [invoice](https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes) resource
  * *write_off_amount*
  * *applied_credits[]* - the Refundable Credits applied to this invoice.
  * *adjustment_credit_notes[]* - The Adjustment Credit Notes created for this invoice.
  * *issued_credit_notes[]* - The Refundable Credit Notes created against this invoice.
* For 'Refund' type [transaction](https://apidocs.chargebee.com/docs/api/transactions#transaction_attributes), *linked_credit_notes[]* will be returned.
* Following [Event types](https://apidocs.chargebee.com/docs/api/events#event_types) are added
  * *credit_note_created*
  * *credit_note_updated*
  * *credit_note_deleted*
* Following attributes are added to [line_items[]](https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes) sub-resource:
  * *discount_amount* - the total discount amount (both item-level and document-level discounts) of this line.
  * *item_level_discount_amount* - only the item-level-discount amount component.
* Further [discounts[].entity_type](https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes) will have two types for coupon -  *item_level_coupon* and *document_level_coupon*. 
* Input Param *use_existing_balances* is added to the operations - [Update Subscription Estimate](https://apidocs.chargebee.com/docs/api/estimates#update_subscription_estimate) and [Subscription Renewal Estimate](https://apidocs.chargebee.com/docs/api/estimates#subscription_renewal_estimate)
* The API's *checkout_onetime_addons* and *checkout_onetime_charge* in Hosted Page resource are removed in V2.


### v1.7.2 (2016-04-06)
* * *

*api_version* attribute is added to the Event resource. 

Chargebee supports multiple [API versions](https://apidocs.chargebee.com/docs/api#versions) now. The *api_version* attribute indicates the API version based on which the event content is structured. More details here:
https://apidocs.chargebee.com/docs/api/events

### v1.7.1 (2016-03-22)
* * *

** APIs updated**:

Support to specify additional information as "meta_data" in json format for Customer, Subscription, Plan, Addon & Coupon resources.
Now, create & update customer, subscription, create subscription for customer, create & update plan, addon and create coupon APIs accept the "meta_data"" parameter in json format. See create customer API here : https://apidocs.chargebee.com/docs/api/customers#create_a_customer

New attribute for "meta_data" is returned as part of Customer, Subscription, Plan, Addon and Coupon resources. See customer attributes here: https://apidocs.chargebee.com/docs/api/customers#customer_attributes


** APIs added**:

Support to change card gateway for a customer. New api endpoint to switch gateway for a customer is added to Card resources. See: https://apidocs.chargebee.com/docs/api/cards#switch_gateway


** Issue Fixed**:

Wrong keys in json response is now fixed for 'linked_transactions', 'linked_orders' & 'notes' in Invoice resource and for 'linked_invoices' & 'linked_refunds' in Transaction resource. See: invoice attributes here: https://apidocs.chargebee.com/docs/api/invoices

### v1.7.0 (2016-03-10)
* * *

** APIs updated**:

Support to keep the card in gateway while deleting customer. Delete a customer API accepts "delete_payment_method" parameter. See: https://apidocs.chargebee.com/docs/api/customers#delete_a_customer

### v1.6.9 (2016-02-25)
* * *

** APIs added**:

Support to delete a subscription. See: https://www.chargebee.com/docs/subscriptions.html#deleting-a-subscription
New api endpoint to delete 'Subscription' is added to Subscription resources. See delete subscription API here:
https://apidocs.chargebee.com/docs/api/subscriptions#delete_a_subscription

Support to delete a customer. See: https://www.chargebee.com/docs/customers.html#deleting-a-customer
New api endpoint to delete 'Customer' is added to Customer resources. See delete customer API here:
https://apidocs.chargebee.com/docs/api/customers#delete_a_customer


** APIs updated**:

Now, events "subscription_deleted" & "customer_deleted" can be fetched via API. See : https://apidocs.chargebee.com/docs/api/events#event_types.

### v1.6.8 (2016-02-08)
* * *

** APIs added**:

Support to add additional contact for a customer. See: https://www.chargebee.com/docs/customers.html#add-contact
New api endpoints to add, update and delete 'Contact' are added to Customer resource. See add contact API here: https://apidocs.chargebee.com/docs/api/customers#add_contacts_to_a_customer

** APIs updated**:

New attribute 'contacts' with list of contacts is returned as part of Customer resource. See: https://apidocs.chargebee.com/docs/api/customers#customer_attributes

Support for partial payment. Collect payment for an invoice API now accepts 'amount' paramater. See: https://apidocs.chargebee.com/docs/api/invoices#collect_payment_for_an_invoice

New attribute 'refundable_credits' is returned as part of Customer resource.

New attributes 'amount_paid', 'amount_adjusted' & 'credits_applied' are returned as part of Invoice resource. See: https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

New attributes 'credits_applied' & 'amount_due' are returned as part of Estimate resource. See: https://apidocs.chargebee.com/docs/api/estimates#estimate_attributes

New entity type 'credit_note' is added as part of 'entity_type' attribute of Comment resource. 
See: https://apidocs.chargebee.com/docs/api/comments#comment_attributes

### v1.6.7 (2015-12-15)
* * *

** APIs updated**:

Wrong API invocation issue if empty/null value passed instead of resource id, is fixed.

### v1.6.6 (2015-11-24)
* * *

** APIs updated**:

Support to specify accessbility in customer portal for a plan & addon. Create & update methods of Plan & Addon APIs accept "enabled_in_portal" parameter. See create plan API here : https://apidocs.chargebee.com/docs/api/plans#create_a_plan

New attribute "enabled_in_portal" is returned as part of Plan/Addon resource.
See plan attributes here: https://apidocs.chargebee.com/docs/api/plans#plan_attributes

### v1.6.5 (2015-11-09)
* * *

** APIs updated**:

Support for excess payments. See : https://www.chargebee.com/docs/customers.html#excess-payments

New attribute "excess_payments" is returned as part of Customer resource.
See: https://apidocs.chargebee.com/docs/api/customers#customer_attributes

New attribute "applied_at" is returned as part of Linked Transaction subresource of Invoice resource.
See: https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

New transaction type "PAYMENT_REVERSAL" is returned as part of Transaction resource.
See: https://apidocs.chargebee.com/docs/api/transactions#transaction_attributes

New attributes "amount_unused", "reference_transaction_id", "reversal_transaction_id" & "linked_refunds" subresource are returned as part of Transaction resource.

New attribute "applied_at" is returmed as part of Linked Invoice subresource of Transaction resource.
See: https://apidocs.chargebee.com/docs/api/transactions#transaction_attributes

### v1.6.4 (2015-10-26)
* * *

** APIs updated**:

Support to specify if a customer can pay via direct debit. Now, create & update customer, create subscription APIs accept the "allow_direct_debit" parameter for Customer resource. See create customer API here : https://apidocs.chargebee.com/docs/api/customers#create_a_customer

New attribute "allow_direct_debit" is returned as part of Customer resource.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

New "price_type" attribute is returned as part of Estimate & Invoice Resource. 
See : https://apidocs.chargebee.com/docs/api/estimates#estimate_attributes

Support for address parameters in estimate APIs that is used to calculate tax. Now, create & update subscription estimate APIs accept billing state code, billing zip, shipping country, shipping state code & shipping zip.
See : https://apidocs.chargebee.com/docs/api/estimates#create_subscription_estimate

### v1.6.3 (2015-09-18)
* * *

** APIs updated**:

Support to specify customer's tax liability. Now, create & update customer, create & update subscription, create & update subscription estimate, checkout new hosted page APIs accept the "taxability" parameter for Customer resource. See create customer API here : https://apidocs.chargebee.com/docs/api/customers#create_a_customer

Support to specify taxability for a plan & addon. Create & update methods of Plan & Addon APIs accept "taxable" parameter. See create plan API here : https://apidocs.chargebee.com/docs/api/plans#create_a_plan

The attribute "taxablility" is returned as part of Customer resource. 
https://apidocs.chargebee.com/docs/api/customers#customer_attributes

The attribute "taxable" is returned as part of Plan resource. 
See : https://apidocs.chargebee.com/docs/api/plans#plan_attributes

The attribute "taxable" is returned as part of Addon resource. 
See : https://apidocs.chargebee.com/docs/api/addons#addon_attributes


The attribute "is_taxed" returned as part of "line_items" subresource of Estimate & Invoice resorces. 
See attribute of line_items in Estimate here :
https://apidocs.chargebee.com/docs/api/estimates#estimate_attributes

### v1.6.2 (2015-09-07)
* * *

** APIs updated**:

The attribute for "user" is returned as part of Event resource. 
See : https://apidocs.chargebee.com/docs/api/events#event_attributes

Support for multiple webhooks. The attribute "webhooks" contains list of Webhook subresource is returned as part of Event API.
See : https://apidocs.chargebee.com/docs/api/events#event_attributes

** APIs deprecated**:

Attributes "webhook_status" & "webhook_failure_reason" of event resource has been deprecated.

### v1.6.1 (2015-08-25)
* * *

** APIs updated**:

The attribute for "first_invoice" & "currency_code" is returned as part of Invoice resource. 
See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

The attribute for "currency_code" is returned as part of Transaction resource. 
See : https://apidocs.chargebee.com/docs/api/transactions#transaction_attributes

A new source type "bulk_operation" is returned as part of "source" attribute of event resource. 
See : https://apidocs.chargebee.com/docs/api/events#event_attributes

### v1.6.0 (2015-07-20)
* * *

** APIs added**:

New api endpoint to Stop Dunning for "Payment Due" invoices is added. See : https://apidocs.chargebee.com/docs/api/invoices#stop_dunning_for_invoice

** APIs updated**:

The attribute for "dunning_status" is returned as part of Invoice resource. 
See : https://apidocs.chargebee.com/docs/api/invoices#stop_dunning_for_invoice

### v1.5.9 (2015-07-09)
* * *

** APIs added**:

New api endpoint to Record Offline Refund for an invoice is added. See : https://apidocs.chargebee.com/docs/api/invoices#record_refund_for_an_invoice

** APIs updated**:

Support to update payment method stored in gateway vault. Now, update payment method for a customer, create customer, create & update subscription method APIs accept the "gateway" parameter for Payment Method resource along with reference_id. See "Card Payments" section here : https://apidocs.chargebee.com/docs/api/customers#update_payment_method_for_a_customer

The attribute for "gateway" name is returned as part of Payment Method sub-resource for a customer resource. See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

A new source type "migration" is returned as part of "source" attribute of event resource. See : https://apidocs.chargebee.com/docs/api/events#event_attributes

A new discount type "account_credits" is added as part of "type" attribute of discounts sub-resource for estimate resource.

** APIs deprecated**:

Attributes "description" & "void_description" of transaction resource has been deprecated.

### v1.5.8 (2015-06-18)
* * *

** APIs added**:

New api endpoint to Void an invoice is added. See : https://apidocs.chargebee.com/docs/api/invoices#void_an_invoice

** APIs updated**:

A new invoice status "voided" is returned as part of "status" attribute in invoice resource. See : https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

** APIs deprecated**:

Update card for hosted page method API has been deprecated. Use "Update payment method" API to update card details. Read more about upadate payment method : https://apidocs.chargebee.com/docs/api/hosted_pages#update_payment_method

### v1.5.7 (2015-06-12)
* * *

** APIs added**:

New api endpoints to Add, Deduct & Set the account credit for a customer is added. See the APIs below - https://apidocs.chargebee.com/docs/api/customers#add_account_credits_to_a_customer
https://apidocs.chargebee.com/docs/api/customers#deduct_account_credits_for_a_customer
https://apidocs.chargebee.com/docs/api/customers#set_account_credits_for_a_customer

** APIs updated**:

Now, event "invoice_updated" can be fetched via API. See : https://apidocs.chargebee.com/docs/api/events#event_types.

A new webkook status "skipped" is returned as part of "webhook_status" attribute of event resource. See : https://apidocs.chargebee.com/docs/api/events#event_attributes

The resource attribute for "account_credits" is returned as part of Customer resource. See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

A new discount type "account_credits" is returned as part of "discounts" sub-resource of Invoice resource. See : https://apidocs.chargebee.com/docs/api/events#event_attributes

** APIs deprecated**:

Support for "offer_quantity" in "discount_type" attribute deprecated for Create method of Coupon API.

Support for "specified_items_total" & "each_unit_of_specified_items" in "apply_on" attribute deprecated for Create method of Coupon API.

The attribute "discount_quantity" deprecated for Create method of Coupon API.

### v1.5.6 (2015-05-02)
* * *

** APIs added**:

A new api endpoint for "Update payment method for a customer" is added. This allows you to support PayPal Express Checkout via our API. See https://apidocs.chargebee.com/docs/api/customers#update_payment_method_for_a_customer.

A new api endpoint for "Collect payment for an invoice" is added. This allows you to manually collect the payment(if a payment method is present for the customer) for an invoice in "payment_due" or "not_paid" state. See https://apidocs.chargebee.com/docs/api/invoices#collect_payment_for_an_invoice.

** APIs updated**:

Support for PayPal Express Checkout while calling "Create a subscription", "Update a subscription" and "Create a customer" APIs. These APIs now accept details about the payment method(payment_method) that is being associated with the customer. 

### v1.5.5 (2015-04-14)
* * *

** APIs updated**:

Support for Purchase Order(po) number. Create & update subscription, create an invoice, create invoice for charge/addon method APIs now accept "po_number" for the subscription/invoice resource. Read more about purchase order : https://www.chargebee.com/docs/po-number.html

The resource attribute for "po_number" is returned as part of Subscription and Invoice resources.

Create and Update methods of plan, addon, coupon, customer and subscripiton APIs now accept "invoice_notes" that is added to the invoice raised for a customer. Read more about invoice notes : https://www.chargebee.com/docs/invoice_notes.html

A new sub-resource "notes" is returned as part of the Invoice resource attributes.
See https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes

A new attribute "amount_due" is returned as part of Invoice resource.

Checkout new, checkout existing, update payment method method APIs now accept "redirect_url" & "cancel_url" to which your customer should be redirected.
See https://apidocs.chargebee.com/docs/api/hosted_pages#checkout_new_subscription

Now, event "subscription_renewal_reminder" can be fetched via API. 
See https://apidocs.chargebee.com/docs/api/events#event_types.


### v1.5.4 (2015-03-30)
* * *

** APIs added**:

A new API "Delete an Invoice" added to delete un-paid invoices. This feature was supported through admin console earlier, now it is available via API too.
See https://apidocs.chargebee.com/docs/api/invoices#delete_an_invoice.

** APIs updated**:

Create subscription/customer, update subscription/payment method APIs now accepts the IP Address of customer for card resource.

Now, event "invoice_deleted" can be fetched via API. 
See https://apidocs.chargebee.com/docs/api/events#event_types.

### v1.5.3 (2015-02-27)
* * *

** APIs added**:

A new API "Create an Invoice" added to create one-off invoices with multiple 'Non Recurring' addon & ad-hoc charges for a customer. See https://apidocs.chargebee.com/docs/api/invoices#create_an_invoice.

A new API called Activate a portal session method(Portal session) added to support building your authentication for your website on top of ChargeBee. See https://apidocs.chargebee.com/docs/api/portal_sessions#activate_a_portal_session. Read about "Using ChargeBee authentication to allow access to your website" at https://apidocs.chargebee.com/docs/api/portal_sessions.

** APIs updated**:

Shipping and Billing Address are returned as part of Invoice resource attributes. This returns the shipping & billing address that was present at the time of invoice generation.

Linked Customers as part of Portal session resource attributes.

### v1.5.2 (2015-02-18)
* * *

** APIs added**:
A new API called Remove scheduled cancellation method(Subscription) added to remove the pending cancellation scheduled at end of the subscription term.

** APIs deprecated**:
Reactivate a subscription(Subscription) API is deprecated for subscriptions in Non-Renewing state as an alternate API(see above) is added.

** APIs updated**:
Create subscription/customer, update subscription/customer/payment method/billing info API now accepts the State Code for billing, shipping, subscription and card addresses.

### v1.5.1 (2015-01-07)
* * *

Support for PayPal & Amazon payment added.

** APIs added**:
A new API called Update payment method(HostedPage) added to support allowing customers to update their payment method with PayPal and Amazon payments.

** APIs deprecated**:
Update card(HostedPage) API is deprecated as an alternate API is added.

** APIs updated**:
Create a customer API now accepts the end user IP. 

### v1.5.0 (2014-12-02)
* * *

**APIs added**:
A new resource called Order is introduced. This can be used for integrating ChargeBee with any shipping/order management application (like ShipStation). Orders are not automatically generated or updated by ChargeBee currently. They have to be created/updated either via api or merchant web console (a.k.a admin console). An order can be created against an invoice irrespective of the status of the invoice and an invoice can have multiple orders associated with it.
See https://apidocs.chargebee.com/docs/api/orders?lang=php for details.

**API Updates**:
Ability to filter Invoices with paidOnAfter parameter. See https://apidocs.chargebee.com/docs/api/invoices?lang=php#list_invoices.

### v1.4.9 (2014-11-24)
* * *

* Support for Amazon Payments
* Details about customer's payment method is now available as sub resource of Customer.
* Bug fixes.

### v1.4.8 (2014-10-20)
* * *

Bug fixes.


### v1.4.7 (2014-09-16)
* * *

**Error Model**:

New simpler model for error handling has been implemented. Please see below api document for more details

https://apidocs.chargebee.com/docs/api?lang=php#error_handling 

The following methods in APIError have been deprecated.
* getHttpCode()  (Use getHttpStatusCode() instead).
* getErrorNo() (Now all IO exceptions are thrown as ChargeBee_IOException).

The changes are backward compatible. Ensure that  your error handling code is tested after you upgrade to this version.

**APIs Updated**:

Shipping Address support added to *create subscription for a customer* api call.


### v1.4.6 (2014-08-28)
* * *
* Customer id can be passed to the checkout new subscription operation.

* Added support for affiliate integration to accept affiliate token and the ip address from where the subscription was created. See https://apidocs.chargebee.com/docs/api/subscriptions#create_a_subscription.

### v1.4.5 (2014-08-21)
* * *
Fixing encoding issue for url path.

### v1.4.4 (2014-08-13)
* * *
Added properties:
* Property has_scheduled_changes added to the Subscription resource to indicate whether there are any pending change scheduled for this Subscription

APIs added:
* Retrieve a subscription with scheduled changes applied. See https://apidocs.chargebee.com/docs/api/subscriptions#retrieve_with_scheduled_changes.
* Remove schedule changes for a subscription. See https://apidocs.chargebee.com/docs/api/subscriptions#remove_scheduled_changes.

APIs updated:
* Ability to pass description for Plans & Addons while Creating & Updating. 

APIs Removed:
* Refund a Transaction - In ChargeBee, the 'refunds' are tracked against the invoice for which they are issued. A payment transaction can be associated with only one invoice now. So Transaction.refund() API is indeed a shortcut for Transaction.associatedInvoice().refund(). 

### v1.4.3 (2014-07-29)
* * *
APIs added:
* Add a one time charged to the subscription which will be added to the invoice generated at the end of the current term. See https://apidocs.chargebee.com/docs/api/subscriptions#add_charge_at_term_end.
* Add a "non-recurring addon" charge to a subscription which will be added to the invoice generated at the end of the current term. See https://apidocs.chargebee.com/docs/api/subscriptions#charge_addon_at_term_end.
*Return an estimate of the amount that will be charged when the subscription renews. See https://apidocs.chargebee.com/docs/api/estimates#subscription_renewal_estimate

APIs updated:
* Now plans supports charge model to specify how the subscription plan charges should be calculated. See https://apidocs.chargebee.com/docs/api/plans#plan_attributes
* Include delayed charges while calculating the Estimate.

### v1.4.2 (2014-06-19)
* * *
APIs added:
* Retrieve invoices for a customer. See https://apidocs.chargebee.com/docs/api/invoices?lang=php#list_invoices_for_a_customer.
* Retrieve transactions for a customer. See https://apidocs.chargebee.com/docs/api/transactions?lang=php#list_transactions_for_a_customer.

APIs updated:
* Now, a customer(without subscription) can be charged(Create invoice for Charge) for one time charges. See https://apidocs.chargebee.com/docs/api/invoices?lang=php#create_invoice_for_charge.
* Now, a customer(without subscription) can be charged for one time addons(Create invoice for Addon). See https://apidocs.chargebee.com/docs/api/invoices?lang=php#create_invoice_for_addon.

### v1.4.1 (2014-05-28)
* * *
New API to support Single Sign-on (SSO) to access the customer portal, if you already have your own authentication for your website. See https://apidocs.chargebee.com/docs/api/portal_sessions?lang=php.

### v1.4.0 (2014-05-23)
* * *
* New API to create customer without subscription. See https://apidocs.chargebee.com/docs/api/customers#create_a_customer

* New API to fetch invoices for a customer. This helps you fetch the invoices created due to multiple subscriptions present for any customer. See https://apidocs.chargebee.com/docs/api/invoices#list_invoices_for_a_customer

* PORTAL as event source added to indicate any changes initiated via Customer Portal. 

* Customer id reference is added to the invoice attributes.

### v1.3.9  (2014-04-22)
* * *
Support for returning shipping address as part of create/update subscription API.

### v1.3.8  (2014-04-17)
* * *
Issue fixes.

### v1.3.7  (2014-03-26)
* * *
* Now the [Transaction attributes](https://apidocs.chargebee.com/docs/api/transactions#transaction_attributes "Transaction attributes") contains the details about the linked invoices.

* Now the [Invoice attributes](https://apidocs.chargebee.com/docs/api/invoices#invoice_attributes "Invoice attributes") contains the details about the linked transactions.

* Support for recording a payment received via offline mode. See our API documentation on [Record Payment for an Invoice](https://apidocs.chargebee.com/docs/api/transactions#record_payment_for_an_invoice "Record Payment for an Invoice")

### v1.3.6  (2014-03-18)
* * *
Support for deleting the plans & addons. See our API documentation on [Delete a plan](https://apidocs.chargebee.com/docs/api/plans#delete_a_plan "Delete a plan") & [Delete an addon](https://apidocs.chargebee.com/docs/api/addons#delete_an_addon "Delete an addon").

### v1.3.5  (2014-03-10)
* * *
* Support for creating coupons on the fly via API

* Support for updating the plans & addons.

* Now our hosted pages can be shown as popup checkout using our javascript API.

### v1.3.4  (2014-02-19)
* * *
* More attributes added for the address resource.

* Support for passing shipping address for create subscription & update subscription API.

### v1.3.3  (2014-02-12)
* * *
* New resource Download added to expose the URLs from which you can download resources like invoice PDFs.

* Update card hosted page now support pass_thru_parameter like the checkout pages.

* Support for downloading invoice as PDF.

* Transaction resource now exposes the void description for transactions that are voided.

### v1.3.2  (2014-02-02)
* * *
Support for refund invoice and transaction.

### v1.3.1  (2014-01-26)
* * *
Support for creating plans & addons on the fly via API.

### v1.3.0  (2014-01-16)
* * *
* Adding object that represent comments resource. Now comments can be added to the entities - Subscription, Invoice, Transaction, Plan, Addon & Coupon.

* API to fetch multiple subscriptions of a customer.
