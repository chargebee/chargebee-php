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
