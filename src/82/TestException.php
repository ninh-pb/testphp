<?php

class TestException extends Exception
{
    public function __construct($message, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString(): string
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function customFunction(): void
    {
        echo "A custom function for this type of exception\n";
    }
}