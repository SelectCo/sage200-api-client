<?php
declare(strict_types=1);

namespace SelectCo\Sage200ApiClient\Exception;

class ForbiddenException extends SageException
{
    protected $message = '403 (Forbidden): Does the user have access to the module?  Use getDetailedMessage() to view more information.';

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