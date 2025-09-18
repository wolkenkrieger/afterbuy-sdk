<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class PaymentService
 */
class ListedItem extends AbstractModel
{

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("HistoryID")
     * @var integer
     */
    protected int $historyId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ListingID")
     * @var integer
     */
    protected int $listingId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var integer
     */
    protected int $productId;
	
	/**
	 * @Serializer\Type("Ns\Afterbuy\Model\GetListerHistory\ListingDetail")
	 * @Serializer\SerializedName("ListingDetails")
	 * @var \Ns\Afterbuy\Model\GetListerHistory\ListingDetail
	 */
	protected ListingDetail $listingDetail;
	
	/**
	 * @Serializer\Type("Ns\Afterbuy\Model\GetListerHistory\ProductDetail")
	 * @Serializer\SerializedName("ProductDetails")
	 * @var \Ns\Afterbuy\Model\GetListerHistory\ProductDetail
	 */
	protected ProductDetail $productDetail;
	
	/**
	 * @return int
	 */
	public function getHistoryID(): int
	{
		return $this->historyId;
	}
	
	/**
	 * @return int
	 */
	public function getListingID(): int
	{
		return $this->listingId;
	}
	
	/**
	 * @return int
	 */
	public function getProductID(): int
	{
		return $this->productId;
	}
	
	/**
	 * @return \Ns\Afterbuy\Model\GetListerHistory\ListingDetail
	 */
	public function getListingDetail(): ListingDetail
	{
		return $this->listingDetail;
	}
	
	/**
	 * @return \Ns\Afterbuy\Model\GetListerHistory\ProductDetail
	 */
	public function getProductDetail(): ProductDetail
	{
		return $this->productDetail;
	}
}
