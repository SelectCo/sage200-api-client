<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\Commercials\ConfirmationIntentTypesResource;
use Selectco\SageApi\Resource\Commercials\IntrastatDateTypesResource;
use Selectco\SageApi\Resource\Commercials\IntrastatTermsOfDeliveryTypesResource;
use Selectco\SageApi\Resource\Commercials\OrderReturnLineTypesResource;

/**
 * Sage 200 v1 Extra Commercials
 */
class Commercials
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	public function confirmationIntentTypes(): ConfirmationIntentTypesResource
	{
		return new ConfirmationIntentTypesResource($this->connector);
	}


	public function intrastatDateTypes(): IntrastatDateTypesResource
	{
		return new IntrastatDateTypesResource($this->connector);
	}


	public function intrastatTermsOfDeliveryTypes(): IntrastatTermsOfDeliveryTypesResource
	{
		return new IntrastatTermsOfDeliveryTypesResource($this->connector);
	}


	public function orderReturnLineTypes(): OrderReturnLineTypesResource
	{
		return new OrderReturnLineTypesResource($this->connector);
	}
}
