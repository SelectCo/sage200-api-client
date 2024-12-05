<?php
declare(strict_types=1);

namespace Selectco\SageApi;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use Selectco\SageApi\Exception\ForbiddenException;
use Selectco\SageApi\Exception\NotFoundException;
use Selectco\SageApi\Exception\SageException;
use Selectco\SageApi\Exception\UnauthorizedException;
use Throwable;

class Sage200Connector extends Connector
{
    use AlwaysThrowOnErrors;

    /**
     * @var string
     */
    private string $baseUrl;


    public function __construct(
        private readonly string $developerSubscriptionKey,
        private readonly string $bearerToken,
        string|null $baseUrl = 'https://api.columbus.sage.com/uk/sage200extra/accounts/v1',
        private string|null $xSite = null,
        private string|null $xCompany = null,
    ) {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param Response $response
     * @param Throwable|null $senderException
     * @return Throwable|null
     * @throws SageException
     */
    public function getRequestException(Response $response, Throwable|null $senderException): Throwable|null
    {
        switch ($response->status()) {
            case 401:
                throw new UnauthorizedException(
                    response: $response,
                    previous: $senderException
                );
            case 403:
                throw new ForbiddenException(
                    response: $response,
                    previous: $senderException
                );
            case 404:
                throw new NotFoundException(
                    response: $response,
                    previous: $senderException
                );
            default:
                return $senderException;
        }
    }

    /**
     * @inheritDoc
     */
    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @return string[]
     */
    protected function defaultHeaders(): array
    {
        $headers = [
            'ocp-apim-subscription-key' => $this->developerSubscriptionKey,
            'Content-Type' => 'application/json'
        ];

        if ($this->xSite !== null)
        {
            $headers['X-Site'] = $this->xSite;
        }
        if ($this->xCompany !== null)
        {
            $headers['X-Company'] = $this->xCompany;
        }

        return $headers;
    }

    public function setSite(string $site): void
    {
        $this->xSite = $site;
    }

    public function setCompany(string $company): void
    {
        $this->xCompany = $company;
    }

    public function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->bearerToken);
    }

    public function cashBook(): Resource\CashBook
    {
        return new Resource\CashBook($this);
    }

    public function commercials(): Resource\Commercials
    {
        return new Resource\Commercials($this);
    }

    public function financials(): Resource\Financials
    {
        return new Resource\Financials($this);
    }

    public function general(): Resource\General
    {
        return new Resource\General($this);
    }

    public function nominal(): Resource\Nominal
    {
        return new Resource\Nominal($this);
    }

    public function popPurchaseOrders(): Resource\POPPurchaseOrders
    {
        return new Resource\POPPurchaseOrders($this);
    }

    public function priceBook(): Resource\PriceBook
    {
        return new Resource\PriceBook($this);
    }

    public function purchases(): Resource\Purchases
    {
        return new Resource\Purchases($this);
    }

    public function sales(): Resource\Sales
    {
        return new Resource\Sales($this);
    }

    public function sopSalesOrders(): Resource\SOPSalesOrders
    {
        return new Resource\SOPSalesOrders($this);
    }

    public function stock(): Resource\Stock
    {
        return new Resource\Stock($this);
    }
}