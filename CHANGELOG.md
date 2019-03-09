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
