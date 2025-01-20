<?php
declare(strict_types=1);

namespace Selectco\SageApi\DataObjects\Sales;

use Selectco\SageDTO\Sales\CustomerDTO;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;


class Customer extends CustomerDTO
{
    /**
     * Additional validation rules for post requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function postCustomers(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('reference', new Assert\NotBlank());
        $metadata->addPropertyConstraint('name', new Assert\NotBlank());
    }

    /**
     * Additional validation rules for put requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function putCustomer(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('reference', new Assert\NotBlank());
        $metadata->addPropertyConstraint('name', new Assert\NotBlank());
    }

    /**
     * Additional validation rules for post requests
     *
     * @param ClassMetadata $metadata
     * @return void
     */
    public static function postNewCustomerWithDefaults(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('reference', new Assert\NotBlank());
        $metadata->addPropertyConstraint('name', new Assert\NotBlank());
    }
}
