<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\Sales\CustomerAlertsResource;
use Selectco\SageApi\Resource\Sales\CustomerCardsResource;
use Selectco\SageApi\Resource\Sales\CustomerContactRolesResource;
use Selectco\SageApi\Resource\Sales\CustomerContactsResource;
use Selectco\SageApi\Resource\Sales\CustomerDeliveryAddressesResource;
use Selectco\SageApi\Resource\Sales\CustomerEmailsResource;
use Selectco\SageApi\Resource\Sales\CustomerFaxesResource;
use Selectco\SageApi\Resource\Sales\CustomerMemosResource;
use Selectco\SageApi\Resource\Sales\CustomerMobilesResource;
use Selectco\SageApi\Resource\Sales\CustomerPeriodValueViewsResource;
use Selectco\SageApi\Resource\Sales\CustomerPriceBandsResource;
use Selectco\SageApi\Resource\Sales\CustomerPriceEnquiryResource;
use Selectco\SageApi\Resource\Sales\CustomerSopInvoiceCreditLineViewsResource;
use Selectco\SageApi\Resource\Sales\CustomersResource;
use Selectco\SageApi\Resource\Sales\CustomerTelephonesResource;
use Selectco\SageApi\Resource\Sales\CustomerViewsResource;
use Selectco\SageApi\Resource\Sales\CustomerWebsitesResource;
use Selectco\SageApi\Resource\Sales\CustomerYearValueViewsResource;
use Selectco\SageApi\Resource\Sales\DocumentTransmissionMethodTypesResource;
use Selectco\SageApi\Resource\Sales\FinanceChargesResource;
use Selectco\SageApi\Resource\Sales\HeadOfficeTypesResource;
use Selectco\SageApi\Resource\Sales\LookupCustomersResource;
use Selectco\SageApi\Resource\Sales\SalesAgedDebtorDetailedViewsResource;
use Selectco\SageApi\Resource\Sales\SalesAgedDebtorSummaryViewsResource;
use Selectco\SageApi\Resource\Sales\SalesAgedTransactionPeriodViewsResource;
use Selectco\SageApi\Resource\Sales\SalesAllocationsResource;
use Selectco\SageApi\Resource\Sales\SalesCreditNotesResource;
use Selectco\SageApi\Resource\Sales\SalesHistoricalTransactionsResource;
use Selectco\SageApi\Resource\Sales\SalesInvoicesResource;
use Selectco\SageApi\Resource\Sales\SalesLedgerSettingsResource;
use Selectco\SageApi\Resource\Sales\SalesPaymentsResource;
use Selectco\SageApi\Resource\Sales\SalesPostedTransactionMemosResource;
use Selectco\SageApi\Resource\Sales\SalesPostedTransactionsResource;
use Selectco\SageApi\Resource\Sales\SalesReceiptsResource;
use Selectco\SageApi\Resource\Sales\SalesTradingPeriodsResource;
use Selectco\SageApi\Resource\Sales\SalesTransactionEnquiryViewsResource;
use Selectco\SageApi\Resource\Sales\SalesTransactionViewsResource;
use Selectco\SageApi\Resource\Sales\StatementAgeingTermsResource;
use Selectco\SageApi\Resource\Sales\StatementLayoutTypesResource;
use Selectco\SageApi\Resource\Sales\StatementTermsResource;

/**
 * Sage 200 v1 Extra Sales
 */
class Sales
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	public function customerAlerts(): CustomerAlertsResource
	{
		return new CustomerAlertsResource($this->connector);
	}


	public function customerCards(): CustomerCardsResource
	{
		return new CustomerCardsResource($this->connector);
	}


	public function customerContactRoles(): CustomerContactRolesResource
	{
		return new CustomerContactRolesResource($this->connector);
	}


	public function customerContacts(): CustomerContactsResource
	{
		return new CustomerContactsResource($this->connector);
	}


	public function customerDeliveryAddresses(): CustomerDeliveryAddressesResource
	{
		return new CustomerDeliveryAddressesResource($this->connector);
	}


	public function customerEmails(): CustomerEmailsResource
	{
		return new CustomerEmailsResource($this->connector);
	}


	public function customerFaxes(): CustomerFaxesResource
	{
		return new CustomerFaxesResource($this->connector);
	}


	public function customerMemos(): CustomerMemosResource
	{
		return new CustomerMemosResource($this->connector);
	}


	public function customerMobiles(): CustomerMobilesResource
	{
		return new CustomerMobilesResource($this->connector);
	}


	public function customerPeriodValueViews(): CustomerPeriodValueViewsResource
	{
		return new CustomerPeriodValueViewsResource($this->connector);
	}


	public function customerPriceBands(): CustomerPriceBandsResource
	{
		return new CustomerPriceBandsResource($this->connector);
	}


	public function customerPriceEnquiry(): CustomerPriceEnquiryResource
	{
		return new CustomerPriceEnquiryResource($this->connector);
	}


	public function customerSopInvoiceCreditLineViews(): CustomerSopInvoiceCreditLineViewsResource
	{
		return new CustomerSopInvoiceCreditLineViewsResource($this->connector);
	}


	public function customerTelephones(): CustomerTelephonesResource
	{
		return new CustomerTelephonesResource($this->connector);
	}


	public function customerViews(): CustomerViewsResource
	{
		return new CustomerViewsResource($this->connector);
	}


	public function customerWebsites(): CustomerWebsitesResource
	{
		return new CustomerWebsitesResource($this->connector);
	}


	public function customerYearValueViews(): CustomerYearValueViewsResource
	{
		return new CustomerYearValueViewsResource($this->connector);
	}


	public function customers(): CustomersResource
	{
		return new CustomersResource($this->connector);
	}


	public function documentTransmissionMethodTypes(): DocumentTransmissionMethodTypesResource
	{
		return new DocumentTransmissionMethodTypesResource($this->connector);
	}


	public function financeCharges(): FinanceChargesResource
	{
		return new FinanceChargesResource($this->connector);
	}


	public function headOfficeTypes(): HeadOfficeTypesResource
	{
		return new HeadOfficeTypesResource($this->connector);
	}


	public function lookupCustomers(): LookupCustomersResource
	{
		return new LookupCustomersResource($this->connector);
	}


	public function salesAgedDebtorDetailedViews(): SalesAgedDebtorDetailedViewsResource
	{
		return new SalesAgedDebtorDetailedViewsResource($this->connector);
	}


	public function salesAgedDebtorSummaryViews(): SalesAgedDebtorSummaryViewsResource
	{
		return new SalesAgedDebtorSummaryViewsResource($this->connector);
	}


	public function salesAgedTransactionPeriodViews(): SalesAgedTransactionPeriodViewsResource
	{
		return new SalesAgedTransactionPeriodViewsResource($this->connector);
	}


	public function salesAllocations(): SalesAllocationsResource
	{
		return new SalesAllocationsResource($this->connector);
	}


	public function salesCreditNotes(): SalesCreditNotesResource
	{
		return new SalesCreditNotesResource($this->connector);
	}


	public function salesHistoricalTransactions(): SalesHistoricalTransactionsResource
	{
		return new SalesHistoricalTransactionsResource($this->connector);
	}


	public function salesInvoices(): SalesInvoicesResource
	{
		return new SalesInvoicesResource($this->connector);
	}


	public function salesLedgerSettings(): SalesLedgerSettingsResource
	{
		return new SalesLedgerSettingsResource($this->connector);
	}


	public function salesPayments(): SalesPaymentsResource
	{
		return new SalesPaymentsResource($this->connector);
	}


	public function salesPostedTransactionMemos(): SalesPostedTransactionMemosResource
	{
		return new SalesPostedTransactionMemosResource($this->connector);
	}


	public function salesPostedTransactions(): SalesPostedTransactionsResource
	{
		return new SalesPostedTransactionsResource($this->connector);
	}


	public function salesReceipts(): SalesReceiptsResource
	{
		return new SalesReceiptsResource($this->connector);
	}


	public function salesTradingPeriods(): SalesTradingPeriodsResource
	{
		return new SalesTradingPeriodsResource($this->connector);
	}


	public function salesTransactionEnquiryViews(): SalesTransactionEnquiryViewsResource
	{
		return new SalesTransactionEnquiryViewsResource($this->connector);
	}


	public function salesTransactionViews(): SalesTransactionViewsResource
	{
		return new SalesTransactionViewsResource($this->connector);
	}


	public function statementAgeingTerms(): StatementAgeingTermsResource
	{
		return new StatementAgeingTermsResource($this->connector);
	}


	public function statementLayoutTypes(): StatementLayoutTypesResource
	{
		return new StatementLayoutTypesResource($this->connector);
	}


	public function statementTerms(): StatementTermsResource
	{
		return new StatementTermsResource($this->connector);
	}
}
