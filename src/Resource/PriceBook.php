<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\PriceBook\CustomerDiscountGroupsResource;
use Selectco\SageApi\Resource\PriceBook\CustomerPriceBandsResource;
use Selectco\SageApi\Resource\PriceBook\DiscountOrSurchargeTypesResource;
use Selectco\SageApi\Resource\PriceBook\FlatRateOrQuantityBreakTypesResource;
use Selectco\SageApi\Resource\PriceBook\OrderValueDiscountsResource;
use Selectco\SageApi\Resource\PriceBook\PriceBandsResource;
use Selectco\SageApi\Resource\PriceBook\PriceBandTypesResource;
use Selectco\SageApi\Resource\PriceBook\PriceBookSettingsResource;
use Selectco\SageApi\Resource\PriceBook\PricingTypesResource;
use Selectco\SageApi\Resource\PriceBook\ProductPriceViewsResource;
use Selectco\SageApi\Resource\PriceBook\SourceOfPriceTypesResource;

/**
 * Sage 200 v1 Extra Price Book
 */
class PriceBook
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	public function customerDiscountGroups(): CustomerDiscountGroupsResource
	{
		return new CustomerDiscountGroupsResource($this->connector);
	}


	public function customerPriceBands(): CustomerPriceBandsResource
	{
		return new CustomerPriceBandsResource($this->connector);
	}


	public function discountOrSurchargeTypes(): DiscountOrSurchargeTypesResource
	{
		return new DiscountOrSurchargeTypesResource($this->connector);
	}


	public function flatRateOrQuantityBreakTypes(): FlatRateOrQuantityBreakTypesResource
	{
		return new FlatRateOrQuantityBreakTypesResource($this->connector);
	}


	public function orderValueDiscounts(): OrderValueDiscountsResource
	{
		return new OrderValueDiscountsResource($this->connector);
	}


	public function priceBandTypes(): PriceBandTypesResource
	{
		return new PriceBandTypesResource($this->connector);
	}


	public function priceBands(): PriceBandsResource
	{
		return new PriceBandsResource($this->connector);
	}


	public function priceBookSettings(): PriceBookSettingsResource
	{
		return new PriceBookSettingsResource($this->connector);
	}


	public function pricingTypes(): PricingTypesResource
	{
		return new PricingTypesResource($this->connector);
	}


	public function productPriceViews(): ProductPriceViewsResource
	{
		return new ProductPriceViewsResource($this->connector);
	}


	public function sourceOfPriceTypes(): SourceOfPriceTypesResource
	{
		return new SourceOfPriceTypesResource($this->connector);
	}
}
