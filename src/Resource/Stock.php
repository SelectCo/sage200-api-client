<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\Stock\AlternativeProductsResource;
use Selectco\SageApi\Resource\Stock\AlternativeProductViewsResource;
use Selectco\SageApi\Resource\Stock\AutoGenerateOptionTypesResource;
use Selectco\SageApi\Resource\Stock\AutoGenerateSeparatorsResource;
use Selectco\SageApi\Resource\Stock\BinHoldingsResource;
use Selectco\SageApi\Resource\Stock\BomCostHeadingsResource;
use Selectco\SageApi\Resource\Stock\BomCostHeadingTypesResource;
use Selectco\SageApi\Resource\Stock\BomItemTypesResource;
use Selectco\SageApi\Resource\Stock\CostingMethodTypesResource;
use Selectco\SageApi\Resource\Stock\CrossSellProductsResource;
use Selectco\SageApi\Resource\Stock\CrossSellProductViewsResource;
use Selectco\SageApi\Resource\Stock\DiscrepancyStatusTypesResource;
use Selectco\SageApi\Resource\Stock\EntrySourceTypesResource;
use Selectco\SageApi\Resource\Stock\FulfilmentMethodTypesResource;
use Selectco\SageApi\Resource\Stock\FulfilmentSequenceTypesResource;
use Selectco\SageApi\Resource\Stock\InternalAreasResource;
use Selectco\SageApi\Resource\Stock\LabelPrintingOptionTypesResource;
use Selectco\SageApi\Resource\Stock\LandedCostsTypesResource;
use Selectco\SageApi\Resource\Stock\LookupProductGroupsResource;
use Selectco\SageApi\Resource\Stock\LookupProductsResource;
use Selectco\SageApi\Resource\Stock\LookupStockItemUnitsResource;
use Selectco\SageApi\Resource\Stock\PricingSourceTypesResource;
use Selectco\SageApi\Resource\Stock\ProductGroupSearchCategoryValuesResource;
use Selectco\SageApi\Resource\Stock\ProductGroupsResource;
use Selectco\SageApi\Resource\Stock\ProductMemosResource;
use Selectco\SageApi\Resource\Stock\ProductPurchaseFiguresResource;
use Selectco\SageApi\Resource\Stock\ProductSalesFiguresResource;
use Selectco\SageApi\Resource\Stock\ProductsDuplicateResource;
use Selectco\SageApi\Resource\Stock\ProductSearchResource;
use Selectco\SageApi\Resource\Stock\ProductSearchTypesResource;
use Selectco\SageApi\Resource\Stock\ProductsResource;
use Selectco\SageApi\Resource\Stock\ProductStatusTypesResource;
use Selectco\SageApi\Resource\Stock\ProductSuppliersResource;
use Selectco\SageApi\Resource\Stock\ProductTransactionGroupTypesResource;
use Selectco\SageApi\Resource\Stock\ProductTransactionTypesResource;
use Selectco\SageApi\Resource\Stock\ProductTransactionViewsResource;
use Selectco\SageApi\Resource\Stock\ProductTypesResource;
use Selectco\SageApi\Resource\Stock\ProductViewsResource;
use Selectco\SageApi\Resource\Stock\ProductWarehouseBinViewsResource;
use Selectco\SageApi\Resource\Stock\ProductWarehouseViewsResource;
use Selectco\SageApi\Resource\Stock\SearchCategoriesResource;
use Selectco\SageApi\Resource\Stock\SearchValuesResource;
use Selectco\SageApi\Resource\Stock\SerialAllocatedToWhoTypesResource;
use Selectco\SageApi\Resource\Stock\SourceAreaTypesResource;
use Selectco\SageApi\Resource\Stock\StockSettingsResource;
use Selectco\SageApi\Resource\Stock\StocktakeAmendItemsResource;
use Selectco\SageApi\Resource\Stock\StocktakeApproveCompleteResource;
use Selectco\SageApi\Resource\Stock\StocktakeCountSheetItemsResource;
use Selectco\SageApi\Resource\Stock\StocktakeCriteriaTemplatesResource;
use Selectco\SageApi\Resource\Stock\StocktakeEnterValuesResource;
use Selectco\SageApi\Resource\Stock\StocktakeNewItemsResource;
use Selectco\SageApi\Resource\Stock\StocktakeSelectorValueTypesResource;
use Selectco\SageApi\Resource\Stock\StocktakesResource;
use Selectco\SageApi\Resource\Stock\StocktakeStatusTypesResource;
use Selectco\SageApi\Resource\Stock\StocktakeTraceableTypesResource;
use Selectco\SageApi\Resource\Stock\StocktakeTypesResource;
use Selectco\SageApi\Resource\Stock\StocktakeViewAdjustmentsResource;
use Selectco\SageApi\Resource\Stock\StocktakeViewsResource;
use Selectco\SageApi\Resource\Stock\StockTransfersResource;
use Selectco\SageApi\Resource\Stock\StockTransferTraceableItemsResource;
use Selectco\SageApi\Resource\Stock\TraceableIssueStatusTypesResource;
use Selectco\SageApi\Resource\Stock\TraceableItemAllocationsResource;
use Selectco\SageApi\Resource\Stock\TraceableItemBalancesResource;
use Selectco\SageApi\Resource\Stock\TraceableItemIssuesResource;
use Selectco\SageApi\Resource\Stock\TraceableItemLocationsResource;
use Selectco\SageApi\Resource\Stock\TraceableItemReceiptsResource;
use Selectco\SageApi\Resource\Stock\TraceableItemsAmendResource;
use Selectco\SageApi\Resource\Stock\TraceableItemsAmendTraceableItemsResource;
use Selectco\SageApi\Resource\Stock\TraceableItemsAssignResource;
use Selectco\SageApi\Resource\Stock\TraceableItemsAssignTraceableItemsResource;
use Selectco\SageApi\Resource\Stock\TraceableItemTransactionsResource;
use Selectco\SageApi\Resource\Stock\TraceableTypesResource;
use Selectco\SageApi\Resource\Stock\UnitsResource;
use Selectco\SageApi\Resource\Stock\UnitTypesResource;
use Selectco\SageApi\Resource\Stock\WarehouseHoldingsResource;
use Selectco\SageApi\Resource\Stock\WarehousesResource;
use Selectco\SageApi\Resource\Stock\WarehouseTypesResource;

/**
 * Sage 200 v1 Extra Stock
 */
class Stock
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	public function alternativeProductViews(): AlternativeProductViewsResource
	{
		return new AlternativeProductViewsResource($this->connector);
	}


	public function alternativeProducts(): AlternativeProductsResource
	{
		return new AlternativeProductsResource($this->connector);
	}


	public function autoGenerateOptionTypes(): AutoGenerateOptionTypesResource
	{
		return new AutoGenerateOptionTypesResource($this->connector);
	}


	public function autoGenerateSeparators(): AutoGenerateSeparatorsResource
	{
		return new AutoGenerateSeparatorsResource($this->connector);
	}


	public function binHoldings(): BinHoldingsResource
	{
		return new BinHoldingsResource($this->connector);
	}


	public function bomCostHeadingTypes(): BomCostHeadingTypesResource
	{
		return new BomCostHeadingTypesResource($this->connector);
	}


	public function bomCostHeadings(): BomCostHeadingsResource
	{
		return new BomCostHeadingsResource($this->connector);
	}


	public function bomItemTypes(): BomItemTypesResource
	{
		return new BomItemTypesResource($this->connector);
	}


	public function costingMethodTypes(): CostingMethodTypesResource
	{
		return new CostingMethodTypesResource($this->connector);
	}


	public function crossSellProductViews(): CrossSellProductViewsResource
	{
		return new CrossSellProductViewsResource($this->connector);
	}


	public function crossSellProducts(): CrossSellProductsResource
	{
		return new CrossSellProductsResource($this->connector);
	}


	public function discrepancyStatusTypes(): DiscrepancyStatusTypesResource
	{
		return new DiscrepancyStatusTypesResource($this->connector);
	}


	public function entrySourceTypes(): EntrySourceTypesResource
	{
		return new EntrySourceTypesResource($this->connector);
	}


	public function fulfilmentMethodTypes(): FulfilmentMethodTypesResource
	{
		return new FulfilmentMethodTypesResource($this->connector);
	}


	public function fulfilmentSequenceTypes(): FulfilmentSequenceTypesResource
	{
		return new FulfilmentSequenceTypesResource($this->connector);
	}


	public function internalAreas(): InternalAreasResource
	{
		return new InternalAreasResource($this->connector);
	}


	public function labelPrintingOptionTypes(): LabelPrintingOptionTypesResource
	{
		return new LabelPrintingOptionTypesResource($this->connector);
	}


	public function landedCostsTypes(): LandedCostsTypesResource
	{
		return new LandedCostsTypesResource($this->connector);
	}


	public function lookupProductGroups(): LookupProductGroupsResource
	{
		return new LookupProductGroupsResource($this->connector);
	}


	public function lookupProducts(): LookupProductsResource
	{
		return new LookupProductsResource($this->connector);
	}


	public function lookupStockItemUnits(): LookupStockItemUnitsResource
	{
		return new LookupStockItemUnitsResource($this->connector);
	}


	public function pricingSourceTypes(): PricingSourceTypesResource
	{
		return new PricingSourceTypesResource($this->connector);
	}


	public function productGroupSearchCategoryValues(): ProductGroupSearchCategoryValuesResource
	{
		return new ProductGroupSearchCategoryValuesResource($this->connector);
	}


	public function productGroups(): ProductGroupsResource
	{
		return new ProductGroupsResource($this->connector);
	}


	public function productMemos(): ProductMemosResource
	{
		return new ProductMemosResource($this->connector);
	}


	public function productPurchaseFigures(): ProductPurchaseFiguresResource
	{
		return new ProductPurchaseFiguresResource($this->connector);
	}


	public function productSalesFigures(): ProductSalesFiguresResource
	{
		return new ProductSalesFiguresResource($this->connector);
	}


	public function productSearch(): ProductSearchResource
	{
		return new ProductSearchResource($this->connector);
	}


	public function productSearchTypes(): ProductSearchTypesResource
	{
		return new ProductSearchTypesResource($this->connector);
	}


	public function productStatusTypes(): ProductStatusTypesResource
	{
		return new ProductStatusTypesResource($this->connector);
	}


	public function productSuppliers(): ProductSuppliersResource
	{
		return new ProductSuppliersResource($this->connector);
	}


	public function productTransactionGroupTypes(): ProductTransactionGroupTypesResource
	{
		return new ProductTransactionGroupTypesResource($this->connector);
	}


	public function productTransactionTypes(): ProductTransactionTypesResource
	{
		return new ProductTransactionTypesResource($this->connector);
	}


	public function productTransactionViews(): ProductTransactionViewsResource
	{
		return new ProductTransactionViewsResource($this->connector);
	}


	public function productTypes(): ProductTypesResource
	{
		return new ProductTypesResource($this->connector);
	}


	public function productViews(): ProductViewsResource
	{
		return new ProductViewsResource($this->connector);
	}


	public function productWarehouseBinViews(): ProductWarehouseBinViewsResource
	{
		return new ProductWarehouseBinViewsResource($this->connector);
	}


	public function productWarehouseViews(): ProductWarehouseViewsResource
	{
		return new ProductWarehouseViewsResource($this->connector);
	}


	public function products(): ProductsResource
	{
		return new ProductsResource($this->connector);
	}


	public function productsDuplicate(): ProductsDuplicateResource
	{
		return new ProductsDuplicateResource($this->connector);
	}


	public function searchCategories(): SearchCategoriesResource
	{
		return new SearchCategoriesResource($this->connector);
	}


	public function searchValues(): SearchValuesResource
	{
		return new SearchValuesResource($this->connector);
	}


	public function serialAllocatedToWhoTypes(): SerialAllocatedToWhoTypesResource
	{
		return new SerialAllocatedToWhoTypesResource($this->connector);
	}


	public function sourceAreaTypes(): SourceAreaTypesResource
	{
		return new SourceAreaTypesResource($this->connector);
	}


	public function stockSettings(): StockSettingsResource
	{
		return new StockSettingsResource($this->connector);
	}


	public function stockTransferTraceableItems(): StockTransferTraceableItemsResource
	{
		return new StockTransferTraceableItemsResource($this->connector);
	}


	public function stockTransfers(): StockTransfersResource
	{
		return new StockTransfersResource($this->connector);
	}


	public function stocktakeAmendItems(): StocktakeAmendItemsResource
	{
		return new StocktakeAmendItemsResource($this->connector);
	}


	public function stocktakeApproveComplete(): StocktakeApproveCompleteResource
	{
		return new StocktakeApproveCompleteResource($this->connector);
	}


	public function stocktakeCountSheetItems(): StocktakeCountSheetItemsResource
	{
		return new StocktakeCountSheetItemsResource($this->connector);
	}


	public function stocktakeCriteriaTemplates(): StocktakeCriteriaTemplatesResource
	{
		return new StocktakeCriteriaTemplatesResource($this->connector);
	}


	public function stocktakeEnterValues(): StocktakeEnterValuesResource
	{
		return new StocktakeEnterValuesResource($this->connector);
	}


	public function stocktakeNewItems(): StocktakeNewItemsResource
	{
		return new StocktakeNewItemsResource($this->connector);
	}


	public function stocktakeSelectorValueTypes(): StocktakeSelectorValueTypesResource
	{
		return new StocktakeSelectorValueTypesResource($this->connector);
	}


	public function stocktakeStatusTypes(): StocktakeStatusTypesResource
	{
		return new StocktakeStatusTypesResource($this->connector);
	}


	public function stocktakeTraceableTypes(): StocktakeTraceableTypesResource
	{
		return new StocktakeTraceableTypesResource($this->connector);
	}


	public function stocktakeTypes(): StocktakeTypesResource
	{
		return new StocktakeTypesResource($this->connector);
	}


	public function stocktakeViewAdjustments(): StocktakeViewAdjustmentsResource
	{
		return new StocktakeViewAdjustmentsResource($this->connector);
	}


	public function stocktakeViews(): StocktakeViewsResource
	{
		return new StocktakeViewsResource($this->connector);
	}


	public function stocktakes(): StocktakesResource
	{
		return new StocktakesResource($this->connector);
	}


	public function traceableIssueStatusTypes(): TraceableIssueStatusTypesResource
	{
		return new TraceableIssueStatusTypesResource($this->connector);
	}


	public function traceableItemAllocations(): TraceableItemAllocationsResource
	{
		return new TraceableItemAllocationsResource($this->connector);
	}


	public function traceableItemBalances(): TraceableItemBalancesResource
	{
		return new TraceableItemBalancesResource($this->connector);
	}


	public function traceableItemIssues(): TraceableItemIssuesResource
	{
		return new TraceableItemIssuesResource($this->connector);
	}


	public function traceableItemLocations(): TraceableItemLocationsResource
	{
		return new TraceableItemLocationsResource($this->connector);
	}


	public function traceableItemReceipts(): TraceableItemReceiptsResource
	{
		return new TraceableItemReceiptsResource($this->connector);
	}


	public function traceableItemTransactions(): TraceableItemTransactionsResource
	{
		return new TraceableItemTransactionsResource($this->connector);
	}


	public function traceableItemsAmend(): TraceableItemsAmendResource
	{
		return new TraceableItemsAmendResource($this->connector);
	}


	public function traceableItemsAmendTraceableItems(): TraceableItemsAmendTraceableItemsResource
	{
		return new TraceableItemsAmendTraceableItemsResource($this->connector);
	}


	public function traceableItemsAssign(): TraceableItemsAssignResource
	{
		return new TraceableItemsAssignResource($this->connector);
	}


	public function traceableItemsAssignTraceableItems(): TraceableItemsAssignTraceableItemsResource
	{
		return new TraceableItemsAssignTraceableItemsResource($this->connector);
	}


	public function traceableTypes(): TraceableTypesResource
	{
		return new TraceableTypesResource($this->connector);
	}


	public function unitTypes(): UnitTypesResource
	{
		return new UnitTypesResource($this->connector);
	}


	public function units(): UnitsResource
	{
		return new UnitsResource($this->connector);
	}


	public function warehouseHoldings(): WarehouseHoldingsResource
	{
		return new WarehouseHoldingsResource($this->connector);
	}


	public function warehouseTypes(): WarehouseTypesResource
	{
		return new WarehouseTypesResource($this->connector);
	}


	public function warehouses(): WarehousesResource
	{
		return new WarehousesResource($this->connector);
	}
}
