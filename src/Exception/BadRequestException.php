<?php
declare(strict_types=1);

namespace SelectCo\Sage200ApiClient\Exception;

class BadRequestException extends SageException
{
    protected $message = '400 (Bad Request): Are all query parameters supplied correct?';

    public function getDetailedMessage(): string
    {
        return $this->getMessage();
    }
}