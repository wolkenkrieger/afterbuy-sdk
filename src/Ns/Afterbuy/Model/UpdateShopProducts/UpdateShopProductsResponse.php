<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;

/**
 * Class UpdateShopProductsResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class UpdateShopProductsResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateShopProducts\Result")
     * @Serializer\SerializedName("Result")
     * @var \Ns\Afterbuy\Model\UpdateShopProducts\Result
     */
    protected Result $result;

    /**
     * @return Result
     */
    public function getResult(): Result
    {
        return $this->result;
    }
}
