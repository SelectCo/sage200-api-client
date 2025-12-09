<?php
declare(strict_types=1);

namespace SelectCo\Sage200ApiClient\Exception;

use Exception;

abstract class SageException extends Exception
{
    /**
     * @var string
     */
    protected $sageResponse = '';

    public function __toString() {
        return __CLASS__ . ": [$this->code]: $this->message\n";
    }

    abstract function getDetailedMessage(): string;

    public function setSageResponse(string $message): void
    {
        $this->sageResponse = $message;
    }

    public function getSageResponse(): string
    {
        if ($this->sageResponse === '')
        {
            return $this->getMessage();
        }
        return $this->sageResponse;
    }
}