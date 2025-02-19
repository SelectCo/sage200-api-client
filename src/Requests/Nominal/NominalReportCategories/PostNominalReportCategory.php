<?php

namespace Selectco\SageApi\Requests\Nominal\NominalReportCategories;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostNominalReportCategory
 *
 * Nominal report categories are used in financial statements (PL, Balance Sheet) to group nominal
 * codes under headings and to determine whether the nominal code value is reported on the layout for
 * the Balance Sheet (Asset and Liability) or Profit and Loss (Income and Expense).
 */
class PostNominalReportCategory extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/nominal_report_categories";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
