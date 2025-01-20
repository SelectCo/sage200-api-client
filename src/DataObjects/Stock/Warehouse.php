<?php
declare(strict_types=1);

namespace Selectco\SageApi\DataObjects\Stock;

use Selectco\SageDTO\Stock\WarehouseDTO;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

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
