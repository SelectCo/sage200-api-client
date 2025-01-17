<?php
declare(strict_types=1);

namespace Selectco\SageApi\Exception;

use Saloon\Http\Response;
use Throwable;

class UnauthorizedException extends SageException
{
    public function __construct(Response $response, string|null $message = null, int $code = 401, Throwable|null $previous = null)
    {
        $message = '401 (Unauthorized): Has the access token expired, are the X-Site and X-Company values invalid or been omitted from the request header?';
        parent::__construct($response, $message, $code, $previous);
    }

    public function getDetailedMessage(): string
    {
        return 'There are numerous causes for a 401 (Unauthorized) error when attempting to make an API request.
        The most common amongst these are:
        The access token has expired.
        The X-Site and X-Company values are invalid or have been omitted from the request header.
        
        To ensure your access token has not expired, re-attempt your API request immediately after
        requesting a new token. This issue is more common when querying the API through a 3rd party application,
        such as Postman, as these do not use the refresh token, unlike application which make use of the authentication
        method detailed in the sample application.
        
        If you have a valid access token, the issue is then likely due to the X-Site and X-Company values not being
        present in your API request header or the authenticating user not having access to the relevant Site/Company.
        
        To view the X-Site and X-Company values of all of the companies which the authenticating user has access to a
        GET request can be ran against the sites endpoint. The site_id and company_id values of the relevant company
        should then be passed in subsequent, database specific, requests as the X-Site and X-Company values
        respectively.';
    }
}