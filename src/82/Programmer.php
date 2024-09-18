<?php

namespace App82;

use common\Language;

readonly class Programmer
{
    public function __construct(
        public string    $name,
        public Language  $language,
        public ?DateTime $joinDate
    )
    {
    }

    public function throwException()
    {
        throw new \TestException('message', 500);
    }
}
