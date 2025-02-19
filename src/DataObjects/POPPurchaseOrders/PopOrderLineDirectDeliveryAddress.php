<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The direct delivery address. This can only be set on lines of type EnumLineTypeStandard.
 */
class PopOrderLineDirectDeliveryAddress
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $action_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $delivery_address_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_delivery_address_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $source_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $postal_name = null,
		#[Assert\Type('string'), Assert\Length(max: 235)]
		public ?string $contact = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $address_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $address_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $address_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $address_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $city = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $county = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $country = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public ?string $postcode = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $email = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $fax = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $tax_number = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $telephone = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
