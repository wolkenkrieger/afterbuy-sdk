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
}
