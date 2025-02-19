<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * All stock within Sage 200, regardless of type (Stock, Service/labour, or Miscellaneous), requires a
 * holding location. By default, the HOME warehouse is created within Sage 200, you can then create
 * your own warehouses.
 */
class Warehouse
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                  $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null               $name = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null               $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null               $warehouse_type = null,
		#[Assert\Type('bool')]
		public bool|null                 $use_for_sales_trading = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $postal_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $address_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $address_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $address_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $address_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $city = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $county = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null               $postcode = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $country = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null               $contact = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null               $telephone_number = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null               $fax_number = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null               $email = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public string|null               $website = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_10 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_1 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_2 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_3 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_4 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_5 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_6 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_7 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_8 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_9 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_10 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $spare_date_1 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $spare_date_2 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $spare_date_3 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $spare_date_4 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $spare_date_5 = null,
		#[Assert\Type('bool')]
		public bool|null                 $spare_bool_1 = null,
		#[Assert\Type('bool')]
		public bool|null                 $spare_bool_2 = null,
		#[Assert\Type('bool')]
		public bool|null                 $spare_bool_3 = null,
		#[Assert\Type('bool')]
		public bool|null                 $spare_bool_4 = null,
		#[Assert\Type('bool')]
		public bool|null                 $spare_bool_5 = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                  $country_code_id = null,
		#[Assert\Type('object')]
		public object|null               $country_code = null,
		public WarehouseBomSettings|null $bom_settings = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $date_time_updated = null,
	) {
	}
}
