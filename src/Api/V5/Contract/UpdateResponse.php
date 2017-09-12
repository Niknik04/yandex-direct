<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateResponse
{

    protected $UpdateResults = [];

    /**
     * Creates a new instance of UpdateResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets UpdateResults.
     *
     * @return ClientsActionResult[]
     */
    public function getUpdateResults()
    {
        return $this->UpdateResults;
    }

    /**
     * Sets UpdateResults.
     *
     * @param ClientsActionResult[] $value
     * @return self
     */
    public function setUpdateResults(array $value)
    {
        $this->UpdateResults = $value;

        return $this;
    }


}
