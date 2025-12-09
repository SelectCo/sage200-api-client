<?php

namespace SelectCo\Sage200ApiClient\Http;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use SelectCo\Sage200ApiClient\Exception\BadRequestException;
use SelectCo\Sage200ApiClient\Exception\ForbiddenException;
use SelectCo\Sage200ApiClient\Exception\NotFoundException;
use SelectCo\Sage200ApiClient\Exception\SageException;
use SelectCo\Sage200ApiClient\Exception\UnauthorizedException;

abstract class Connector
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
     * @return void
     */
    private function setOptions(): void
    {
        $this->clientOptions['http_errors'] = false;
        $this->clientOptions['headers']['Content-Type'] = 'application/json';

        if ($this->xSite !== null)
        {
            $this->clientOptions['headers']['X-Site'] = $this->xSite;
        }
        if ($this->xCompany !== null)
        {
            $this->clientOptions['headers']['X-Company'] = $this->xCompany;
        }
        if ($this->bearerToken !== null)
        {
            $this->clientOptions['headers']['Authorization'] = 'Bearer ' . trim($this->bearerToken);
        }
    }

    public function setSite(string $site): void
    {
        $this->xSite = $site;
    }

    public function setCompany(string $company): void
    {
        $this->xCompany = $company;
    }

    public function setClientOptions(array $options): void
    {
        $this->clientOptions = $options;
    }

    /**
     * @param ResponseInterface $response
     * @return void
     * @throws SageException
     */
    private function checkStatus(ResponseInterface $response): void
    {
        switch ($response->getStatusCode()) {
            case 400:
                $error = new BadRequestException();
                $error->setSageResponse($response->getBody()->getContents());
                throw $error;
            case 401:
                $error = new UnauthorizedException();
                $error->setSageResponse($response->getBody()->getContents());
                throw $error;
            case 403:
                $error = new ForbiddenException();
                $error->setSageResponse($response->getBody()->getContents());
                throw $error;
            case 404:
                $error = new NotFoundException();
                $error->setSageResponse($response->getBody()->getContents());
                throw $error;
            default:
        }
    }

    /**
     * Handles the sending of a request.
     *
     * @param Request $request The request object to be sent.
     * @return Response The response from the operation.
     * @throws GuzzleException
     * @throws SageException
     * @throws Exception
     */
    public function send(Request $request): Response
    {
        $this->setOptions();

        if ($request->getBody() !== null)
        {
            $this->clientOptions['body'] = $request->getBody();
        }

        $client = new Client();
        $response = $client->request(
            $request->getMethod(),
            $this->baseUrl . $request->resolveEndpoint(),
            $this->clientOptions
        );
        $this->checkStatus($response);

        return new Response($response);
    }
}