<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use Ns\Afterbuy\Model\FloatType;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class NewProduct
 */
class NewProduct
{

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var int
     */
    protected int $productId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductIDRequested")
     * @var int
     */
    protected int $productIdRequested;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UserProductID")
     * @var string
     */
    protected string $userProductId;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("AnrRequested")
     * @var FloatType
     */
    protected FloatType $anrRequested;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("EANRequested")
     * @var int
     */
    protected int $eanRequested;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Anr")
     * @var int
     */
    protected int $anr;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("EAN")
     * @var int
     */
    protected int $ean;

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return int
     */
    public function getProductIdRequested()
    {
        return $this->productIdRequested;
    }

    /**
     * @return string
     */
    public function getUserProductId()
    {
        return $this->userProductId;
    }

    /**
     * @return float
     */
    public function getAnrRequested()
    {
        return $this->anrRequested->getValue();
    }

    /**
     * @return int
     */
    public function getEanRequested()
    {
        return $this->eanRequested;
    }

    /**
     * @return int
     */
    public function getAnr()
    {
        return $this->anr;
    }

    /**
     * @return int
     */
    public function getEan()
    {
	    return $this->ean;
    }
}

