<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Phone
{

    protected $CountryCode = null;

    protected $CityCode = null;

    protected $PhoneNumber = null;

    protected $Extension = null;

    /**
     * Creates a new instance of Phone.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CountryCode.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Sets CountryCode.
     *
     * @param string $value
     * @return self
     */
    public function setCountryCode($value)
    {
        $this->CountryCode = $value;

        return $this;
    }

    /**
     * Gets CityCode.
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }

    /**
     * Sets CityCode.
     *
     * @param string $value
     * @return self
     */
    public function setCityCode($value)
    {
        $this->CityCode = $value;

        return $this;
    }

    /**
     * Gets PhoneNumber.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * Sets PhoneNumber.
     *
     * @param string $value
     * @return self
     */
    public function setPhoneNumber($value)
    {
        $this->PhoneNumber = $value;

        return $this;
    }

    /**
     * Gets Extension.
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->Extension;
    }

    /**
     * Sets Extension.
     *
     * @param string|null $value
     * @return self
     */
    public function setExtension($value = null)
    {
        $this->Extension = $value;

        return $this;
    }


}

