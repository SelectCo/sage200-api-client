<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sales posted transactions are created when transactions, such as orders invoiced, receipts, refunds
 * or credit notes, are posted against the Sales Ledger.<br /><br />It is not possible to use this API
 * resource to create posted transactions. To post a transaction, the necessary API resource must be
 * invoked. When making larger requests for customer information, the Sales Transactions Views resource
 * can be a faster alternative to this resource.<br /><br />It is possible to use this API resource to
 * update a transaction's queried status.
 */
class SalesPostedTransaction
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $trader_transaction_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $second_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public string|null $queried = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $posted_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $due_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $full_settlement_date = null,
		#[Assert\Type('float')]
		public float|null  $document_goods_value = null,
		#[Assert\Type('float')]
		public float|null  $document_gross_value = null,
		#[Assert\Type('float')]
		public float|null  $document_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $document_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $discount_percent = null,
		#[Assert\Type('float')]
		public float|null  $document_tax_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $document_allocated_value = null,
		#[Assert\Type('float')]
		public float|null  $document_outstanding_value = null,
		#[Assert\Type('float')]
		public float|null  $base_goods_value = null,
		#[Assert\Type('float')]
		public float|null  $base_gross_value = null,
		#[Assert\Type('float')]
		public float|null  $base_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $base_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $base_tax_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $base_allocated_value = null,
		#[Assert\Type('float')]
		public float|null  $control_value_in_base_currency = null,
		#[Assert\Type('float')]
		public float|null  $exchange_rate = null,
		#[Assert\Type('bool')]
		public bool|null   $settled_immediately = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $discount_days = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $urn = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $user_name = null,
		#[Assert\Type('array')]
		public array|null  $tax_analysis_items = null,
		#[Assert\Type('array')]
		public array|null  $nominal_analysis_items = null,
		#[Assert\Type('array')]
		public array|null  $bank_items = null,
		#[Assert\Type('array')]
		public array|null  $allocation_session_items = null,
		#[Assert\Type('array')]
		public array|null  $allocation_history_items = null,
		#[Assert\Type('object')]
		public object|null $customer = null,
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
    public function getCustomerId(): int|null
    {
        return $this->customer_id;
    }

    /**
     * @param int|null $customer_id
     */
    public function setCustomerId(int|null $customer_id): void
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @return string|null
     */
    public function getTraderTransactionType(): string|null
    {
        return $this->trader_transaction_type;
    }

    /**
     * @param string|null $trader_transaction_type
     */
    public function setTraderTransactionType(string|null $trader_transaction_type): void
    {
        $this->trader_transaction_type = $trader_transaction_type;
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
    public function getSecondReference(): string|null
    {
        return $this->second_reference;
    }

    /**
     * @param string|null $second_reference
     */
    public function setSecondReference(string|null $second_reference): void
    {
        $this->second_reference = $second_reference;
    }

    /**
     * @return string|null
     */
    public function getQueried(): string|null
    {
        return $this->queried;
    }

    /**
     * @param string|null $queried
     */
    public function setQueried(string|null $queried): void
    {
        $this->queried = $queried;
    }

    /**
     * @return string|null
     */
    public function getTransactionDate(): string|null
    {
        return $this->transaction_date;
    }

    /**
     * @param string|null $transaction_date
     */
    public function setTransactionDate(string|null $transaction_date): void
    {
        $this->transaction_date = $transaction_date;
    }

    /**
     * @return string|null
     */
    public function getPostedDate(): string|null
    {
        return $this->posted_date;
    }

    /**
     * @param string|null $posted_date
     */
    public function setPostedDate(string|null $posted_date): void
    {
        $this->posted_date = $posted_date;
    }

    /**
     * @return string|null
     */
    public function getDueDate(): string|null
    {
        return $this->due_date;
    }

    /**
     * @param string|null $due_date
     */
    public function setDueDate(string|null $due_date): void
    {
        $this->due_date = $due_date;
    }

    /**
     * @return string|null
     */
    public function getFullSettlementDate(): string|null
    {
        return $this->full_settlement_date;
    }

    /**
     * @param string|null $full_settlement_date
     */
    public function setFullSettlementDate(string|null $full_settlement_date): void
    {
        $this->full_settlement_date = $full_settlement_date;
    }

    /**
     * @return float|null
     */
    public function getDocumentGoodsValue(): float|null
    {
        return $this->document_goods_value;
    }

    /**
     * @param float|null $document_goods_value
     */
    public function setDocumentGoodsValue(float|null $document_goods_value): void
    {
        $this->document_goods_value = $document_goods_value;
    }

    /**
     * @return float|null
     */
    public function getDocumentGrossValue(): float|null
    {
        return $this->document_gross_value;
    }

    /**
     * @param float|null $document_gross_value
     */
    public function setDocumentGrossValue(float|null $document_gross_value): void
    {
        $this->document_gross_value = $document_gross_value;
    }

    /**
     * @return float|null
     */
    public function getDocumentTaxValue(): float|null
    {
        return $this->document_tax_value;
    }

    /**
     * @param float|null $document_tax_value
     */
    public function setDocumentTaxValue(float|null $document_tax_value): void
    {
        $this->document_tax_value = $document_tax_value;
    }

    /**
     * @return float|null
     */
    public function getDocumentDiscountValue(): float|null
    {
        return $this->document_discount_value;
    }

    /**
     * @param float|null $document_discount_value
     */
    public function setDocumentDiscountValue(float|null $document_discount_value): void
    {
        $this->document_discount_value = $document_discount_value;
    }

    /**
     * @return float|null
     */
    public function getDiscountPercent(): float|null
    {
        return $this->discount_percent;
    }

    /**
     * @param float|null $discount_percent
     */
    public function setDiscountPercent(float|null $discount_percent): void
    {
        $this->discount_percent = $discount_percent;
    }

    /**
     * @return float|null
     */
    public function getDocumentTaxDiscountValue(): float|null
    {
        return $this->document_tax_discount_value;
    }

    /**
     * @param float|null $document_tax_discount_value
     */
    public function setDocumentTaxDiscountValue(float|null $document_tax_discount_value): void
    {
        $this->document_tax_discount_value = $document_tax_discount_value;
    }

    /**
     * @return float|null
     */
    public function getDocumentAllocatedValue(): float|null
    {
        return $this->document_allocated_value;
    }

    /**
     * @param float|null $document_allocated_value
     */
    public function setDocumentAllocatedValue(float|null $document_allocated_value): void
    {
        $this->document_allocated_value = $document_allocated_value;
    }

    /**
     * @return float|null
     */
    public function getDocumentOutstandingValue(): float|null
    {
        return $this->document_outstanding_value;
    }

    /**
     * @param float|null $document_outstanding_value
     */
    public function setDocumentOutstandingValue(float|null $document_outstanding_value): void
    {
        $this->document_outstanding_value = $document_outstanding_value;
    }

    /**
     * @return float|null
     */
    public function getBaseGoodsValue(): float|null
    {
        return $this->base_goods_value;
    }

    /**
     * @param float|null $base_goods_value
     */
    public function setBaseGoodsValue(float|null $base_goods_value): void
    {
        $this->base_goods_value = $base_goods_value;
    }

    /**
     * @return float|null
     */
    public function getBaseGrossValue(): float|null
    {
        return $this->base_gross_value;
    }

    /**
     * @param float|null $base_gross_value
     */
    public function setBaseGrossValue(float|null $base_gross_value): void
    {
        $this->base_gross_value = $base_gross_value;
    }

    /**
     * @return float|null
     */
    public function getBaseTaxValue(): float|null
    {
        return $this->base_tax_value;
    }

    /**
     * @param float|null $base_tax_value
     */
    public function setBaseTaxValue(float|null $base_tax_value): void
    {
        $this->base_tax_value = $base_tax_value;
    }

    /**
     * @return float|null
     */
    public function getBaseDiscountValue(): float|null
    {
        return $this->base_discount_value;
    }

    /**
     * @param float|null $base_discount_value
     */
    public function setBaseDiscountValue(float|null $base_discount_value): void
    {
        $this->base_discount_value = $base_discount_value;
    }

    /**
     * @return float|null
     */
    public function getBaseTaxDiscountValue(): float|null
    {
        return $this->base_tax_discount_value;
    }

    /**
     * @param float|null $base_tax_discount_value
     */
    public function setBaseTaxDiscountValue(float|null $base_tax_discount_value): void
    {
        $this->base_tax_discount_value = $base_tax_discount_value;
    }

    /**
     * @return float|null
     */
    public function getBaseAllocatedValue(): float|null
    {
        return $this->base_allocated_value;
    }

    /**
     * @param float|null $base_allocated_value
     */
    public function setBaseAllocatedValue(float|null $base_allocated_value): void
    {
        $this->base_allocated_value = $base_allocated_value;
    }

    /**
     * @return float|null
     */
    public function getControlValueInBaseCurrency(): float|null
    {
        return $this->control_value_in_base_currency;
    }

    /**
     * @param float|null $control_value_in_base_currency
     */
    public function setControlValueInBaseCurrency(float|null $control_value_in_base_currency): void
    {
        $this->control_value_in_base_currency = $control_value_in_base_currency;
    }

    /**
     * @return float|null
     */
    public function getExchangeRate(): float|null
    {
        return $this->exchange_rate;
    }

    /**
     * @param float|null $exchange_rate
     */
    public function setExchangeRate(float|null $exchange_rate): void
    {
        $this->exchange_rate = $exchange_rate;
    }

    /**
     * @return bool|null
     */
    public function getSettledImmediately(): bool|null
    {
        return $this->settled_immediately;
    }

    /**
     * @param bool|null $settled_immediately
     */
    public function setSettledImmediately(bool|null $settled_immediately): void
    {
        $this->settled_immediately = $settled_immediately;
    }

    /**
     * @return int|null
     */
    public function getDiscountDays(): int|null
    {
        return $this->discount_days;
    }

    /**
     * @param int|null $discount_days
     */
    public function setDiscountDays(int|null $discount_days): void
    {
        $this->discount_days = $discount_days;
    }

    /**
     * @return int|null
     */
    public function getUrn(): int|null
    {
        return $this->urn;
    }

    /**
     * @param int|null $urn
     */
    public function setUrn(int|null $urn): void
    {
        $this->urn = $urn;
    }

    /**
     * @return string|null
     */
    public function getUserName(): string|null
    {
        return $this->user_name;
    }

    /**
     * @param string|null $user_name
     */
    public function setUserName(string|null $user_name): void
    {
        $this->user_name = $user_name;
    }

    /**
     * @return array|null
     */
    public function getTaxAnalysisItems(): array|null
    {
        return $this->tax_analysis_items;
    }

    /**
     * @param array|null $tax_analysis_items
     */
    public function setTaxAnalysisItems(array|null $tax_analysis_items): void
    {
        $this->tax_analysis_items = $tax_analysis_items;
    }

    /**
     * @return array|null
     */
    public function getNominalAnalysisItems(): array|null
    {
        return $this->nominal_analysis_items;
    }

    /**
     * @param array|null $nominal_analysis_items
     */
    public function setNominalAnalysisItems(array|null $nominal_analysis_items): void
    {
        $this->nominal_analysis_items = $nominal_analysis_items;
    }

    /**
     * @return array|null
     */
    public function getBankItems(): array|null
    {
        return $this->bank_items;
    }

    /**
     * @param array|null $bank_items
     */
    public function setBankItems(array|null $bank_items): void
    {
        $this->bank_items = $bank_items;
    }

    /**
     * @return array|null
     */
    public function getAllocationSessionItems(): array|null
    {
        return $this->allocation_session_items;
    }

    /**
     * @param array|null $allocation_session_items
     */
    public function setAllocationSessionItems(array|null $allocation_session_items): void
    {
        $this->allocation_session_items = $allocation_session_items;
    }

    /**
     * @return array|null
     */
    public function getAllocationHistoryItems(): array|null
    {
        return $this->allocation_history_items;
    }

    /**
     * @param array|null $allocation_history_items
     */
    public function setAllocationHistoryItems(array|null $allocation_history_items): void
    {
        $this->allocation_history_items = $allocation_history_items;
    }

    /**
     * @return object|null
     */
    public function getCustomer(): object|null
    {
        return $this->customer;
    }

    /**
     * @param object|null $customer
     */
    public function setCustomer(object|null $customer): void
    {
        $this->customer = $customer;
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
