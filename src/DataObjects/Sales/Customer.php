<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Customers are one of the most important entities within Sage 200 as they are associated with many
 * important resources within the application and underpin most of the main features (e.g. sales
 * orders, payment receipts, etc). When making larger requests for customer information, the Customer
 * Views resource can be a faster alternative to this resource.
 */
class Customer
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $short_name = null,
		#[Assert\Type('float')]
		public float|null  $balance = null,
		#[Assert\Type('bool')]
		public bool|null   $on_hold = null,
		#[Assert\Type('string'), Assert\Length(max: 256)]
		public string|null $status_reason = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_status_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $exchange_rate_type = null,
		#[Assert\Type('string'), Assert\Length(max: 5)]
		public string|null $telephone_country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $telephone_area_code = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public string|null $telephone_subscriber_number = null,
		#[Assert\Type('string'), Assert\Length(max: 5)]
		public string|null $fax_country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $fax_area_code = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public string|null $fax_subscriber_number = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public string|null $website = null,
		#[Assert\Type('float')]
		public float|null  $credit_limit = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $country_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $default_tax_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $vat_number = null,
		#[Assert\Type('string'), Assert\Length(max: 9)]
		public string|null $duns_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_type = null,
		#[Assert\Type('float')]
		public float|null  $early_settlement_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $early_settlement_discount_days = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $payment_terms_days = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $payment_terms_basis = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $average_time_to_pay = null,
		#[Assert\Type('bool')]
		public bool|null   $terms_agreed = null,
		#[Assert\Type('float')]
		public float|null  $value_of_current_orders_in_sop = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $credit_bureau_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $credit_position_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $finance_charge_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $trading_terms = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $credit_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $account_opened = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $last_credit_review = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $next_credit_review = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $application_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_received = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_finance_charge_last_run = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $office_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $associated_head_office_id = null,
		#[Assert\Type('bool')]
		public bool|null   $produce_statements_for_customer = null,
		#[Assert\Type('bool')]
		public bool|null   $is_head_office_with_branches = null,
		#[Assert\Type('bool')]
		public bool|null   $use_consolidated_billing = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public string|null $order_priority = null,
		#[Assert\Type('bool')]
		public bool|null   $use_tax_code_as_default = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $months_to_keep_transactions = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $default_nominal_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $default_nominal_code_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $default_nominal_code_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $default_nominal_code_department = null,
		#[Assert\Type('float')]
		public float|null  $invoice_discount_percent = null,
		#[Assert\Type('float')]
		public float|null  $invoice_line_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_discount_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $order_value_discount_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $price_band_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_20 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $spare_text_10 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_1 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_2 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_3 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_4 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_5 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_6 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_7 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_8 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_9 = null,
		#[Assert\Type('float')]
		public float|null  $spare_number_10 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $spare_date_1 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $spare_date_2 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $spare_date_3 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $spare_date_4 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $spare_date_5 = null,
		#[Assert\Type('bool')]
		public bool|null   $spare_bool_1 = null,
		#[Assert\Type('bool')]
		public bool|null   $spare_bool_2 = null,
		#[Assert\Type('bool')]
		public bool|null   $spare_bool_3 = null,
		#[Assert\Type('bool')]
		public bool|null   $spare_bool_4 = null,
		#[Assert\Type('bool')]
		public bool|null   $spare_bool_5 = null,
		#[Assert\Type('object')]
		public object|null $associated_head_office = null,
		#[Assert\Type('object')]
		public object|null $country_code = null,
		#[Assert\Type('object')]
		public object|null $credit_bureau = null,
		#[Assert\Type('object')]
		public object|null $credit_memo_note = null,
		#[Assert\Type('object')]
		public object|null $credit_position = null,
		#[Assert\Type('object')]
		public object|null $currency = null,
		#[Assert\Type('object')]
		public object|null $customer_discount_group = null,
		#[Assert\Type('object')]
		public object|null $default_nominal_code = null,
		#[Assert\Type('object')]
		public object|null $default_tax_code = null,
		#[Assert\Type('object')]
		public object|null $finance_charge = null,
		#[Assert\Type('object')]
		public object|null $main_address = null,
		#[Assert\Type('object')]
		public object|null $order_value_discount = null,
		#[Assert\Type('object')]
		public object|null $price_band = null,
		#[Assert\Type('object')]
		public object|null $sales_credit_note_layout = null,
		#[Assert\Type('object')]
		public object|null $sales_invoice_layout = null,
		#[Assert\Type('object')]
		public object|null $statement_layout = null,
		#[Assert\Type('object')]
		public object|null $status = null,
		#[Assert\Type('array')]
		public array|null  $alerts = null,
		#[Assert\Type('array')]
		public array|null  $cards = null,
		#[Assert\Type('array')]
		public array|null  $contacts = null,
		#[Assert\Type('array')]
		public array|null  $limited_price_bands = null,
		#[Assert\Type('array')]
		public array|null  $memos = null,
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
    public function getReference(): string|null
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     */
    public function setReference(string|null $reference): void
    {
        $this->reference = $reference;
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
    public function getShortName(): string|null
    {
        return $this->short_name;
    }

    /**
     * @param string|null $short_name
     */
    public function setShortName(string|null $short_name): void
    {
        $this->short_name = $short_name;
    }

    /**
     * @return float|null
     */
    public function getBalance(): float|null
    {
        return $this->balance;
    }

    /**
     * @param float|null $balance
     */
    public function setBalance(float|null $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * @return bool|null
     */
    public function getOnHold(): bool|null
    {
        return $this->on_hold;
    }

    /**
     * @param bool|null $on_hold
     */
    public function setOnHold(bool|null $on_hold): void
    {
        $this->on_hold = $on_hold;
    }

    /**
     * @return string|null
     */
    public function getStatusReason(): string|null
    {
        return $this->status_reason;
    }

    /**
     * @param string|null $status_reason
     */
    public function setStatusReason(string|null $status_reason): void
    {
        $this->status_reason = $status_reason;
    }

    /**
     * @return string|null
     */
    public function getAccountStatusType(): string|null
    {
        return $this->account_status_type;
    }

    /**
     * @param string|null $account_status_type
     */
    public function setAccountStatusType(string|null $account_status_type): void
    {
        $this->account_status_type = $account_status_type;
    }

    /**
     * @return int|null
     */
    public function getCurrencyId(): int|null
    {
        return $this->currency_id;
    }

    /**
     * @param int|null $currency_id
     */
    public function setCurrencyId(int|null $currency_id): void
    {
        $this->currency_id = $currency_id;
    }

    /**
     * @return string|null
     */
    public function getExchangeRateType(): string|null
    {
        return $this->exchange_rate_type;
    }

    /**
     * @param string|null $exchange_rate_type
     */
    public function setExchangeRateType(string|null $exchange_rate_type): void
    {
        $this->exchange_rate_type = $exchange_rate_type;
    }

    /**
     * @return string|null
     */
    public function getTelephoneCountryCode(): string|null
    {
        return $this->telephone_country_code;
    }

    /**
     * @param string|null $telephone_country_code
     */
    public function setTelephoneCountryCode(string|null $telephone_country_code): void
    {
        $this->telephone_country_code = $telephone_country_code;
    }

    /**
     * @return string|null
     */
    public function getTelephoneAreaCode(): string|null
    {
        return $this->telephone_area_code;
    }

    /**
     * @param string|null $telephone_area_code
     */
    public function setTelephoneAreaCode(string|null $telephone_area_code): void
    {
        $this->telephone_area_code = $telephone_area_code;
    }

    /**
     * @return string|null
     */
    public function getTelephoneSubscriberNumber(): string|null
    {
        return $this->telephone_subscriber_number;
    }

    /**
     * @param string|null $telephone_subscriber_number
     */
    public function setTelephoneSubscriberNumber(string|null $telephone_subscriber_number): void
    {
        $this->telephone_subscriber_number = $telephone_subscriber_number;
    }

    /**
     * @return string|null
     */
    public function getFaxCountryCode(): string|null
    {
        return $this->fax_country_code;
    }

    /**
     * @param string|null $fax_country_code
     */
    public function setFaxCountryCode(string|null $fax_country_code): void
    {
        $this->fax_country_code = $fax_country_code;
    }

    /**
     * @return string|null
     */
    public function getFaxAreaCode(): string|null
    {
        return $this->fax_area_code;
    }

    /**
     * @param string|null $fax_area_code
     */
    public function setFaxAreaCode(string|null $fax_area_code): void
    {
        $this->fax_area_code = $fax_area_code;
    }

    /**
     * @return string|null
     */
    public function getFaxSubscriberNumber(): string|null
    {
        return $this->fax_subscriber_number;
    }

    /**
     * @param string|null $fax_subscriber_number
     */
    public function setFaxSubscriberNumber(string|null $fax_subscriber_number): void
    {
        $this->fax_subscriber_number = $fax_subscriber_number;
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
     * @return float|null
     */
    public function getCreditLimit(): float|null
    {
        return $this->credit_limit;
    }

    /**
     * @param float|null $credit_limit
     */
    public function setCreditLimit(float|null $credit_limit): void
    {
        $this->credit_limit = $credit_limit;
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
     * @return int|null
     */
    public function getDefaultTaxCodeId(): int|null
    {
        return $this->default_tax_code_id;
    }

    /**
     * @param int|null $default_tax_code_id
     */
    public function setDefaultTaxCodeId(int|null $default_tax_code_id): void
    {
        $this->default_tax_code_id = $default_tax_code_id;
    }

    /**
     * @return string|null
     */
    public function getVatNumber(): string|null
    {
        return $this->vat_number;
    }

    /**
     * @param string|null $vat_number
     */
    public function setVatNumber(string|null $vat_number): void
    {
        $this->vat_number = $vat_number;
    }

    /**
     * @return string|null
     */
    public function getDunsCode(): string|null
    {
        return $this->duns_code;
    }

    /**
     * @param string|null $duns_code
     */
    public function setDunsCode(string|null $duns_code): void
    {
        $this->duns_code = $duns_code;
    }

    /**
     * @return string|null
     */
    public function getAccountType(): string|null
    {
        return $this->account_type;
    }

    /**
     * @param string|null $account_type
     */
    public function setAccountType(string|null $account_type): void
    {
        $this->account_type = $account_type;
    }

    /**
     * @return float|null
     */
    public function getEarlySettlementDiscountPercent(): float|null
    {
        return $this->early_settlement_discount_percent;
    }

    /**
     * @param float|null $early_settlement_discount_percent
     */
    public function setEarlySettlementDiscountPercent(float|null $early_settlement_discount_percent): void
    {
        $this->early_settlement_discount_percent = $early_settlement_discount_percent;
    }

    /**
     * @return int|null
     */
    public function getEarlySettlementDiscountDays(): int|null
    {
        return $this->early_settlement_discount_days;
    }

    /**
     * @param int|null $early_settlement_discount_days
     */
    public function setEarlySettlementDiscountDays(int|null $early_settlement_discount_days): void
    {
        $this->early_settlement_discount_days = $early_settlement_discount_days;
    }

    /**
     * @return int|null
     */
    public function getPaymentTermsDays(): int|null
    {
        return $this->payment_terms_days;
    }

    /**
     * @param int|null $payment_terms_days
     */
    public function setPaymentTermsDays(int|null $payment_terms_days): void
    {
        $this->payment_terms_days = $payment_terms_days;
    }

    /**
     * @return string|null
     */
    public function getPaymentTermsBasis(): string|null
    {
        return $this->payment_terms_basis;
    }

    /**
     * @param string|null $payment_terms_basis
     */
    public function setPaymentTermsBasis(string|null $payment_terms_basis): void
    {
        $this->payment_terms_basis = $payment_terms_basis;
    }

    /**
     * @return int|null
     */
    public function getAverageTimeToPay(): int|null
    {
        return $this->average_time_to_pay;
    }

    /**
     * @param int|null $average_time_to_pay
     */
    public function setAverageTimeToPay(int|null $average_time_to_pay): void
    {
        $this->average_time_to_pay = $average_time_to_pay;
    }

    /**
     * @return bool|null
     */
    public function getTermsAgreed(): bool|null
    {
        return $this->terms_agreed;
    }

    /**
     * @param bool|null $terms_agreed
     */
    public function setTermsAgreed(bool|null $terms_agreed): void
    {
        $this->terms_agreed = $terms_agreed;
    }

    /**
     * @return float|null
     */
    public function getValueOfCurrentOrdersInSop(): float|null
    {
        return $this->value_of_current_orders_in_sop;
    }

    /**
     * @param float|null $value_of_current_orders_in_sop
     */
    public function setValueOfCurrentOrdersInSop(float|null $value_of_current_orders_in_sop): void
    {
        $this->value_of_current_orders_in_sop = $value_of_current_orders_in_sop;
    }

    /**
     * @return int|null
     */
    public function getCreditBureauId(): int|null
    {
        return $this->credit_bureau_id;
    }

    /**
     * @param int|null $credit_bureau_id
     */
    public function setCreditBureauId(int|null $credit_bureau_id): void
    {
        $this->credit_bureau_id = $credit_bureau_id;
    }

    /**
     * @return int|null
     */
    public function getCreditPositionId(): int|null
    {
        return $this->credit_position_id;
    }

    /**
     * @param int|null $credit_position_id
     */
    public function setCreditPositionId(int|null $credit_position_id): void
    {
        $this->credit_position_id = $credit_position_id;
    }

    /**
     * @return int|null
     */
    public function getFinanceChargeId(): int|null
    {
        return $this->finance_charge_id;
    }

    /**
     * @param int|null $finance_charge_id
     */
    public function setFinanceChargeId(int|null $finance_charge_id): void
    {
        $this->finance_charge_id = $finance_charge_id;
    }

    /**
     * @return string|null
     */
    public function getTradingTerms(): string|null
    {
        return $this->trading_terms;
    }

    /**
     * @param string|null $trading_terms
     */
    public function setTradingTerms(string|null $trading_terms): void
    {
        $this->trading_terms = $trading_terms;
    }

    /**
     * @return string|null
     */
    public function getCreditReference(): string|null
    {
        return $this->credit_reference;
    }

    /**
     * @param string|null $credit_reference
     */
    public function setCreditReference(string|null $credit_reference): void
    {
        $this->credit_reference = $credit_reference;
    }

    /**
     * @return string|null
     */
    public function getAccountOpened(): string|null
    {
        return $this->account_opened;
    }

    /**
     * @param string|null $account_opened
     */
    public function setAccountOpened(string|null $account_opened): void
    {
        $this->account_opened = $account_opened;
    }

    /**
     * @return string|null
     */
    public function getLastCreditReview(): string|null
    {
        return $this->last_credit_review;
    }

    /**
     * @param string|null $last_credit_review
     */
    public function setLastCreditReview(string|null $last_credit_review): void
    {
        $this->last_credit_review = $last_credit_review;
    }

    /**
     * @return string|null
     */
    public function getNextCreditReview(): string|null
    {
        return $this->next_credit_review;
    }

    /**
     * @param string|null $next_credit_review
     */
    public function setNextCreditReview(string|null $next_credit_review): void
    {
        $this->next_credit_review = $next_credit_review;
    }

    /**
     * @return string|null
     */
    public function getApplicationDate(): string|null
    {
        return $this->application_date;
    }

    /**
     * @param string|null $application_date
     */
    public function setApplicationDate(string|null $application_date): void
    {
        $this->application_date = $application_date;
    }

    /**
     * @return string|null
     */
    public function getDateReceived(): string|null
    {
        return $this->date_received;
    }

    /**
     * @param string|null $date_received
     */
    public function setDateReceived(string|null $date_received): void
    {
        $this->date_received = $date_received;
    }

    /**
     * @return string|null
     */
    public function getDateFinanceChargeLastRun(): string|null
    {
        return $this->date_finance_charge_last_run;
    }

    /**
     * @param string|null $date_finance_charge_last_run
     */
    public function setDateFinanceChargeLastRun(string|null $date_finance_charge_last_run): void
    {
        $this->date_finance_charge_last_run = $date_finance_charge_last_run;
    }

    /**
     * @return string|null
     */
    public function getOfficeType(): string|null
    {
        return $this->office_type;
    }

    /**
     * @param string|null $office_type
     */
    public function setOfficeType(string|null $office_type): void
    {
        $this->office_type = $office_type;
    }

    /**
     * @return int|null
     */
    public function getAssociatedHeadOfficeId(): int|null
    {
        return $this->associated_head_office_id;
    }

    /**
     * @param int|null $associated_head_office_id
     */
    public function setAssociatedHeadOfficeId(int|null $associated_head_office_id): void
    {
        $this->associated_head_office_id = $associated_head_office_id;
    }

    /**
     * @return bool|null
     */
    public function getProduceStatementsForCustomer(): bool|null
    {
        return $this->produce_statements_for_customer;
    }

    /**
     * @param bool|null $produce_statements_for_customer
     */
    public function setProduceStatementsForCustomer(bool|null $produce_statements_for_customer): void
    {
        $this->produce_statements_for_customer = $produce_statements_for_customer;
    }

    /**
     * @return bool|null
     */
    public function getIsHeadOfficeWithBranches(): bool|null
    {
        return $this->is_head_office_with_branches;
    }

    /**
     * @param bool|null $is_head_office_with_branches
     */
    public function setIsHeadOfficeWithBranches(bool|null $is_head_office_with_branches): void
    {
        $this->is_head_office_with_branches = $is_head_office_with_branches;
    }

    /**
     * @return bool|null
     */
    public function getUseConsolidatedBilling(): bool|null
    {
        return $this->use_consolidated_billing;
    }

    /**
     * @param bool|null $use_consolidated_billing
     */
    public function setUseConsolidatedBilling(bool|null $use_consolidated_billing): void
    {
        $this->use_consolidated_billing = $use_consolidated_billing;
    }

    /**
     * @return string|null
     */
    public function getOrderPriority(): string|null
    {
        return $this->order_priority;
    }

    /**
     * @param string|null $order_priority
     */
    public function setOrderPriority(string|null $order_priority): void
    {
        $this->order_priority = $order_priority;
    }

    /**
     * @return bool|null
     */
    public function getUseTaxCodeAsDefault(): bool|null
    {
        return $this->use_tax_code_as_default;
    }

    /**
     * @param bool|null $use_tax_code_as_default
     */
    public function setUseTaxCodeAsDefault(bool|null $use_tax_code_as_default): void
    {
        $this->use_tax_code_as_default = $use_tax_code_as_default;
    }

    /**
     * @return int|null
     */
    public function getMonthsToKeepTransactions(): int|null
    {
        return $this->months_to_keep_transactions;
    }

    /**
     * @param int|null $months_to_keep_transactions
     */
    public function setMonthsToKeepTransactions(int|null $months_to_keep_transactions): void
    {
        $this->months_to_keep_transactions = $months_to_keep_transactions;
    }

    /**
     * @return int|null
     */
    public function getDefaultNominalCodeId(): int|null
    {
        return $this->default_nominal_code_id;
    }

    /**
     * @param int|null $default_nominal_code_id
     */
    public function setDefaultNominalCodeId(int|null $default_nominal_code_id): void
    {
        $this->default_nominal_code_id = $default_nominal_code_id;
    }

    /**
     * @return string|null
     */
    public function getDefaultNominalCodeReference(): string|null
    {
        return $this->default_nominal_code_reference;
    }

    /**
     * @param string|null $default_nominal_code_reference
     */
    public function setDefaultNominalCodeReference(string|null $default_nominal_code_reference): void
    {
        $this->default_nominal_code_reference = $default_nominal_code_reference;
    }

    /**
     * @return string|null
     */
    public function getDefaultNominalCodeCostCentre(): string|null
    {
        return $this->default_nominal_code_cost_centre;
    }

    /**
     * @param string|null $default_nominal_code_cost_centre
     */
    public function setDefaultNominalCodeCostCentre(string|null $default_nominal_code_cost_centre): void
    {
        $this->default_nominal_code_cost_centre = $default_nominal_code_cost_centre;
    }

    /**
     * @return string|null
     */
    public function getDefaultNominalCodeDepartment(): string|null
    {
        return $this->default_nominal_code_department;
    }

    /**
     * @param string|null $default_nominal_code_department
     */
    public function setDefaultNominalCodeDepartment(string|null $default_nominal_code_department): void
    {
        $this->default_nominal_code_department = $default_nominal_code_department;
    }

    /**
     * @return float|null
     */
    public function getInvoiceDiscountPercent(): float|null
    {
        return $this->invoice_discount_percent;
    }

    /**
     * @param float|null $invoice_discount_percent
     */
    public function setInvoiceDiscountPercent(float|null $invoice_discount_percent): void
    {
        $this->invoice_discount_percent = $invoice_discount_percent;
    }

    /**
     * @return float|null
     */
    public function getInvoiceLineDiscountPercent(): float|null
    {
        return $this->invoice_line_discount_percent;
    }

    /**
     * @param float|null $invoice_line_discount_percent
     */
    public function setInvoiceLineDiscountPercent(float|null $invoice_line_discount_percent): void
    {
        $this->invoice_line_discount_percent = $invoice_line_discount_percent;
    }

    /**
     * @return int|null
     */
    public function getCustomerDiscountGroupId(): int|null
    {
        return $this->customer_discount_group_id;
    }

    /**
     * @param int|null $customer_discount_group_id
     */
    public function setCustomerDiscountGroupId(int|null $customer_discount_group_id): void
    {
        $this->customer_discount_group_id = $customer_discount_group_id;
    }

    /**
     * @return int|null
     */
    public function getOrderValueDiscountId(): int|null
    {
        return $this->order_value_discount_id;
    }

    /**
     * @param int|null $order_value_discount_id
     */
    public function setOrderValueDiscountId(int|null $order_value_discount_id): void
    {
        $this->order_value_discount_id = $order_value_discount_id;
    }

    /**
     * @return int|null
     */
    public function getPriceBandId(): int|null
    {
        return $this->price_band_id;
    }

    /**
     * @param int|null $price_band_id
     */
    public function setPriceBandId(int|null $price_band_id): void
    {
        $this->price_band_id = $price_band_id;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode1(): string|null
    {
        return $this->analysis_code_1;
    }

    /**
     * @param string|null $analysis_code_1
     */
    public function setAnalysisCode1(string|null $analysis_code_1): void
    {
        $this->analysis_code_1 = $analysis_code_1;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode2(): string|null
    {
        return $this->analysis_code_2;
    }

    /**
     * @param string|null $analysis_code_2
     */
    public function setAnalysisCode2(string|null $analysis_code_2): void
    {
        $this->analysis_code_2 = $analysis_code_2;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode3(): string|null
    {
        return $this->analysis_code_3;
    }

    /**
     * @param string|null $analysis_code_3
     */
    public function setAnalysisCode3(string|null $analysis_code_3): void
    {
        $this->analysis_code_3 = $analysis_code_3;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode4(): string|null
    {
        return $this->analysis_code_4;
    }

    /**
     * @param string|null $analysis_code_4
     */
    public function setAnalysisCode4(string|null $analysis_code_4): void
    {
        $this->analysis_code_4 = $analysis_code_4;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode5(): string|null
    {
        return $this->analysis_code_5;
    }

    /**
     * @param string|null $analysis_code_5
     */
    public function setAnalysisCode5(string|null $analysis_code_5): void
    {
        $this->analysis_code_5 = $analysis_code_5;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode6(): string|null
    {
        return $this->analysis_code_6;
    }

    /**
     * @param string|null $analysis_code_6
     */
    public function setAnalysisCode6(string|null $analysis_code_6): void
    {
        $this->analysis_code_6 = $analysis_code_6;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode7(): string|null
    {
        return $this->analysis_code_7;
    }

    /**
     * @param string|null $analysis_code_7
     */
    public function setAnalysisCode7(string|null $analysis_code_7): void
    {
        $this->analysis_code_7 = $analysis_code_7;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode8(): string|null
    {
        return $this->analysis_code_8;
    }

    /**
     * @param string|null $analysis_code_8
     */
    public function setAnalysisCode8(string|null $analysis_code_8): void
    {
        $this->analysis_code_8 = $analysis_code_8;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode9(): string|null
    {
        return $this->analysis_code_9;
    }

    /**
     * @param string|null $analysis_code_9
     */
    public function setAnalysisCode9(string|null $analysis_code_9): void
    {
        $this->analysis_code_9 = $analysis_code_9;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode10(): string|null
    {
        return $this->analysis_code_10;
    }

    /**
     * @param string|null $analysis_code_10
     */
    public function setAnalysisCode10(string|null $analysis_code_10): void
    {
        $this->analysis_code_10 = $analysis_code_10;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode11(): string|null
    {
        return $this->analysis_code_11;
    }

    /**
     * @param string|null $analysis_code_11
     */
    public function setAnalysisCode11(string|null $analysis_code_11): void
    {
        $this->analysis_code_11 = $analysis_code_11;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode12(): string|null
    {
        return $this->analysis_code_12;
    }

    /**
     * @param string|null $analysis_code_12
     */
    public function setAnalysisCode12(string|null $analysis_code_12): void
    {
        $this->analysis_code_12 = $analysis_code_12;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode13(): string|null
    {
        return $this->analysis_code_13;
    }

    /**
     * @param string|null $analysis_code_13
     */
    public function setAnalysisCode13(string|null $analysis_code_13): void
    {
        $this->analysis_code_13 = $analysis_code_13;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode14(): string|null
    {
        return $this->analysis_code_14;
    }

    /**
     * @param string|null $analysis_code_14
     */
    public function setAnalysisCode14(string|null $analysis_code_14): void
    {
        $this->analysis_code_14 = $analysis_code_14;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode15(): string|null
    {
        return $this->analysis_code_15;
    }

    /**
     * @param string|null $analysis_code_15
     */
    public function setAnalysisCode15(string|null $analysis_code_15): void
    {
        $this->analysis_code_15 = $analysis_code_15;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode16(): string|null
    {
        return $this->analysis_code_16;
    }

    /**
     * @param string|null $analysis_code_16
     */
    public function setAnalysisCode16(string|null $analysis_code_16): void
    {
        $this->analysis_code_16 = $analysis_code_16;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode17(): string|null
    {
        return $this->analysis_code_17;
    }

    /**
     * @param string|null $analysis_code_17
     */
    public function setAnalysisCode17(string|null $analysis_code_17): void
    {
        $this->analysis_code_17 = $analysis_code_17;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode18(): string|null
    {
        return $this->analysis_code_18;
    }

    /**
     * @param string|null $analysis_code_18
     */
    public function setAnalysisCode18(string|null $analysis_code_18): void
    {
        $this->analysis_code_18 = $analysis_code_18;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode19(): string|null
    {
        return $this->analysis_code_19;
    }

    /**
     * @param string|null $analysis_code_19
     */
    public function setAnalysisCode19(string|null $analysis_code_19): void
    {
        $this->analysis_code_19 = $analysis_code_19;
    }

    /**
     * @return string|null
     */
    public function getAnalysisCode20(): string|null
    {
        return $this->analysis_code_20;
    }

    /**
     * @param string|null $analysis_code_20
     */
    public function setAnalysisCode20(string|null $analysis_code_20): void
    {
        $this->analysis_code_20 = $analysis_code_20;
    }

    /**
     * @return string|null
     */
    public function getSpareText1(): string|null
    {
        return $this->spare_text_1;
    }

    /**
     * @param string|null $spare_text_1
     */
    public function setSpareText1(string|null $spare_text_1): void
    {
        $this->spare_text_1 = $spare_text_1;
    }

    /**
     * @return string|null
     */
    public function getSpareText2(): string|null
    {
        return $this->spare_text_2;
    }

    /**
     * @param string|null $spare_text_2
     */
    public function setSpareText2(string|null $spare_text_2): void
    {
        $this->spare_text_2 = $spare_text_2;
    }

    /**
     * @return string|null
     */
    public function getSpareText3(): string|null
    {
        return $this->spare_text_3;
    }

    /**
     * @param string|null $spare_text_3
     */
    public function setSpareText3(string|null $spare_text_3): void
    {
        $this->spare_text_3 = $spare_text_3;
    }

    /**
     * @return string|null
     */
    public function getSpareText4(): string|null
    {
        return $this->spare_text_4;
    }

    /**
     * @param string|null $spare_text_4
     */
    public function setSpareText4(string|null $spare_text_4): void
    {
        $this->spare_text_4 = $spare_text_4;
    }

    /**
     * @return string|null
     */
    public function getSpareText5(): string|null
    {
        return $this->spare_text_5;
    }

    /**
     * @param string|null $spare_text_5
     */
    public function setSpareText5(string|null $spare_text_5): void
    {
        $this->spare_text_5 = $spare_text_5;
    }

    /**
     * @return string|null
     */
    public function getSpareText6(): string|null
    {
        return $this->spare_text_6;
    }

    /**
     * @param string|null $spare_text_6
     */
    public function setSpareText6(string|null $spare_text_6): void
    {
        $this->spare_text_6 = $spare_text_6;
    }

    /**
     * @return string|null
     */
    public function getSpareText7(): string|null
    {
        return $this->spare_text_7;
    }

    /**
     * @param string|null $spare_text_7
     */
    public function setSpareText7(string|null $spare_text_7): void
    {
        $this->spare_text_7 = $spare_text_7;
    }

    /**
     * @return string|null
     */
    public function getSpareText8(): string|null
    {
        return $this->spare_text_8;
    }

    /**
     * @param string|null $spare_text_8
     */
    public function setSpareText8(string|null $spare_text_8): void
    {
        $this->spare_text_8 = $spare_text_8;
    }

    /**
     * @return string|null
     */
    public function getSpareText9(): string|null
    {
        return $this->spare_text_9;
    }

    /**
     * @param string|null $spare_text_9
     */
    public function setSpareText9(string|null $spare_text_9): void
    {
        $this->spare_text_9 = $spare_text_9;
    }

    /**
     * @return string|null
     */
    public function getSpareText10(): string|null
    {
        return $this->spare_text_10;
    }

    /**
     * @param string|null $spare_text_10
     */
    public function setSpareText10(string|null $spare_text_10): void
    {
        $this->spare_text_10 = $spare_text_10;
    }

    /**
     * @return float|null
     */
    public function getSpareNumber1(): float|null
    {
        return $this->spare_number_1;
    }

    /**
     * @param float|null $spare_number_1
     */
    public function setSpareNumber1(float|null $spare_number_1): void
    {
        $this->spare_number_1 = $spare_number_1;
    }

    /**
     * @return float|null
     */
    public function getSpareNumber2(): float|null
    {
        return $this->spare_number_2;
    }

    /**
     * @param float|null $spare_number_2
     */
    public function setSpareNumber2(float|null $spare_number_2): void
    {
        $this->spare_number_2 = $spare_number_2;
    }

    /**
     * @return float|null
     */
    public function getSpareNumber3(): float|null
    {
        return $this->spare_number_3;
    }

    /**
     * @param float|null $spare_number_3
     */
    public function setSpareNumber3(float|null $spare_number_3): void
    {
        $this->spare_number_3 = $spare_number_3;
    }

    /**
     * @return float|null
     */
    public function getSpareNumber4(): float|null
    {
        return $this->spare_number_4;
    }

    /**
     * @param float|null $spare_number_4
     */
    public function setSpareNumber4(float|null $spare_number_4): void
    {
        $this->spare_number_4 = $spare_number_4;
    }

    /**
     * @return float|null
     */
    public function getSpareNumber5(): float|null
    {
        return $this->spare_number_5;
    }

    /**
     * @param float|null $spare_number_5
     */
    public function setSpareNumber5(float|null $spare_number_5): void
    {
        $this->spare_number_5 = $spare_number_5;
    }

    /**
     * @return float|null
     */
    public function getSpareNumber6(): float|null
    {
        return $this->spare_number_6;
    }

    /**
     * @param float|null $spare_number_6
     */
    public function setSpareNumber6(float|null $spare_number_6): void
    {
        $this->spare_number_6 = $spare_number_6;
    }

    /**
     * @return float|null
     */
    public function getSpareNumber7(): float|null
    {
        return $this->spare_number_7;
    }

    /**
     * @param float|null $spare_number_7
     */
    public function setSpareNumber7(float|null $spare_number_7): void
    {
        $this->spare_number_7 = $spare_number_7;
    }

    /**
     * @return float|null
     */
    public function getSpareNumber8(): float|null
    {
        return $this->spare_number_8;
    }

    /**
     * @param float|null $spare_number_8
     */
    public function setSpareNumber8(float|null $spare_number_8): void
    {
        $this->spare_number_8 = $spare_number_8;
    }

    /**
     * @return float|null
     */
    public function getSpareNumber9(): float|null
    {
        return $this->spare_number_9;
    }

    /**
     * @param float|null $spare_number_9
     */
    public function setSpareNumber9(float|null $spare_number_9): void
    {
        $this->spare_number_9 = $spare_number_9;
    }

    /**
     * @return float|null
     */
    public function getSpareNumber10(): float|null
    {
        return $this->spare_number_10;
    }

    /**
     * @param float|null $spare_number_10
     */
    public function setSpareNumber10(float|null $spare_number_10): void
    {
        $this->spare_number_10 = $spare_number_10;
    }

    /**
     * @return string|null
     */
    public function getSpareDate1(): string|null
    {
        return $this->spare_date_1;
    }

    /**
     * @param string|null $spare_date_1
     */
    public function setSpareDate1(string|null $spare_date_1): void
    {
        $this->spare_date_1 = $spare_date_1;
    }

    /**
     * @return string|null
     */
    public function getSpareDate2(): string|null
    {
        return $this->spare_date_2;
    }

    /**
     * @param string|null $spare_date_2
     */
    public function setSpareDate2(string|null $spare_date_2): void
    {
        $this->spare_date_2 = $spare_date_2;
    }

    /**
     * @return string|null
     */
    public function getSpareDate3(): string|null
    {
        return $this->spare_date_3;
    }

    /**
     * @param string|null $spare_date_3
     */
    public function setSpareDate3(string|null $spare_date_3): void
    {
        $this->spare_date_3 = $spare_date_3;
    }

    /**
     * @return string|null
     */
    public function getSpareDate4(): string|null
    {
        return $this->spare_date_4;
    }

    /**
     * @param string|null $spare_date_4
     */
    public function setSpareDate4(string|null $spare_date_4): void
    {
        $this->spare_date_4 = $spare_date_4;
    }

    /**
     * @return string|null
     */
    public function getSpareDate5(): string|null
    {
        return $this->spare_date_5;
    }

    /**
     * @param string|null $spare_date_5
     */
    public function setSpareDate5(string|null $spare_date_5): void
    {
        $this->spare_date_5 = $spare_date_5;
    }

    /**
     * @return bool|null
     */
    public function getSpareBool1(): bool|null
    {
        return $this->spare_bool_1;
    }

    /**
     * @param bool|null $spare_bool_1
     */
    public function setSpareBool1(bool|null $spare_bool_1): void
    {
        $this->spare_bool_1 = $spare_bool_1;
    }

    /**
     * @return bool|null
     */
    public function getSpareBool2(): bool|null
    {
        return $this->spare_bool_2;
    }

    /**
     * @param bool|null $spare_bool_2
     */
    public function setSpareBool2(bool|null $spare_bool_2): void
    {
        $this->spare_bool_2 = $spare_bool_2;
    }

    /**
     * @return bool|null
     */
    public function getSpareBool3(): bool|null
    {
        return $this->spare_bool_3;
    }

    /**
     * @param bool|null $spare_bool_3
     */
    public function setSpareBool3(bool|null $spare_bool_3): void
    {
        $this->spare_bool_3 = $spare_bool_3;
    }

    /**
     * @return bool|null
     */
    public function getSpareBool4(): bool|null
    {
        return $this->spare_bool_4;
    }

    /**
     * @param bool|null $spare_bool_4
     */
    public function setSpareBool4(bool|null $spare_bool_4): void
    {
        $this->spare_bool_4 = $spare_bool_4;
    }

    /**
     * @return bool|null
     */
    public function getSpareBool5(): bool|null
    {
        return $this->spare_bool_5;
    }

    /**
     * @param bool|null $spare_bool_5
     */
    public function setSpareBool5(bool|null $spare_bool_5): void
    {
        $this->spare_bool_5 = $spare_bool_5;
    }

    /**
     * @return object|null
     */
    public function getAssociatedHeadOffice(): object|null
    {
        return $this->associated_head_office;
    }

    /**
     * @param object|null $associated_head_office
     */
    public function setAssociatedHeadOffice(object|null $associated_head_office): void
    {
        $this->associated_head_office = $associated_head_office;
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
     * @return object|null
     */
    public function getCreditBureau(): object|null
    {
        return $this->credit_bureau;
    }

    /**
     * @param object|null $credit_bureau
     */
    public function setCreditBureau(object|null $credit_bureau): void
    {
        $this->credit_bureau = $credit_bureau;
    }

    /**
     * @return object|null
     */
    public function getCreditMemoNote(): object|null
    {
        return $this->credit_memo_note;
    }

    /**
     * @param object|null $credit_memo_note
     */
    public function setCreditMemoNote(object|null $credit_memo_note): void
    {
        $this->credit_memo_note = $credit_memo_note;
    }

    /**
     * @return object|null
     */
    public function getCreditPosition(): object|null
    {
        return $this->credit_position;
    }

    /**
     * @param object|null $credit_position
     */
    public function setCreditPosition(object|null $credit_position): void
    {
        $this->credit_position = $credit_position;
    }

    /**
     * @return object|null
     */
    public function getCurrency(): object|null
    {
        return $this->currency;
    }

    /**
     * @param object|null $currency
     */
    public function setCurrency(object|null $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return object|null
     */
    public function getCustomerDiscountGroup(): object|null
    {
        return $this->customer_discount_group;
    }

    /**
     * @param object|null $customer_discount_group
     */
    public function setCustomerDiscountGroup(object|null $customer_discount_group): void
    {
        $this->customer_discount_group = $customer_discount_group;
    }

    /**
     * @return object|null
     */
    public function getDefaultNominalCode(): object|null
    {
        return $this->default_nominal_code;
    }

    /**
     * @param object|null $default_nominal_code
     */
    public function setDefaultNominalCode(object|null $default_nominal_code): void
    {
        $this->default_nominal_code = $default_nominal_code;
    }

    /**
     * @return object|null
     */
    public function getDefaultTaxCode(): object|null
    {
        return $this->default_tax_code;
    }

    /**
     * @param object|null $default_tax_code
     */
    public function setDefaultTaxCode(object|null $default_tax_code): void
    {
        $this->default_tax_code = $default_tax_code;
    }

    /**
     * @return object|null
     */
    public function getFinanceCharge(): object|null
    {
        return $this->finance_charge;
    }

    /**
     * @param object|null $finance_charge
     */
    public function setFinanceCharge(object|null $finance_charge): void
    {
        $this->finance_charge = $finance_charge;
    }

    /**
     * @return object|null
     */
    public function getMainAddress(): object|null
    {
        return $this->main_address;
    }

    /**
     * @param object|null $main_address
     */
    public function setMainAddress(object|null $main_address): void
    {
        $this->main_address = $main_address;
    }

    /**
     * @return object|null
     */
    public function getOrderValueDiscount(): object|null
    {
        return $this->order_value_discount;
    }

    /**
     * @param object|null $order_value_discount
     */
    public function setOrderValueDiscount(object|null $order_value_discount): void
    {
        $this->order_value_discount = $order_value_discount;
    }

    /**
     * @return object|null
     */
    public function getPriceBand(): object|null
    {
        return $this->price_band;
    }

    /**
     * @param object|null $price_band
     */
    public function setPriceBand(object|null $price_band): void
    {
        $this->price_band = $price_band;
    }

    /**
     * @return object|null
     */
    public function getSalesCreditNoteLayout(): object|null
    {
        return $this->sales_credit_note_layout;
    }

    /**
     * @param object|null $sales_credit_note_layout
     */
    public function setSalesCreditNoteLayout(object|null $sales_credit_note_layout): void
    {
        $this->sales_credit_note_layout = $sales_credit_note_layout;
    }

    /**
     * @return object|null
     */
    public function getSalesInvoiceLayout(): object|null
    {
        return $this->sales_invoice_layout;
    }

    /**
     * @param object|null $sales_invoice_layout
     */
    public function setSalesInvoiceLayout(object|null $sales_invoice_layout): void
    {
        $this->sales_invoice_layout = $sales_invoice_layout;
    }

    /**
     * @return object|null
     */
    public function getStatementLayout(): object|null
    {
        return $this->statement_layout;
    }

    /**
     * @param object|null $statement_layout
     */
    public function setStatementLayout(object|null $statement_layout): void
    {
        $this->statement_layout = $statement_layout;
    }

    /**
     * @return object|null
     */
    public function getStatus(): object|null
    {
        return $this->status;
    }

    /**
     * @param object|null $status
     */
    public function setStatus(object|null $status): void
    {
        $this->status = $status;
    }

    /**
     * @return array|null
     */
    public function getAlerts(): array|null
    {
        return $this->alerts;
    }

    /**
     * @param array|null $alerts
     */
    public function setAlerts(array|null $alerts): void
    {
        $this->alerts = $alerts;
    }

    /**
     * @return array|null
     */
    public function getCards(): array|null
    {
        return $this->cards;
    }

    /**
     * @param array|null $cards
     */
    public function setCards(array|null $cards): void
    {
        $this->cards = $cards;
    }

    /**
     * @return array|null
     */
    public function getContacts(): array|null
    {
        return $this->contacts;
    }

    /**
     * @param array|null $contacts
     */
    public function setContacts(array|null $contacts): void
    {
        $this->contacts = $contacts;
    }

    /**
     * @return array|null
     */
    public function getLimitedPriceBands(): array|null
    {
        return $this->limited_price_bands;
    }

    /**
     * @param array|null $limited_price_bands
     */
    public function setLimitedPriceBands(array|null $limited_price_bands): void
    {
        $this->limited_price_bands = $limited_price_bands;
    }

    /**
     * @return array|null
     */
    public function getMemos(): array|null
    {
        return $this->memos;
    }

    /**
     * @param array|null $memos
     */
    public function setMemos(array|null $memos): void
    {
        $this->memos = $memos;
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
