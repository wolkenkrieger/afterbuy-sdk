<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;
//use Ns\Afterbuy\Model\FloatType;

/**
 * Class Result
 */
class ListingDetail extends BaseResult
{

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Anr")
     * @var \Ns\Afterbuy\Model\FloatType
     */
    protected \Ns\Afterbuy\Model\FloatType $anr;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("SoldItems")
     * @var integer
     */
    protected int $soldItems;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ListedQuantity")
     * @var integer
     */
    protected int $listedQuantity;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ListingPlattform")
     * @var string
     */
    protected string $listingPlattform;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ListingTitle")
     * @var string
     */
    protected string $listingTitle;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("SellStatus")
	 * @var string
	 */
	protected string $sellStatus;
	
	/**
	 * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
	 * @Serializer\SerializedName("ListingFee")
	 * @var \Ns\Afterbuy\Model\FloatType
	 */
	protected \Ns\Afterbuy\Model\FloatType $listingFee;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("StartTime")
     * @var \DateTime
     */
    protected \DateTime $startTime;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("EndTime")
     * @var \DateTime
     */
    protected \DateTime $endTime;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ListingDuration")
     * @var integer
     */
    protected int $listingDuration;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ListingType")
     * @var integer
     */
    protected int $listingType;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("ListingDescription")
	 * @var string
	 */
	protected string $listingDescription;
	
	/**
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("eBayCategoryID")
	 * @var int
	 */
	protected int $eBayCategoryID;
	
	/**
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("eBayCategory2ID")
	 * @var int
	 */
	protected int $eBayCategory2ID;
	
	/**
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("eBaySubAccountID")
	 * @var int
	 */
	protected int $eBaySubAccountID;
	
	/**
	 * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
	 * @Serializer\SerializedName("eBayStartPrice")
	 * @var \Ns\Afterbuy\Model\FloatType
	 */
	protected \Ns\Afterbuy\Model\FloatType $eBayStartPrice;
	
	/**
	 * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
	 * @Serializer\SerializedName("eBayBuyNowPrice")
	 * @var \Ns\Afterbuy\Model\FloatType
	 */
	protected \Ns\Afterbuy\Model\FloatType $eBayBuyNowPrice;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("eBayPictureURL")
	 * @var string
	 */
	protected string $eBayPictureURL;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("eBayGaleryURL")
	 * @var string
	 */
	protected string $eBayGaleryURL;
	
	/**
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("eBayRelist")
	 * @Serializer\Accessor(setter="setEbayRelistFromInteger")
	 * @var bool
	 */
	protected bool $eBayRelist;
	
	/**
	 * @param int $value
	 */
	public function setEbayRelistFromInteger(int $value): void
	{
		$this->eBayRelist = $this->setBooleanFromInteger($value);
	}
}
