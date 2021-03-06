<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignBase
{

    protected $CounterIds = null;

    /**
     * Creates a new instance of DynamicTextCampaignBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CounterIds.
     *
     * @return struct[]|null
     */
    public function getCounterIds()
    {
        return $this->CounterIds;
    }

    /**
     * Sets CounterIds.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setCounterIds(array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }


}

