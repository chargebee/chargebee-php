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
