<?php

namespace SelectCo\Sage200ApiClient;

use SelectCo\Sage200ApiClient\Http\Connector;
use SelectCo\Sage200ApiClient\Http\Resources;

class Sage200Connector extends Connector
{
    /**
     * @var string
     */
    protected $bearerToken;
    /**
     * @var string|null
     */
    protected $baseUrl;
    /**
     * @var string|null
     */
    protected $xSite;
    /**
     * @var string|null
     */
    protected $xCompany;
    /**
     * @var array
     */
    protected $clientOptions;

    /**
     * @param string $bearerToken
     * @param string|null $baseUrl
     * @param string|null $xSite
     * @param string|null $xCompany
     * @param array|null $clientOptions
     */
    public function __construct(
        string $bearerToken,
        ?string $baseUrl = 'https://api.columbus.sage.com/uk/sage200extra/accounts/v1',
        ?string $xSite = null,
        ?string $xCompany = null,
        ?array $clientOptions = []
    )
    {
        $this->bearerToken = $bearerToken;
        $this->baseUrl = $baseUrl;
        $this->xSite = $xSite;
        $this->xCompany = $xCompany;
        $this->clientOptions = $clientOptions;
    }

    /**
     * Retrieves a new instance of the Resource object.
     *
     * @return Resources
     */
    public function resources(): Resources
    {
        if (class_exists(\SelectCo\Sage200ApiEndPoints\Resource::class)) {
            return new \SelectCo\Sage200ApiEndPoints\Resource($this);
        }
        return new Resources();
    }
}