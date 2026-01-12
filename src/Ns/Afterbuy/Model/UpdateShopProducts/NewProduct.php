<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\FloatType;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class NewProduct
 */
class NewProduct extends AbstractModel
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
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EANRequested")
     * @var string
     */
    protected string $eanRequested;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Anr")
     * @var FloatType
     */
    protected FloatType $anr;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EAN")
     * @var string
     */
    protected string $ean;

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
    public function getProductIdRequested(): int
    {
        return $this->productIdRequested;
    }

    /**
     * @return string
     */
    public function getUserProductId(): string
    {
        return $this->userProductId;
    }

    /**
     * @return float
     */
    public function getAnrRequested(): float
    {
        return $this->anrRequested->getValue();
    }

    /**
     * @return string
     */
    public function getEanRequested(): string
    {
        return $this->eanRequested;
    }

    /**
     * @return float
     */
    public function getAnr(): float
    {
        return $this->anr->getValue();
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
	    return $this->ean;
    }
}

