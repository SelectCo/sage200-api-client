<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\Financials\AccountStatusTypesResource;
use Selectco\SageApi\Resource\Financials\AgedBalancesAgeingTypesResource;
use Selectco\SageApi\Resource\Financials\AllocationStatusTypesResource;
use Selectco\SageApi\Resource\Financials\ContactNumberTypesResource;
use Selectco\SageApi\Resource\Financials\CountryCodesResource;
use Selectco\SageApi\Resource\Financials\CreditBureausResource;
use Selectco\SageApi\Resource\Financials\CreditPositionsResource;
use Selectco\SageApi\Resource\Financials\CurrenciesResource;
use Selectco\SageApi\Resource\Financials\CurrencyExchangeRatesResource;
use Selectco\SageApi\Resource\Financials\CurrencyIsoCodesResource;
use Selectco\SageApi\Resource\Financials\CurrencyTransactionTypesResource;
use Selectco\SageApi\Resource\Financials\DocumentLayoutsResource;
use Selectco\SageApi\Resource\Financials\DocumentTypesResource;
use Selectco\SageApi\Resource\Financials\ExchangeRateAmendabilityTypesResource;
use Selectco\SageApi\Resource\Financials\ExchangeRateTypesResource;
use Selectco\SageApi\Resource\Financials\FinancialReportLayoutTypesResource;
use Selectco\SageApi\Resource\Financials\FinancialReportLayoutViewsResource;
use Selectco\SageApi\Resource\Financials\FinancialReportRowLayoutDebitOrCreditTypesResource;
use Selectco\SageApi\Resource\Financials\FinancialReportRowLayoutPositionTypesResource;
use Selectco\SageApi\Resource\Financials\FinancialReportRowLineTypesResource;
use Selectco\SageApi\Resource\Financials\FinancialYearPeriodViewsResource;
use Selectco\SageApi\Resource\Financials\TaxAccountEntryTypesResource;
use Selectco\SageApi\Resource\Financials\TaxCodesResource;
use Selectco\SageApi\Resource\Financials\TraderAccountTypesResource;
use Selectco\SageApi\Resource\Financials\TraderContactRolesResource;
use Selectco\SageApi\Resource\Financials\TraderLocationTypesResource;
use Selectco\SageApi\Resource\Financials\TraderPaymentTermsResource;
use Selectco\SageApi\Resource\Financials\TraderTransactionTypesResource;
use Selectco\SageApi\Resource\Financials\TradingRevaluationAllocationEntryTypesResource;

/**
 * Sage 200 v1 Extra Financials
 */
class Financials
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	public function accountStatusTypes(): AccountStatusTypesResource
	{
		return new AccountStatusTypesResource($this->connector);
	}


	public function agedBalancesAgeingTypes(): AgedBalancesAgeingTypesResource
	{
		return new AgedBalancesAgeingTypesResource($this->connector);
	}


	public function allocationStatusTypes(): AllocationStatusTypesResource
	{
		return new AllocationStatusTypesResource($this->connector);
	}


	public function contactNumberTypes(): ContactNumberTypesResource
	{
		return new ContactNumberTypesResource($this->connector);
	}


	public function countryCodes(): CountryCodesResource
	{
		return new CountryCodesResource($this->connector);
	}


	public function creditBureaus(): CreditBureausResource
	{
		return new CreditBureausResource($this->connector);
	}


	public function creditPositions(): CreditPositionsResource
	{
		return new CreditPositionsResource($this->connector);
	}


	public function currencies(): CurrenciesResource
	{
		return new CurrenciesResource($this->connector);
	}


	public function currencyExchangeRates(): CurrencyExchangeRatesResource
	{
		return new CurrencyExchangeRatesResource($this->connector);
	}


	public function currencyIsoCodes(): CurrencyIsoCodesResource
	{
		return new CurrencyIsoCodesResource($this->connector);
	}


	public function currencyTransactionTypes(): CurrencyTransactionTypesResource
	{
		return new CurrencyTransactionTypesResource($this->connector);
	}


	public function documentLayouts(): DocumentLayoutsResource
	{
		return new DocumentLayoutsResource($this->connector);
	}


	public function documentTypes(): DocumentTypesResource
	{
		return new DocumentTypesResource($this->connector);
	}


	public function exchangeRateAmendabilityTypes(): ExchangeRateAmendabilityTypesResource
	{
		return new ExchangeRateAmendabilityTypesResource($this->connector);
	}


	public function exchangeRateTypes(): ExchangeRateTypesResource
	{
		return new ExchangeRateTypesResource($this->connector);
	}


	public function financialReportLayoutTypes(): FinancialReportLayoutTypesResource
	{
		return new FinancialReportLayoutTypesResource($this->connector);
	}


	public function financialReportLayoutViews(): FinancialReportLayoutViewsResource
	{
		return new FinancialReportLayoutViewsResource($this->connector);
	}


	public function financialReportRowLayoutDebitOrCreditTypes(): FinancialReportRowLayoutDebitOrCreditTypesResource
	{
		return new FinancialReportRowLayoutDebitOrCreditTypesResource($this->connector);
	}


	public function financialReportRowLayoutPositionTypes(): FinancialReportRowLayoutPositionTypesResource
	{
		return new FinancialReportRowLayoutPositionTypesResource($this->connector);
	}


	public function financialReportRowLineTypes(): FinancialReportRowLineTypesResource
	{
		return new FinancialReportRowLineTypesResource($this->connector);
	}


	public function financialYearPeriodViews(): FinancialYearPeriodViewsResource
	{
		return new FinancialYearPeriodViewsResource($this->connector);
	}


	public function taxAccountEntryTypes(): TaxAccountEntryTypesResource
	{
		return new TaxAccountEntryTypesResource($this->connector);
	}


	public function taxCodes(): TaxCodesResource
	{
		return new TaxCodesResource($this->connector);
	}


	public function traderAccountTypes(): TraderAccountTypesResource
	{
		return new TraderAccountTypesResource($this->connector);
	}


	public function traderContactRoles(): TraderContactRolesResource
	{
		return new TraderContactRolesResource($this->connector);
	}


	public function traderLocationTypes(): TraderLocationTypesResource
	{
		return new TraderLocationTypesResource($this->connector);
	}


	public function traderPaymentTerms(): TraderPaymentTermsResource
	{
		return new TraderPaymentTermsResource($this->connector);
	}


	public function traderTransactionTypes(): TraderTransactionTypesResource
	{
		return new TraderTransactionTypesResource($this->connector);
	}


	public function tradingRevaluationAllocationEntryTypes(): TradingRevaluationAllocationEntryTypesResource
	{
		return new TradingRevaluationAllocationEntryTypesResource($this->connector);
	}
}
