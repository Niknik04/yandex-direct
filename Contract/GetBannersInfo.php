<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class GetBannersInfo
{
    const GETPHRASES_NO = 'No';
    const GETPHRASES_YES = 'Yes';
    const GETPHRASES_WITHPRICES = 'WithPrices';

    /**
     * @var int[]
     */
    protected $CampaignIDS;
    /**
     * @var int[]
     */
    protected $BannerIDS;
    /**
     * @var BannersFilterInfo
     */
    protected $Filter;
    /**
     * @var string
     */
    protected $GetPhrases;

    public function __construct(array $campaignIds = array(), array $bannerIds = array(), BannersFilterInfo $filter = null, $getPhrases = null)
    {
        $this->CampaignIDS = $campaignIds;
        $this->BannerIDS = $bannerIds;
        $this->Filter = $filter;
        $this->GetPhrases = $getPhrases;
    }

    /**
     * @return int[]
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * @param int[] $CampaignIDS
     * @return GetBannersInfo
     */
    public function setCampaignIDS(array $CampaignIDS)
    {
        $this->CampaignIDS = $CampaignIDS;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * @param int[] $BannerIDS
     * @return GetBannersInfo
     */
    public function setBannerIDS(array $BannerIDS)
    {
        $this->BannerIDS = $BannerIDS;

        return $this;
    }

    /**
     * @return BannersFilterInfo
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param BannersFilterInfo $Filter
     * @return GetBannersInfo
     */
    public function setFilter(BannersFilterInfo $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }

    /**
     * @return string
     *
     * @since v4
     */
    public function getGetPhrases()
    {
        return $this->GetPhrases;
    }

    /**
     * @param string $GetPhrases
     * @return GetBannersInfo
     *
     * @since v4
     */
    public function setGetPhrases($GetPhrases)
    {
        $this->GetPhrases = $GetPhrases;

        return $this;
    }
}