<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\Nominal\ConsolidatedNominalCodesResource;
use Selectco\SageApi\Resource\Nominal\ControlNominalCodesResource;
use Selectco\SageApi\Resource\Nominal\ControlNominalCodeTypesResource;
use Selectco\SageApi\Resource\Nominal\CostCentresResource;
use Selectco\SageApi\Resource\Nominal\DepartmentsResource;
use Selectco\SageApi\Resource\Nominal\LookupNominalCodesResource;
use Selectco\SageApi\Resource\Nominal\NominalAccountEntryLocationTypesResource;
use Selectco\SageApi\Resource\Nominal\NominalAccountTypesResource;
use Selectco\SageApi\Resource\Nominal\NominalBudgetProfilesResource;
use Selectco\SageApi\Resource\Nominal\NominalBudgetTypesResource;
use Selectco\SageApi\Resource\Nominal\NominalCodeMemosResource;
use Selectco\SageApi\Resource\Nominal\NominalCodesResource;
use Selectco\SageApi\Resource\Nominal\NominalCodeViewsResource;
use Selectco\SageApi\Resource\Nominal\NominalLedgerSettingsResource;
use Selectco\SageApi\Resource\Nominal\NominalPeriodValueViewsResource;
use Selectco\SageApi\Resource\Nominal\NominalReportCategoriesResource;
use Selectco\SageApi\Resource\Nominal\NominalReportCategoryTypesResource;
use Selectco\SageApi\Resource\Nominal\NominalReportingTypesResource;
use Selectco\SageApi\Resource\Nominal\NominalTransactionAnalysisCodesResource;
use Selectco\SageApi\Resource\Nominal\NominalTransactionEnquiryViewsResource;

/**
 * Sage 200 v1 Extra Nominal
 */
class Nominal
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	public function consolidatedNominalCodes(): ConsolidatedNominalCodesResource
	{
		return new ConsolidatedNominalCodesResource($this->connector);
	}


	public function controlNominalCodeTypes(): ControlNominalCodeTypesResource
	{
		return new ControlNominalCodeTypesResource($this->connector);
	}


	public function controlNominalCodes(): ControlNominalCodesResource
	{
		return new ControlNominalCodesResource($this->connector);
	}


	public function costCentres(): CostCentresResource
	{
		return new CostCentresResource($this->connector);
	}


	public function departments(): DepartmentsResource
	{
		return new DepartmentsResource($this->connector);
	}


	public function lookupNominalCodes(): LookupNominalCodesResource
	{
		return new LookupNominalCodesResource($this->connector);
	}


	public function nominalAccountEntryLocationTypes(): NominalAccountEntryLocationTypesResource
	{
		return new NominalAccountEntryLocationTypesResource($this->connector);
	}


	public function nominalAccountTypes(): NominalAccountTypesResource
	{
		return new NominalAccountTypesResource($this->connector);
	}


	public function nominalBudgetProfiles(): NominalBudgetProfilesResource
	{
		return new NominalBudgetProfilesResource($this->connector);
	}


	public function nominalBudgetTypes(): NominalBudgetTypesResource
	{
		return new NominalBudgetTypesResource($this->connector);
	}


	public function nominalCodeMemos(): NominalCodeMemosResource
	{
		return new NominalCodeMemosResource($this->connector);
	}


	public function nominalCodeViews(): NominalCodeViewsResource
	{
		return new NominalCodeViewsResource($this->connector);
	}


	public function nominalCodes(): NominalCodesResource
	{
		return new NominalCodesResource($this->connector);
	}


	public function nominalLedgerSettings(): NominalLedgerSettingsResource
	{
		return new NominalLedgerSettingsResource($this->connector);
	}


	public function nominalPeriodValueViews(): NominalPeriodValueViewsResource
	{
		return new NominalPeriodValueViewsResource($this->connector);
	}


	public function nominalReportCategories(): NominalReportCategoriesResource
	{
		return new NominalReportCategoriesResource($this->connector);
	}


	public function nominalReportCategoryTypes(): NominalReportCategoryTypesResource
	{
		return new NominalReportCategoryTypesResource($this->connector);
	}


	public function nominalReportingTypes(): NominalReportingTypesResource
	{
		return new NominalReportingTypesResource($this->connector);
	}


	public function nominalTransactionAnalysisCodes(): NominalTransactionAnalysisCodesResource
	{
		return new NominalTransactionAnalysisCodesResource($this->connector);
	}


	public function nominalTransactionEnquiryViews(): NominalTransactionEnquiryViewsResource
	{
		return new NominalTransactionEnquiryViewsResource($this->connector);
	}
}
