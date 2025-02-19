<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\SOPSalesOrders\SopConfirmDespatchBinItems\PostSopconfirmDespatchBinItems;

class SopConfirmDespatchBinItemsResource
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
	public function postSopconfirmDespatchBinItems(): Response
	{
		return $this->connector->send(new PostSopconfirmDespatchBinItems());
	}
}
