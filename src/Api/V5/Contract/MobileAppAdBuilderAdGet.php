<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdBuilderAdGet extends AdBuilderAdGetBase
{

    protected $TrackingUrl = null;

    /**
     * Creates a new instance of MobileAppAdBuilderAdGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TrackingUrl.
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->TrackingUrl;
    }

    /**
     * Sets TrackingUrl.
     *
     * @param string|null $value
     * @return self
     */
    public function setTrackingUrl($value = null)
    {
        $this->TrackingUrl = $value;

        return $this;
    }


}

