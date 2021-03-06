<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetSitelinksResponse extends GetResponseGeneral
{

    protected $SitelinksSets = null;

    /**
     * Creates a new instance of GetSitelinksResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SitelinksSets.
     *
     * @return SitelinksSetGetItem[]|null
     */
    public function getSitelinksSets()
    {
        return $this->SitelinksSets;
    }

    /**
     * Sets SitelinksSets.
     *
     * @param SitelinksSetGetItem[]|null $value
     * @return self
     */
    public function setSitelinksSets(array $value = null)
    {
        $this->SitelinksSets = $value;

        return $this;
    }


}

