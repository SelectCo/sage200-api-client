<?php
declare(strict_types=1);

namespace Selectco\SageApi\DataObjects\Stock;

use Selectco\SageDTO\Stock\WarehouseDTO;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * "id": 0,
 * "name": "string",
 * "description": "string",
 * "warehouse_type": "string",
 * "use_for_sales_trading": true,
 * "postal_name": "string",
 * "address_1": "string",
 * "address_2": "string",
 * "address_3": "string",
 * "address_4": "string",
 * "city": "string",
 * "county": "string",
 * "postcode": "string",
 * "country": "string",
 * "contact": "string",
 * "telephone_number": "string",
 * "fax_number": "string",
 * "email": "string",
 * "website": "string",
 * "spare_text_1": "string",
 * "spare_text_2": "string",
 * "spare_text_3": "string",
 * "spare_text_4": "string",
 * "spare_text_5": "string",
 * "spare_text_6": "string",
 * "spare_text_7": "string",
 * "spare_text_8": "string",
 * "spare_text_9": "string",
 * "spare_text_10": "string",
 * "spare_number_1": 0,
 * "spare_number_2": 0,
 * "spare_number_3": 0,
 * "spare_number_4": 0,
 * "spare_number_5": 0,
 * "spare_number_6": 0,
 * "spare_number_7": 0,
 * "spare_number_8": 0,
 * "spare_number_9": 0,
 * "spare_number_10": 0,
 * "spare_date_1": "2019-08-24T14:15:22Z",
 * "spare_date_2": "2019-08-24T14:15:22Z",
 * "spare_date_3": "2019-08-24T14:15:22Z",
 * "spare_date_4": "2019-08-24T14:15:22Z",
 * "spare_date_5": "2019-08-24T14:15:22Z",
 * "spare_bool_1": false,
 * "spare_bool_2": false,
 * "spare_bool_3": false,
 * "spare_bool_4": false,
 * "spare_bool_5": false,
 * "country_code_id": 0,
 * "country_code": {},
 * "bom_settings": {
 * "id": 0,
 * "is_component_source": true,
 * "date_time_created": "2019-08-24T14:15:22Z"
 * },
 * "date_time_created": "2019-08-24T14:15:22Z",
 * "date_time_updated": "2019-08-24T14:15:22Z"
 */
class Warehouse extends WarehouseDTO
{
    /**
     * Additional validation rules for post requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function postWarehouse(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('name', new Assert\NotBlank());
    }

    /**
     * Additional validation rules for put requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function putWarehouse(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('name', new Assert\NotBlank());
    }
}
