<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdGet extends TextAdGetBase
{

    protected $Text = null;

    protected $Title = null;

    protected $Title2 = null;

    protected $Href = null;

    protected $Mobile = null;

    protected $DisplayDomain = null;

    protected $DisplayUrlPath = null;

    protected $DisplayUrlPathModeration = null;

    protected $VideoExtension = null;

    /**
     * Creates a new instance of TextAdGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Text.
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * Sets Text.
     *
     * @param string|null $value
     * @return self
     */
    public function setText($value = null)
    {
        $this->Text = $value;

        return $this;
    }

    /**
     * Gets Title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Sets Title.
     *
     * @param string|null $value
     * @return self
     */
    public function setTitle($value = null)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Gets Title2.
     *
     * @return string|null
     */
    public function getTitle2()
    {
        return $this->Title2;
    }

    /**
     * Sets Title2.
     *
     * @param string|null $value
     * @return self
     */
    public function setTitle2($value = null)
    {
        $this->Title2 = $value;

        return $this;
    }

    /**
     * Gets Href.
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->Href;
    }

    /**
     * Sets Href.
     *
     * @param string|null $value
     * @return self
     */
    public function setHref($value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Gets Mobile.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * Sets Mobile.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setMobile($value = null)
    {
        $this->Mobile = $value;

        return $this;
    }

    /**
     * Gets DisplayDomain.
     *
     * @return string|null
     */
    public function getDisplayDomain()
    {
        return $this->DisplayDomain;
    }

    /**
     * Sets DisplayDomain.
     *
     * @param string|null $value
     * @return self
     */
    public function setDisplayDomain($value = null)
    {
        $this->DisplayDomain = $value;

        return $this;
    }

    /**
     * Gets DisplayUrlPath.
     *
     * @return string|null
     */
    public function getDisplayUrlPath()
    {
        return $this->DisplayUrlPath;
    }

    /**
     * Sets DisplayUrlPath.
     *
     * @param string|null $value
     * @return self
     */
    public function setDisplayUrlPath($value = null)
    {
        $this->DisplayUrlPath = $value;

        return $this;
    }

    /**
     * Gets DisplayUrlPathModeration.
     *
     * @return ExtensionModeration|null
     */
    public function getDisplayUrlPathModeration()
    {
        return $this->DisplayUrlPathModeration;
    }

    /**
     * Sets DisplayUrlPathModeration.
     *
     * @param ExtensionModeration|null $value
     * @return self
     */
    public function setDisplayUrlPathModeration(ExtensionModeration $value = null)
    {
        $this->DisplayUrlPathModeration = $value;

        return $this;
    }

    /**
     * Gets VideoExtension.
     *
     * @return VideoExtensionGetItem|null
     */
    public function getVideoExtension()
    {
        return $this->VideoExtension;
    }

    /**
     * Sets VideoExtension.
     *
     * @param VideoExtensionGetItem|null $value
     * @return self
     */
    public function setVideoExtension(VideoExtensionGetItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }


}

