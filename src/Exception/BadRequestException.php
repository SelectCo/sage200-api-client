<?php
declare(strict_types=1);

namespace Selectco\SageApi\Exception;

use Saloon\Http\Response;
use Throwable;

class BadRequestException extends SageException
{
    public function __construct(Response $response, string|null $message = null, int $code = 400, Throwable|null $previous = null)
    {
        $message = '400 (Bad Request): Are all query parameters supplied correct?';
        parent::__construct($response, $message, $code, $previous);
    }

    public function getDetailedMessage(): string
    {
        return $this->getMessage();
    }
}