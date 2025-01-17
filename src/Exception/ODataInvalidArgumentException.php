<?php
declare(strict_types=1);

namespace Selectco\SageApi\Exception;

use Exception;
use Throwable;

class ODataInvalidArgumentException extends Exception
{
    public function __construct($message, $code = 0, Throwable|null $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}