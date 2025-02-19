<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Every instance of Sage 200 is configured for the company using it. A company is identified in Sage
 * 200 by its name. Sage 200 stores separate company details for each company that is created.<P>The
 * information stored within company details is typical company information such as VAT registration
 * number and company contact details.</P>
 */
class CompanyDetails
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $fax = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $email = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $website = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $tax_registration_number = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $years_accounts_held_for = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $country_code_id = null,
		#[Assert\Type('object')]
		public object|null $country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 14)]
		public string|null $eori_number = null,
		#[Assert\Type('bool')]
		public bool|null   $is_supplier_payments_enabled = null,
		#[Assert\Type('object')]
		public object|null $address = null,
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
    public function getName(): string|null
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(string|null $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): string|null
    {
        return $this->telephone;
    }

    /**
     * @param string|null $telephone
     */
    public function setTelephone(string|null $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string|null
     */
    public function getFax(): string|null
    {
        return $this->fax;
    }

    /**
     * @param string|null $fax
     */
    public function setFax(string|null $fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @return string|null
     */
    public function getEmail(): string|null
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(string|null $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getWebsite(): string|null
    {
        return $this->website;
    }

    /**
     * @param string|null $website
     */
    public function setWebsite(string|null $website): void
    {
        $this->website = $website;
    }

    /**
     * @return string|null
     */
    public function getTaxRegistrationNumber(): string|null
    {
        return $this->tax_registration_number;
    }

    /**
     * @param string|null $tax_registration_number
     */
    public function setTaxRegistrationNumber(string|null $tax_registration_number): void
    {
        $this->tax_registration_number = $tax_registration_number;
    }

    /**
     * @return int|null
     */
    public function getYearsAccountsHeldFor(): int|null
    {
        return $this->years_accounts_held_for;
    }

    /**
     * @param int|null $years_accounts_held_for
     */
    public function setYearsAccountsHeldFor(int|null $years_accounts_held_for): void
    {
        $this->years_accounts_held_for = $years_accounts_held_for;
    }

    /**
     * @return int|null
     */
    public function getCountryCodeId(): int|null
    {
        return $this->country_code_id;
    }

    /**
     * @param int|null $country_code_id
     */
    public function setCountryCodeId(int|null $country_code_id): void
    {
        $this->country_code_id = $country_code_id;
    }

    /**
     * @return object|null
     */
    public function getCountryCode(): object|null
    {
        return $this->country_code;
    }

    /**
     * @param object|null $country_code
     */
    public function setCountryCode(object|null $country_code): void
    {
        $this->country_code = $country_code;
    }

    /**
     * @return string|null
     */
    public function getEoriNumber(): string|null
    {
        return $this->eori_number;
    }

    /**
     * @param string|null $eori_number
     */
    public function setEoriNumber(string|null $eori_number): void
    {
        $this->eori_number = $eori_number;
    }

    /**
     * @return bool|null
     */
    public function getIsSupplierPaymentsEnabled(): bool|null
    {
        return $this->is_supplier_payments_enabled;
    }

    /**
     * @param bool|null $is_supplier_payments_enabled
     */
    public function setIsSupplierPaymentsEnabled(bool|null $is_supplier_payments_enabled): void
    {
        $this->is_supplier_payments_enabled = $is_supplier_payments_enabled;
    }

    /**
     * @return object|null
     */
    public function getAddress(): object|null
    {
        return $this->address;
    }

    /**
     * @param object|null $address
     */
    public function setAddress(object|null $address): void
    {
        $this->address = $address;
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
