<?php

namespace SelectCo\Sage200ApiClient\Http;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class Response
{
    /**
     * @var ResponseInterface
     */
    private $response;

    /**
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     * Retrieves the response instance.
     *
     * @return ResponseInterface The response object associated with this instance.
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    /**
     * Retrieves the HTTP status code from the response.
     *
     * @return int The HTTP status code of the response.
     */
    public function getStatus(): int
    {
        return $this->response->getStatusCode();
    }

    /**
     * Retrieves the body from the response.
     *
     * @return StreamInterface The body of the response.
     */
    public function getBody(): StreamInterface
    {
        return $this->response->getBody();
    }

    /**
     * Retrieves the body content from the response.
     *
     * @return string
     */
    public function getContents(): string
    {
        return $this->response->getBody()->getContents();
    }
}