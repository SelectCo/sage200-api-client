<?php
declare(strict_types=1);

namespace Selectco\SageApi;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

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

    public function stock(): Resource\Stock
    {
        return new Resource\Stock($this);
    }

    public function general(): Resource\General
    {
        return new Resource\General($this);
    }
}