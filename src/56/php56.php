<?php

use common\Language;

class Programmer56
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
     * @param string $name
     * @param Language $language
     * @param DateTime|null $joinDate
     */
    public function __construct($name, $language, $joinDate)
    {
        $this->name = $name;
        $this->language = $language;
        $this->joinDate = $joinDate;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Language
     */
    public function getLanguage()
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
