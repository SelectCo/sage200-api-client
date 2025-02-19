<?php

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\CashBook\BankAccountTypesResource;
use Selectco\SageApi\Resource\CashBook\BankEntryTypesResource;
use Selectco\SageApi\Resource\CashBook\BankPaymentResource;
use Selectco\SageApi\Resource\CashBook\BankPostedTransactionsResource;
use Selectco\SageApi\Resource\CashBook\BankReceiptResource;
use Selectco\SageApi\Resource\CashBook\BanksResource;
use Selectco\SageApi\Resource\CashBook\BankTransferResource;
use Selectco\SageApi\Resource\CashBook\BankViewsResource;
use Selectco\SageApi\Resource\CashBook\CashBookSettingsResource;
use Selectco\SageApi\Resource\CashBook\ElectronicBankFunctionTypesResource;
use Selectco\SageApi\Resource\CashBook\LookupBanksResource;

/**
 * Sage 200 v1 Extra Cash Book
 */
class CashBook
{
    /**
     * @param Connector $connector
     */
    public function __construct(
        protected Connector $connector,
    ) {
    }


    public function bankAccountTypes(): BankAccountTypesResource
    {
        return new BankAccountTypesResource($this->connector);
    }


    public function bankEntryTypes(): BankEntryTypesResource
    {
        return new BankEntryTypesResource($this->connector);
    }


    public function bankPayment(): BankPaymentResource
    {
        return new BankPaymentResource($this->connector);
    }


    public function bankPostedTransactions(): BankPostedTransactionsResource
    {
        return new BankPostedTransactionsResource($this->connector);
    }


    public function bankReceipt(): BankReceiptResource
    {
        return new BankReceiptResource($this->connector);
    }


    public function bankTransfer(): BankTransferResource
    {
        return new BankTransferResource($this->connector);
    }


    public function bankViews(): BankViewsResource
    {
        return new BankViewsResource($this->connector);
    }


    public function banks(): BanksResource
    {
        return new BanksResource($this->connector);
    }


    public function cashBookSettings(): CashBookSettingsResource
    {
        return new CashBookSettingsResource($this->connector);
    }


    public function electronicBankFunctionTypes(): ElectronicBankFunctionTypesResource
    {
        return new ElectronicBankFunctionTypesResource($this->connector);
    }


    public function lookupBanks(): LookupBanksResource
    {
        return new LookupBanksResource($this->connector);
    }
}
