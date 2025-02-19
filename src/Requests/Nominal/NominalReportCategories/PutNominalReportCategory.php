<?php

namespace Selectco\SageApi\Requests\Nominal\NominalReportCategories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutNominalReportCategory
 *
 * Nominal report categories are used in financial statements (PL, Balance Sheet) to group nominal
 * codes under headings and to determine whether the nominal code value is reported on the layout for
 * the Balance Sheet (Asset and Liability) or Profit and Loss (Income and Expense).
 */
class PutNominalReportCategory extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the nominal report category.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/nominal_report_categories/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
