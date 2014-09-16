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
