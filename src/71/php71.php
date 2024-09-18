<?php

use common\Language;

class NewProgrammer71
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Language
     */
    private $language;

    /**
     * @var DateTime|null
     */
    private $joinDate;

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
