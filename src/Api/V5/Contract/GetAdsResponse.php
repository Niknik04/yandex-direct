<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdsResponse extends GetResponseGeneral
{

    protected $Ads = null;

    /**
     * Creates a new instance of GetAdsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Ads.
     *
     * @return AdGetItem[]|null
     */
    public function getAds()
    {
        return $this->Ads;
    }

    /**
     * Sets Ads.
     *
     * @param AdGetItem[]|null $value
     * @return self
     */
    public function setAds(array $value = null)
    {
        $this->Ads = $value;

        return $this;
    }


}

