<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\General\AccountingPeriodValidationTypesResource;
use Selectco\SageApi\Resource\General\AnalysisCodeMappingsResource;
use Selectco\SageApi\Resource\General\CompanyDetailsResource;
use Selectco\SageApi\Resource\General\ConfigurableTermsResource;
use Selectco\SageApi\Resource\General\CouriersResource;
use Selectco\SageApi\Resource\General\CurrentUserResource;
use Selectco\SageApi\Resource\General\FlowStatesResource;
use Selectco\SageApi\Resource\General\LedgerTypesResource;
use Selectco\SageApi\Resource\General\LicenceResource;
use Selectco\SageApi\Resource\General\PendingEmailsResource;
use Selectco\SageApi\Resource\General\SalutationsResource;
use Selectco\SageApi\Resource\General\SitesResource;
use Selectco\SageApi\Resource\General\SystemSettingsResource;
use Selectco\SageApi\Resource\General\TimeUnitTypesResource;
use Selectco\SageApi\Resource\General\TransactionDateValidationClassificationsResource;
use Selectco\SageApi\Resource\General\TransactionDateValidationResource;
use Selectco\SageApi\Resource\General\TransactionDateValidationTypesResource;
use Selectco\SageApi\Resource\General\UpdateModesResource;
use Selectco\SageApi\Resource\General\UsersResource;

/**
 * Sage 200 v1 Extra General
 */
class General
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	public function accountingPeriodValidationTypes(): AccountingPeriodValidationTypesResource
	{
		return new AccountingPeriodValidationTypesResource($this->connector);
	}


	public function analysisCodeMappings(): AnalysisCodeMappingsResource
	{
		return new AnalysisCodeMappingsResource($this->connector);
	}


	public function companyDetails(): CompanyDetailsResource
	{
		return new CompanyDetailsResource($this->connector);
	}


	public function configurableTerms(): ConfigurableTermsResource
	{
		return new ConfigurableTermsResource($this->connector);
	}


	public function couriers(): CouriersResource
	{
		return new CouriersResource($this->connector);
	}


	public function currentUser(): CurrentUserResource
	{
		return new CurrentUserResource($this->connector);
	}


	public function flowStates(): FlowStatesResource
	{
		return new FlowStatesResource($this->connector);
	}


	public function ledgerTypes(): LedgerTypesResource
	{
		return new LedgerTypesResource($this->connector);
	}


	public function licence(): LicenceResource
	{
		return new LicenceResource($this->connector);
	}


	public function pendingEmails(): PendingEmailsResource
	{
		return new PendingEmailsResource($this->connector);
	}


	public function salutations(): SalutationsResource
	{
		return new SalutationsResource($this->connector);
	}


	public function sites(): SitesResource
	{
		return new SitesResource($this->connector);
	}


	public function systemSettings(): SystemSettingsResource
	{
		return new SystemSettingsResource($this->connector);
	}


	public function timeUnitTypes(): TimeUnitTypesResource
	{
		return new TimeUnitTypesResource($this->connector);
	}


	public function transactionDateValidation(): TransactionDateValidationResource
	{
		return new TransactionDateValidationResource($this->connector);
	}


	public function transactionDateValidationClassifications(): TransactionDateValidationClassificationsResource
	{
		return new TransactionDateValidationClassificationsResource($this->connector);
	}


	public function transactionDateValidationTypes(): TransactionDateValidationTypesResource
	{
		return new TransactionDateValidationTypesResource($this->connector);
	}


	public function updateModes(): UpdateModesResource
	{
		return new UpdateModesResource($this->connector);
	}


	public function users(): UsersResource
	{
		return new UsersResource($this->connector);
	}
}
