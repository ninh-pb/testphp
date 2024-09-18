<?php

use common\Language;

class NewProgrammer80
{
    public function __construct(
        private string    $name,
        private Language  $language,
        private ?DateTime $joinDate
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLanguage(): Language
    {
        return $this->language;
    }

    public function getJoinDate(): ?DateTime
    {
        return $this->joinDate;
    }
}
