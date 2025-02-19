<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\Purchases\AuthorisationTypesResource;
use Selectco\SageApi\Resource\Purchases\FactorHousesResource;
use Selectco\SageApi\Resource\Purchases\LookupSuppliersResource;
use Selectco\SageApi\Resource\Purchases\PaymentGroupsResource;
use Selectco\SageApi\Resource\Purchases\PaymentTypesResource;
use Selectco\SageApi\Resource\Purchases\PurchaseAgedCreditorDetailedViewsResource;
use Selectco\SageApi\Resource\Purchases\PurchaseAgedCreditorSummaryViewsResource;
use Selectco\SageApi\Resource\Purchases\PurchaseAuthorisationsResource;
use Selectco\SageApi\Resource\Purchases\PurchaseCreditNotesResource;
use Selectco\SageApi\Resource\Purchases\PurchaseInvoicesResource;
use Selectco\SageApi\Resource\Purchases\PurchaseLedgerSettingsResource;
use Selectco\SageApi\Resource\Purchases\PurchasePaymentsResource;
use Selectco\SageApi\Resource\Purchases\PurchasePostedTransactionMemosResource;
use Selectco\SageApi\Resource\Purchases\PurchasePostedTransactionsResource;
use Selectco\SageApi\Resource\Purchases\PurchaseReceiptsResource;
use Selectco\SageApi\Resource\Purchases\PurchaseTradingPeriodsResource;
use Selectco\SageApi\Resource\Purchases\PurchaseTransactionEnquiryViewsResource;
use Selectco\SageApi\Resource\Purchases\PurchaseTransactionViewsResource;
use Selectco\SageApi\Resource\Purchases\SagePaymentsSupplierStatusTypesResource;
use Selectco\SageApi\Resource\Purchases\SupplierContactRolesResource;
use Selectco\SageApi\Resource\Purchases\SupplierContactsResource;
use Selectco\SageApi\Resource\Purchases\SupplierEmailsResource;
use Selectco\SageApi\Resource\Purchases\SupplierFaxesResource;
use Selectco\SageApi\Resource\Purchases\SupplierMemosResource;
use Selectco\SageApi\Resource\Purchases\SupplierMobilesResource;
use Selectco\SageApi\Resource\Purchases\SupplierPeriodValueViewsResource;
use Selectco\SageApi\Resource\Purchases\SuppliersResource;
use Selectco\SageApi\Resource\Purchases\SupplierTelephonesResource;
use Selectco\SageApi\Resource\Purchases\SupplierViewsResource;
use Selectco\SageApi\Resource\Purchases\SupplierWebsitesResource;
use Selectco\SageApi\Resource\Purchases\SupplierYearValueViewsResource;

/**
 * Sage 200 v1 Extra Purchases
 */
class Purchases
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	public function authorisationTypes(): AuthorisationTypesResource
	{
		return new AuthorisationTypesResource($this->connector);
	}


	public function factorHouses(): FactorHousesResource
	{
		return new FactorHousesResource($this->connector);
	}


	public function lookupSuppliers(): LookupSuppliersResource
	{
		return new LookupSuppliersResource($this->connector);
	}


	public function paymentGroups(): PaymentGroupsResource
	{
		return new PaymentGroupsResource($this->connector);
	}


	public function paymentTypes(): PaymentTypesResource
	{
		return new PaymentTypesResource($this->connector);
	}


	public function purchaseAgedCreditorDetailedViews(): PurchaseAgedCreditorDetailedViewsResource
	{
		return new PurchaseAgedCreditorDetailedViewsResource($this->connector);
	}


	public function purchaseAgedCreditorSummaryViews(): PurchaseAgedCreditorSummaryViewsResource
	{
		return new PurchaseAgedCreditorSummaryViewsResource($this->connector);
	}


	public function purchaseAuthorisations(): PurchaseAuthorisationsResource
	{
		return new PurchaseAuthorisationsResource($this->connector);
	}


	public function purchaseCreditNotes(): PurchaseCreditNotesResource
	{
		return new PurchaseCreditNotesResource($this->connector);
	}


	public function purchaseInvoices(): PurchaseInvoicesResource
	{
		return new PurchaseInvoicesResource($this->connector);
	}


	public function purchaseLedgerSettings(): PurchaseLedgerSettingsResource
	{
		return new PurchaseLedgerSettingsResource($this->connector);
	}


	public function purchasePayments(): PurchasePaymentsResource
	{
		return new PurchasePaymentsResource($this->connector);
	}


	public function purchasePostedTransactionMemos(): PurchasePostedTransactionMemosResource
	{
		return new PurchasePostedTransactionMemosResource($this->connector);
	}


	public function purchasePostedTransactions(): PurchasePostedTransactionsResource
	{
		return new PurchasePostedTransactionsResource($this->connector);
	}


	public function purchaseReceipts(): PurchaseReceiptsResource
	{
		return new PurchaseReceiptsResource($this->connector);
	}


	public function purchaseTradingPeriods(): PurchaseTradingPeriodsResource
	{
		return new PurchaseTradingPeriodsResource($this->connector);
	}


	public function purchaseTransactionEnquiryViews(): PurchaseTransactionEnquiryViewsResource
	{
		return new PurchaseTransactionEnquiryViewsResource($this->connector);
	}


	public function purchaseTransactionViews(): PurchaseTransactionViewsResource
	{
		return new PurchaseTransactionViewsResource($this->connector);
	}


	public function sagePaymentsSupplierStatusTypes(): SagePaymentsSupplierStatusTypesResource
	{
		return new SagePaymentsSupplierStatusTypesResource($this->connector);
	}


	public function supplierContactRoles(): SupplierContactRolesResource
	{
		return new SupplierContactRolesResource($this->connector);
	}


	public function supplierContacts(): SupplierContactsResource
	{
		return new SupplierContactsResource($this->connector);
	}


	public function supplierEmails(): SupplierEmailsResource
	{
		return new SupplierEmailsResource($this->connector);
	}


	public function supplierFaxes(): SupplierFaxesResource
	{
		return new SupplierFaxesResource($this->connector);
	}


	public function supplierMemos(): SupplierMemosResource
	{
		return new SupplierMemosResource($this->connector);
	}


	public function supplierMobiles(): SupplierMobilesResource
	{
		return new SupplierMobilesResource($this->connector);
	}


	public function supplierPeriodValueViews(): SupplierPeriodValueViewsResource
	{
		return new SupplierPeriodValueViewsResource($this->connector);
	}


	public function supplierTelephones(): SupplierTelephonesResource
	{
		return new SupplierTelephonesResource($this->connector);
	}


	public function supplierViews(): SupplierViewsResource
	{
		return new SupplierViewsResource($this->connector);
	}


	public function supplierWebsites(): SupplierWebsitesResource
	{
		return new SupplierWebsitesResource($this->connector);
	}


	public function supplierYearValueViews(): SupplierYearValueViewsResource
	{
		return new SupplierYearValueViewsResource($this->connector);
	}


	public function suppliers(): SuppliersResource
	{
		return new SuppliersResource($this->connector);
	}
}
