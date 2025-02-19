<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\SOPSalesOrders\SopQuotesDuplicate\PostSopquotesDuplicate;

class SopQuotesDuplicateResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSopquotesDuplicate(): Response
	{
		return $this->connector->send(new PostSopquotesDuplicate());
	}
}
