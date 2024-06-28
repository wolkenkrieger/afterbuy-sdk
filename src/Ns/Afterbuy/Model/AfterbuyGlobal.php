<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AfterbuyGlobal
 */
class AfterbuyGlobal extends AbstractModel
{
    /**
     * display process data only
     */
    const DETAIL_LEVEL_PROCESS_DATA = 0;

    /**
     * display payment data only
     */
    const DETAIL_LEVEL_PAYMENT_DATA = 2;

    /**
     * display buyer data only
     */
    const DETAIL_LEVEL_BUYER_DATA = 4;

    /**
     * display articles data only
     */
    const DETAIL_LEVEL_ARTICLES_DATA = 8;

    /**
     * display shipping data only
     */
    const DETAIL_LEVEL_SHIPPING_DATA = 16;

    /**
     * display articles data and custom attributes only
     */
    const DETAIL_LEVEL_CUSTOM_ATTRIBUTES = 32;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("PartnerToken")
	 * @var string
	 */
	protected $partnerToken;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("AccountToken")
	 * @var string
	 */
	protected $accountToken;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CallName")
     * @var string
     */
    protected $callName;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("DetailLevel")
     * @var int
     */
    protected $detailLevel;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ErrorLanguage")
     * @var string
     */
    protected $errorLanguage;

    /**
     * @param string $partnerToken
     * @param string $accountToken
     * @param int    $errorLanguage
     */
    public function __construct($partnerToken, $accountToken, $errorLanguage)
    {
		$this->partnerToken = $partnerToken;
		$this->accountToken = $accountToken;
        $this->errorLanguage = $errorLanguage;
        $this->detailLevel = self::DETAIL_LEVEL_PROCESS_DATA;
    }
	
	/**
	 * @return string
	 */
	public function getPartnerToken(): string
	{
		return $this->partnerToken;
	}
	
	/**
	 * @param string $partnerToken
	 * @return        $this
	 */
	public function setPartnerToken($partnerToken): AfterbuyGlobal
	{
		$this->partnerToken = $partnerToken;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getAccountToken(): string
	{
		return $this->accountToken;
	}
	
	/**
	 * @param string $accountToken
	 * @return       $this
	 */
	public function setAccountToken($accountToken): AfterbuyGlobal
	{
		$this->accountToken = $accountToken;
		return $this;
	}

    /**
     * @return string
     */
    public function getCallName(): string
    {
        return $this->callName;
    }

    /**
     * @param string $callName
     * @return $this
     */
    public function setCallName($callName): AfterbuyGlobal
    {
        $this->callName = $callName;

        return $this;
    }

    /**
     * @return int
     */
    public function getDetailLevel(): int
    {
        return $this->detailLevel;
    }

    /**
     * @param int $detailLevel
     * @return $this
     */
    public function setDetailLevel($detailLevel): AfterbuyGlobal
    {
        $this->detailLevel = $detailLevel;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorLanguage(): string
    {
        return $this->errorLanguage;
    }

    /**
     * @param string $errorLanguage
     *
     * @return $this
     */
    public function setErrorLanguage($errorLanguage): AfterbuyGlobal
    {
        $this->errorLanguage = $errorLanguage;

        return $this;
    }
}
