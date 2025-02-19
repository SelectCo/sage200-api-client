<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Customer contacts can be assigned job roles. Customer contact roles describe roles assigned to a
 * customer contact, including whether the contact is the preferred contact for the customer for a
 * role.
 */
class CustomerContactRole
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_contact_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $trader_contact_role_id = null,
		#[Assert\Type('bool')]
		public bool|null   $is_preferred_contact_for_role = null,
		#[Assert\Type('bool')]
		public bool|null   $is_to_delete = null,
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
     * @return int|null
     */
    public function getCustomerContactId(): int|null
    {
        return $this->customer_contact_id;
    }

    /**
     * @param int|null $customer_contact_id
     */
    public function setCustomerContactId(int|null $customer_contact_id): void
    {
        $this->customer_contact_id = $customer_contact_id;
    }

    /**
     * @return int|null
     */
    public function getTraderContactRoleId(): int|null
    {
        return $this->trader_contact_role_id;
    }

    /**
     * @param int|null $trader_contact_role_id
     */
    public function setTraderContactRoleId(int|null $trader_contact_role_id): void
    {
        $this->trader_contact_role_id = $trader_contact_role_id;
    }

    /**
     * @return bool|null
     */
    public function getIsPreferredContactForRole(): bool|null
    {
        return $this->is_preferred_contact_for_role;
    }

    /**
     * @param bool|null $is_preferred_contact_for_role
     */
    public function setIsPreferredContactForRole(bool|null $is_preferred_contact_for_role): void
    {
        $this->is_preferred_contact_for_role = $is_preferred_contact_for_role;
    }

    /**
     * @return bool|null
     */
    public function getIsToDelete(): bool|null
    {
        return $this->is_to_delete;
    }

    /**
     * @param bool|null $is_to_delete
     */
    public function setIsToDelete(bool|null $is_to_delete): void
    {
        $this->is_to_delete = $is_to_delete;
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
