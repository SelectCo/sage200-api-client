<?php
declare(strict_types=1);

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Selectco\SageDTO\POPPurchaseOrders\PurchaseOrderDTO;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class PurchaseOrder extends PurchaseOrderDTO
{
    /**
     * Additional validation rules for put requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function putPurchaseOrder(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('supplier_id', new Assert\NotBlank());
    }

    /**
     * Additional validation rules for post requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function postPurchaseOrder(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('supplier_id', new Assert\NotBlank());
    }

    /**
     * Additional validation rules for post requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function postNewPurchaseOrderWithDefaults(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('supplier_id', new Assert\NotBlank());
    }
}