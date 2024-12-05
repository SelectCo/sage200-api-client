<?php
declare(strict_types=1);

namespace Selectco\SageApi\Exception;

use Saloon\Http\Response;
use Throwable;

class ForbiddenException extends SageException
{
    public function __construct(Response $response, string|null $message = null, int $code = 0, Throwable|null $previous = null)
    {
        $message = '403 (Forbidden): Does the user have access to the module?';
        parent::__construct($response, $message, $code, $previous);
    }

    public function getDetailedMessage(): string
    {
        return 'A 403 (Forbidden) error is usually caused by the role to which the authenticating user belongs not
        having access to the module the API endpoint surfaces. An example of this would be a user requiring access
        to the Sales Ledger module in order to run requests against the customers endpoint.
        
        Further information on checking user access rights can be found in the application help files:
        Sage 200 Standard: http://desktophelp.sage.co.uk/sage200/sage200standard/Content/Concepts/Users%20manage.htm
        Sage 200 Professional: http://desktophelp.sage.co.uk/sage200/professional/Content/SAA/ManageFeaturesForRoleForm.htm';
    }
}