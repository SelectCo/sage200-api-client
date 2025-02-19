<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\POPPurchaseOrders\LookupPopOrdersResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopAdditionalChargesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopAuthorisationStatusTypesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopCancelledLinesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopDeliveryAddressActionTypesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopDeliveryAddressTypesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopDocumentPrintStatusTypesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopDocumentProcessStatusTypesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopDocumentStatusTypesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopDocumentTypesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopIntrastatStatusTypesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopInvoiceCreditTypesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopLinkedOrderLinesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopLinkedRequisitionLinesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopOrderGenerationTypesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopOrderLinesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopOrderLineViewsResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopOrderReturnInvoiceCreditViewsResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopOrderReturnLineInvoiceCreditViewsResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopOrderReturnLineReceiptReturnViewsResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopOrderReturnViewsResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopOrdersDuplicateResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopOrdersResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopRequisitionFulfilmentLinesResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopRequisitionFulfilmentLineViewsResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopSettingsResource;
use Selectco\SageApi\Resource\POPPurchaseOrders\PopTradeLineStatusTypesResource;

/**
 * Sage 200 v1 Extra POP
 */
class POPPurchaseOrders
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	public function lookupPopOrders(): LookupPopOrdersResource
	{
		return new LookupPopOrdersResource($this->connector);
	}


	public function popAdditionalCharges(): PopAdditionalChargesResource
	{
		return new PopAdditionalChargesResource($this->connector);
	}


	public function popAuthorisationStatusTypes(): PopAuthorisationStatusTypesResource
	{
		return new PopAuthorisationStatusTypesResource($this->connector);
	}


	public function popCancelledLines(): PopCancelledLinesResource
	{
		return new PopCancelledLinesResource($this->connector);
	}


	public function popDeliveryAddressActionTypes(): PopDeliveryAddressActionTypesResource
	{
		return new PopDeliveryAddressActionTypesResource($this->connector);
	}


	public function popDeliveryAddressTypes(): PopDeliveryAddressTypesResource
	{
		return new PopDeliveryAddressTypesResource($this->connector);
	}


	public function popDocumentPrintStatusTypes(): PopDocumentPrintStatusTypesResource
	{
		return new PopDocumentPrintStatusTypesResource($this->connector);
	}


	public function popDocumentProcessStatusTypes(): PopDocumentProcessStatusTypesResource
	{
		return new PopDocumentProcessStatusTypesResource($this->connector);
	}


	public function popDocumentStatusTypes(): PopDocumentStatusTypesResource
	{
		return new PopDocumentStatusTypesResource($this->connector);
	}


	public function popDocumentTypes(): PopDocumentTypesResource
	{
		return new PopDocumentTypesResource($this->connector);
	}


	public function popIntrastatStatusTypes(): PopIntrastatStatusTypesResource
	{
		return new PopIntrastatStatusTypesResource($this->connector);
	}


	public function popInvoiceCreditTypes(): PopInvoiceCreditTypesResource
	{
		return new PopInvoiceCreditTypesResource($this->connector);
	}


	public function popLinkedOrderLines(): PopLinkedOrderLinesResource
	{
		return new PopLinkedOrderLinesResource($this->connector);
	}


	public function popLinkedRequisitionLines(): PopLinkedRequisitionLinesResource
	{
		return new PopLinkedRequisitionLinesResource($this->connector);
	}


	public function popOrderGenerationTypes(): PopOrderGenerationTypesResource
	{
		return new PopOrderGenerationTypesResource($this->connector);
	}


	public function popOrderLineViews(): PopOrderLineViewsResource
	{
		return new PopOrderLineViewsResource($this->connector);
	}


	public function popOrderLines(): PopOrderLinesResource
	{
		return new PopOrderLinesResource($this->connector);
	}


	public function popOrderReturnInvoiceCreditViews(): PopOrderReturnInvoiceCreditViewsResource
	{
		return new PopOrderReturnInvoiceCreditViewsResource($this->connector);
	}


	public function popOrderReturnLineInvoiceCreditViews(): PopOrderReturnLineInvoiceCreditViewsResource
	{
		return new PopOrderReturnLineInvoiceCreditViewsResource($this->connector);
	}


	public function popOrderReturnLineReceiptReturnViews(): PopOrderReturnLineReceiptReturnViewsResource
	{
		return new PopOrderReturnLineReceiptReturnViewsResource($this->connector);
	}


	public function popOrderReturnViews(): PopOrderReturnViewsResource
	{
		return new PopOrderReturnViewsResource($this->connector);
	}


	public function popOrders(): PopOrdersResource
	{
		return new PopOrdersResource($this->connector);
	}


	public function popOrdersDuplicate(): PopOrdersDuplicateResource
	{
		return new PopOrdersDuplicateResource($this->connector);
	}


	public function popRequisitionFulfilmentLineViews(): PopRequisitionFulfilmentLineViewsResource
	{
		return new PopRequisitionFulfilmentLineViewsResource($this->connector);
	}


	public function popRequisitionFulfilmentLines(): PopRequisitionFulfilmentLinesResource
	{
		return new PopRequisitionFulfilmentLinesResource($this->connector);
	}


	public function popSettings(): PopSettingsResource
	{
		return new PopSettingsResource($this->connector);
	}


	public function popTradeLineStatusTypes(): PopTradeLineStatusTypesResource
	{
		return new PopTradeLineStatusTypesResource($this->connector);
	}
}
