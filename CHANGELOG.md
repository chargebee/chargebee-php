###v2.1.6 (2016-11-18)
* * * 

** APIs updated**:
A new attribute, 'tax_profile_id' has been added to Addon and Plan resource.
See : https://apidocs.chargebee.com/docs/api/plans#plan_attributes

The new input parameter 'tax_profile_id' has been added in Create and Update Addon and Plan APIs.
See : https://apidocs.chargebee.com/docs/api/plans#create_a_plan

The new cancel reason type 'non_compliant_customer' has been added to the Subscription resource.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

###v2.1.5 (2016-11-09)
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


###v2.1.4 (2016-10-27)
* * * 

** APIs updated**:

The attribute "preferred_currency_code" is added to Customer and a new input parameter "preferred_currency_code" is added  Create Customer and Update Customer API.
See : https://apidocs.chargebee.com/docs/api/customers#customer_attributes

###v2.1.3 (2016-09-30)
* * * 

** APIs updated**:
The new attributes "updated_at", "resource_version" and "deleted" is returned as part of Customer, Subscription, Invoice, Credit Note and Transaction resources.
See : https://apidocs.chargebee.com/docs/api/subscriptions#subscription_attributes

The new parameter "include_deleted" is added to Customer, Subscription, Invoice, Credit Note and Transaction List API.
See : https://apidocs.chargebee.com/docs/api/customers#list_customers

The new parameter "date" is added to Create Credit Note API.
See : https://apidocs.chargebee.com/docs/api/credit_notes#create_credit_note

###v2.1.2 (2016-09-03)
* * * 
** APIs added**:
A new endpoint to create Credit Note is added. See : https://apidocs.chargebee.com/docs/api/credit_notes#create_credit_note

A new endpoint to write off Invoice is added. See : https://apidocs.chargebee.com/docs/api/invoices#write_off_an_invoice

** APIs updated**:
The attribute "forward_url" is given as input for Create a Portal Session API.
See : https://apidocs.chargebee.com/docs/api/portal_sessions#create_a_portal_session

###v2.1.1 (2016-08-25)
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


###v2.1.0 (2016-08-02)
* * * 
** APIs added**:
A new endpoint to retrieve Credit Note as PDF. See : https://apidocs.chargebee.com/docs/api/credit_notes#retrieve_credit_note_as_pdf

** APIs updated**:
The attribute "invoice notes" is added to subscription in Hosted Pages Checkout New and Checkout Existing API's.
See : https://apidocs.chargebee.com/docs/api/hosted_pages#checkout_new_subscription

The filter parameter "paid_at" is added to list invoices and "paid_on_after" is deprecated. See : https://apidocs.chargebee.com/docs/api/invoices#list_invoices

The filter parameter "occurred_at", "webhook_status", "event_type" is added to list events and parameter "start_time", "end_time", "webhook_status", "event_type" is deprecated. See : https://apidocs.chargebee.com/docs/api/events#list_events

###v2.0.9 (2016-07-18)
* * * 
** APIs added**:
A new endpoint to remove coupons associated with the subscription is added. See : https://apidocs.chargebee.com/docs/api/subscriptions#remove_coupons
A new endpoint to record excess payments for a customer is added. See : https://apidocs.chargebee.com/docs/api/customers#record_an_excess_payment_for_a_customer

###v2.0.8 (2016-07-06)
* * * 
** APIs added**:
A new endpoint to delete a coupon added. See : https://apidocs.chargebee.com/docs/api/coupons#delete_a_coupon

###v2.0.7(2016-07-04)
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

Shipping and Billing Address are returned as part of Invoice resource attributes. This returns the shiping & billing address that was present at the time of invoice generation.

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
