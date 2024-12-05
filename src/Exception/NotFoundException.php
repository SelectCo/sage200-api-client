<?php
declare(strict_types=1);

namespace Selectco\SageApi\Exception;

use Saloon\Http\Response;
use Throwable;

class NotFoundException extends SageException
{
    public function __construct(Response $response, string|null $message = null, int $code = 0, Throwable|null $previous = null)
    {
        $message = '404 (Not Found): Is the endpoint available for your version of Sage 200?';
        parent::__construct($response, $message, $code, $previous);
    }

    public function getDetailedMessage(): string
    {
        return 'A 404 (Not Found) error can be returned for a variety of reasons, however, the most common causes are:
        An incorrect endpoint URL being specified.
        An invalid verb being used for your specified endpoint.
        The endpoint is not available in your version of Sage 200.
        
        Please confirm the endpoint URL is identical to that supplied in the API documentation and the verb being
        used (i.e. POST) is supported by the endpoint you are querying; this is also listed in the API documentation
        for the endpoint.
        
        Should the endpoint match the API documentation, and the verb be supported by the endpoint, the issue may be
        due to the endpoint not being available to your version of the Sage 200 application, despite being listed in
        the API endpoint documentation. For Sage 200 Standard, this is not an issue as all sites are maintained and
        kept up to date, however, as Sage 200 Professional is an on-premise application client sites may not always be
        on the most recent version.';
    }
}