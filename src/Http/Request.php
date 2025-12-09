<?php

namespace SelectCo\Sage200ApiClient\Http;

use Exception;
use SelectCo\Sage200ApiClient\Exception\ODataInvalidArgumentException;
use SelectCo\Sage200ApiClient\QueryBuilder\SageODataBuilder;

abstract class Request
{
    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $endPoint;

    /**
     * @var string
     */
    protected $queryString = '';

    protected $body = '';

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint . $this->queryString;
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getMethod(): string
    {
        if (!isset($this->method) || !in_array($this->method, ['GET', 'POST', 'PUT', 'DELETE'])) {
            throw new Exception('Http method not set or invalid.');
        }
        return $this->method;
    }

    /**
     * Set the query parameters for the request from a SageODataBuilder object.
     *
     * @param  SageODataBuilder $queryParameters
     * @return void
     * @throws ODataInvalidArgumentException
     */
    public function setQueryParameters(SageODataBuilder $queryParameters): void
    {
        $this->queryString = $queryParameters->buildQueryString();
    }

    /**
     * Set the query parameters for the request from a string.
     *
     * @param  string $queryString
     * @return void
     */
    public function setQueryString(string $queryString): void
    {
        $this->queryString = $queryString;
    }

    /**
     * Converts a response into a Data Transfer Object (DTO).
     *
     * @return mixed The DTO created from the response.
     */
    protected function createDtoFromResponse()
    {
        return null;
    }

    /**
     * Retrieve the body content of the entity.
     *
     * @return string The body content.
     */
    public function getBody(): string
    {
        return $this->body;
    }
}