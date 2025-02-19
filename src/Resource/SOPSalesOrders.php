<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\SOPSalesOrders\CurrentUserSopUserPermissionsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\LookupSopOrdersResource;
use Selectco\SageApi\Resource\SOPSalesOrders\LookupSopQuotesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\OrderLineItemTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopAdditionalChargesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopAllocationLineViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopBackToBackStatusTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopCancelledLinesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopConfirmationIntentTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopConfirmDespatchBinItemsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopConfirmDespatchResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopConfirmDespatchTraceableItemsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopCustomerTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopDespatchDiscreteOrdersResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopDespatchReceiptsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopDocumentPrintStatusTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopDocumentProcessStatusTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopDocumentStatusTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopDocumentTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopExportReasonsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopIncotermsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopIntrastatStatusTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopInvoiceCreditTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrderDespatchLineViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrderDespatchViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrderEntryTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrderLinesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrderLineTraceableItemsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrderLineViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrderPaymentTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrderReturnInvoiceCreditViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrderReturnLineInvoiceCreditViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrderReturnViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrdersDuplicateResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopOrdersResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopPaymentMethodsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopProFormaLineViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopQuoteLineViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopQuotesDuplicateResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopQuotesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopQuoteViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopReturnLineViewsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopSettingsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopShowOnPickingListTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopTradeLineStatusTypesResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SopUserPermissionsResource;
use Selectco\SageApi\Resource\SOPSalesOrders\SuggestedProductsResource;

/**
 * Sage 200 v1 Extra SOP
 */
class SOPSalesOrders
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	public function currentUserSopUserPermissions(): CurrentUserSopUserPermissionsResource
	{
		return new CurrentUserSopUserPermissionsResource($this->connector);
	}


	public function lookupSopOrders(): LookupSopOrdersResource
	{
		return new LookupSopOrdersResource($this->connector);
	}


	public function lookupSopQuotes(): LookupSopQuotesResource
	{
		return new LookupSopQuotesResource($this->connector);
	}


	public function orderLineItemTypes(): OrderLineItemTypesResource
	{
		return new OrderLineItemTypesResource($this->connector);
	}


	public function sopAdditionalCharges(): SopAdditionalChargesResource
	{
		return new SopAdditionalChargesResource($this->connector);
	}


	public function sopAllocationLineViews(): SopAllocationLineViewsResource
	{
		return new SopAllocationLineViewsResource($this->connector);
	}


	public function sopBackToBackStatusTypes(): SopBackToBackStatusTypesResource
	{
		return new SopBackToBackStatusTypesResource($this->connector);
	}


	public function sopCancelledLines(): SopCancelledLinesResource
	{
		return new SopCancelledLinesResource($this->connector);
	}


	public function sopConfirmDespatch(): SopConfirmDespatchResource
	{
		return new SopConfirmDespatchResource($this->connector);
	}


	public function sopConfirmDespatchBinItems(): SopConfirmDespatchBinItemsResource
	{
		return new SopConfirmDespatchBinItemsResource($this->connector);
	}


	public function sopConfirmDespatchTraceableItems(): SopConfirmDespatchTraceableItemsResource
	{
		return new SopConfirmDespatchTraceableItemsResource($this->connector);
	}


	public function sopConfirmationIntentTypes(): SopConfirmationIntentTypesResource
	{
		return new SopConfirmationIntentTypesResource($this->connector);
	}


	public function sopCustomerTypes(): SopCustomerTypesResource
	{
		return new SopCustomerTypesResource($this->connector);
	}


	public function sopDespatchDiscreteOrders(): SopDespatchDiscreteOrdersResource
	{
		return new SopDespatchDiscreteOrdersResource($this->connector);
	}


	public function sopDespatchReceipts(): SopDespatchReceiptsResource
	{
		return new SopDespatchReceiptsResource($this->connector);
	}


	public function sopDocumentPrintStatusTypes(): SopDocumentPrintStatusTypesResource
	{
		return new SopDocumentPrintStatusTypesResource($this->connector);
	}


	public function sopDocumentProcessStatusTypes(): SopDocumentProcessStatusTypesResource
	{
		return new SopDocumentProcessStatusTypesResource($this->connector);
	}


	public function sopDocumentStatusTypes(): SopDocumentStatusTypesResource
	{
		return new SopDocumentStatusTypesResource($this->connector);
	}


	public function sopDocumentTypes(): SopDocumentTypesResource
	{
		return new SopDocumentTypesResource($this->connector);
	}


	public function sopExportReasons(): SopExportReasonsResource
	{
		return new SopExportReasonsResource($this->connector);
	}


	public function sopIncoterms(): SopIncotermsResource
	{
		return new SopIncotermsResource($this->connector);
	}


	public function sopIntrastatStatusTypes(): SopIntrastatStatusTypesResource
	{
		return new SopIntrastatStatusTypesResource($this->connector);
	}


	public function sopInvoiceCreditTypes(): SopInvoiceCreditTypesResource
	{
		return new SopInvoiceCreditTypesResource($this->connector);
	}


	public function sopOrderDespatchLineViews(): SopOrderDespatchLineViewsResource
	{
		return new SopOrderDespatchLineViewsResource($this->connector);
	}


	public function sopOrderDespatchViews(): SopOrderDespatchViewsResource
	{
		return new SopOrderDespatchViewsResource($this->connector);
	}


	public function sopOrderEntryTypes(): SopOrderEntryTypesResource
	{
		return new SopOrderEntryTypesResource($this->connector);
	}


	public function sopOrderLineTraceableItems(): SopOrderLineTraceableItemsResource
	{
		return new SopOrderLineTraceableItemsResource($this->connector);
	}


	public function sopOrderLineViews(): SopOrderLineViewsResource
	{
		return new SopOrderLineViewsResource($this->connector);
	}


	public function sopOrderLines(): SopOrderLinesResource
	{
		return new SopOrderLinesResource($this->connector);
	}


	public function sopOrderPaymentTypes(): SopOrderPaymentTypesResource
	{
		return new SopOrderPaymentTypesResource($this->connector);
	}


	public function sopOrderReturnInvoiceCreditViews(): SopOrderReturnInvoiceCreditViewsResource
	{
		return new SopOrderReturnInvoiceCreditViewsResource($this->connector);
	}


	public function sopOrderReturnLineInvoiceCreditViews(): SopOrderReturnLineInvoiceCreditViewsResource
	{
		return new SopOrderReturnLineInvoiceCreditViewsResource($this->connector);
	}


	public function sopOrderReturnViews(): SopOrderReturnViewsResource
	{
		return new SopOrderReturnViewsResource($this->connector);
	}


	public function sopOrders(): SopOrdersResource
	{
		return new SopOrdersResource($this->connector);
	}


	public function sopOrdersDuplicate(): SopOrdersDuplicateResource
	{
		return new SopOrdersDuplicateResource($this->connector);
	}


	public function sopPaymentMethods(): SopPaymentMethodsResource
	{
		return new SopPaymentMethodsResource($this->connector);
	}


	public function sopProFormaLineViews(): SopProFormaLineViewsResource
	{
		return new SopProFormaLineViewsResource($this->connector);
	}


	public function sopQuoteLineViews(): SopQuoteLineViewsResource
	{
		return new SopQuoteLineViewsResource($this->connector);
	}


	public function sopQuoteViews(): SopQuoteViewsResource
	{
		return new SopQuoteViewsResource($this->connector);
	}


	public function sopQuotes(): SopQuotesResource
	{
		return new SopQuotesResource($this->connector);
	}


	public function sopQuotesDuplicate(): SopQuotesDuplicateResource
	{
		return new SopQuotesDuplicateResource($this->connector);
	}


	public function sopReturnLineViews(): SopReturnLineViewsResource
	{
		return new SopReturnLineViewsResource($this->connector);
	}


	public function sopSettings(): SopSettingsResource
	{
		return new SopSettingsResource($this->connector);
	}


	public function sopShowOnPickingListTypes(): SopShowOnPickingListTypesResource
	{
		return new SopShowOnPickingListTypesResource($this->connector);
	}


	public function sopTradeLineStatusTypes(): SopTradeLineStatusTypesResource
	{
		return new SopTradeLineStatusTypesResource($this->connector);
	}


	public function sopUserPermissions(): SopUserPermissionsResource
	{
		return new SopUserPermissionsResource($this->connector);
	}


	public function suggestedProducts(): SuggestedProductsResource
	{
		return new SuggestedProductsResource($this->connector);
	}
}
