<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Customer and Supplier contacts can have one or more roles defined.<br /><br />Use this API endpoint
 * to read from the Trader Contact Roles.
 */
class TraderContactRole
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $role = null,
		#[Assert\Type('bool')]
		public bool|null   $is_default_role = null,
		#[Assert\Type('bool')]
		public bool|null   $is_mandatory = null,
		#[Assert\Type('bool')]
		public bool|null   $use_for_customer_accounts = null,
		#[Assert\Type('bool')]
		public bool|null   $use_for_supplier_accounts = null,
		#[Assert\Type('bool')]
		public bool|null   $use_with_documents = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}

    /**
     * @return int|null
     */
    public function getId(): int|null
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(int|null $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getRole(): string|null
    {
        return $this->role;
    }

    /**
     * @param string|null $role
     */
    public function setRole(string|null $role): void
    {
        $this->role = $role;
    }

    /**
     * @return bool|null
     */
    public function getIsDefaultRole(): bool|null
    {
        return $this->is_default_role;
    }

    /**
     * @param bool|null $is_default_role
     */
    public function setIsDefaultRole(bool|null $is_default_role): void
    {
        $this->is_default_role = $is_default_role;
    }

    /**
     * @return bool|null
     */
    public function getIsMandatory(): bool|null
    {
        return $this->is_mandatory;
    }

    /**
     * @param bool|null $is_mandatory
     */
    public function setIsMandatory(bool|null $is_mandatory): void
    {
        $this->is_mandatory = $is_mandatory;
    }

    /**
     * @return bool|null
     */
    public function getUseForCustomerAccounts(): bool|null
    {
        return $this->use_for_customer_accounts;
    }

    /**
     * @param bool|null $use_for_customer_accounts
     */
    public function setUseForCustomerAccounts(bool|null $use_for_customer_accounts): void
    {
        $this->use_for_customer_accounts = $use_for_customer_accounts;
    }

    /**
     * @return bool|null
     */
    public function getUseForSupplierAccounts(): bool|null
    {
        return $this->use_for_supplier_accounts;
    }

    /**
     * @param bool|null $use_for_supplier_accounts
     */
    public function setUseForSupplierAccounts(bool|null $use_for_supplier_accounts): void
    {
        $this->use_for_supplier_accounts = $use_for_supplier_accounts;
    }

    /**
     * @return bool|null
     */
    public function getUseWithDocuments(): bool|null
    {
        return $this->use_with_documents;
    }

    /**
     * @param bool|null $use_with_documents
     */
    public function setUseWithDocuments(bool|null $use_with_documents): void
    {
        $this->use_with_documents = $use_with_documents;
    }

    /**
     * @return string|null
     */
    public function getDateTimeCreated(): string|null
    {
        return $this->date_time_created;
    }

    /**
     * @param string|null $date_time_created
     */
    public function setDateTimeCreated(string|null $date_time_created): void
    {
        $this->date_time_created = $date_time_created;
    }

    /**
     * @return string|null
     */
    public function getDateTimeUpdated(): string|null
    {
        return $this->date_time_updated;
    }

    /**
     * @param string|null $date_time_updated
     */
    public function setDateTimeUpdated(string|null $date_time_updated): void
    {
        $this->date_time_updated = $date_time_updated;
    }

}
