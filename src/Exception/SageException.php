<?php
declare(strict_types=1);

namespace Selectco\SageApi\Exception;

use Saloon\Exceptions\Request\RequestException;

class SageException extends RequestException
{
    public function getDetailedMessage() {
        //
    }
}