<?php

use common\Language;

class NewProgrammer81
{
    public function __construct(
        public readonly string    $name,
        public readonly Language  $language,
        public readonly ?DateTime $joinDate
    )
    {
    }
}
