<?php
declare(strict_types=1);

namespace Selectco\SageApi\DataObjects\Sales;

use Selectco\SageDTO\Sales\SalesPostedTransactionDTO;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class SalesPostedTransaction extends SalesPostedTransactionDTO
{
    /**
     * Additional validation rules for put requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function putCustomer(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('queried', new Assert\NotBlank());
    }
}