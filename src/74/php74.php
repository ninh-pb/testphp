<?php

use common\Language;

class NewProgrammer74
{
    private string $name;

    private Language $language;

    private ?DateTime $joinDate;

    public function __construct(string $name,  Language $language, ?DateTime $joinDate)
    {
        $this->name = $name;
        $this->language = $language;
        $this->joinDate = $joinDate;
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
