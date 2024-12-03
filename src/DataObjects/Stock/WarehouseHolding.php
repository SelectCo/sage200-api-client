<?php
declare(strict_types=1);

namespace Selectco\SageApi\DataObjects\Stock;

use Selectco\SageDTO\Stock\WarehouseHoldingDTO;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class WarehouseHolding extends WarehouseHoldingDTO
{
    /**
     * Additional validation rules for post requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function postWarehouseHoldings(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('product_id', new Assert\NotBlank());
        $metadata->addPropertyConstraint('warehouse_id', new Assert\NotBlank());
    }

    /**
     * Additional validation rules for put requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function putWarehouseHolding(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('product_id', new Assert\NotBlank());
        $metadata->addPropertyConstraint('warehouse_id', new Assert\NotBlank());
    }
}
