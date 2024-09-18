<?php

use common\Language;

class NewProgrammer70
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

    /**
     * @param DateTime|null $joinDate
     */
    public function __construct(string $name,  Language $language, $joinDate)
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

    /**
     * @return DateTime|null
     */
    public function getJoinDate()
    {
        return $this->joinDate;
    }
}
