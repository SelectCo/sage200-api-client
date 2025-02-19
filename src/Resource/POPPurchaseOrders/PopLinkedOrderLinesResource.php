<?php

namespace Selectco\SageApi\Resource\POPPurchaseOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopLinkedOrderLines\GetPoplinkedOrderLinesForPopline;

class PopLinkedOrderLinesResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param float|int $lineId Unique Id of the POP order line.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPoplinkedOrderLinesForPopline(
		float|int $lineId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetPoplinkedOrderLinesForPopline($lineId, $queryParameters));
	}
}
