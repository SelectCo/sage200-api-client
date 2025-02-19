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
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $action_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $delivery_address_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_delivery_address_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $source_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $postal_name = null,
		#[Assert\Type('string'), Assert\Length(max: 235)]
		public string|null $contact = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $address_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $address_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $address_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $address_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $city = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $county = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $country = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null $postcode = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $email = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $fax = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $tax_number = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $telephone = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
