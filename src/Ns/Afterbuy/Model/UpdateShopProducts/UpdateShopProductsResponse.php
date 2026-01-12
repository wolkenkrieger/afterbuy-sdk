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
     * @var Result
     */
    protected \Ns\Afterbuy\Model\UpdateShopProducts\Result $result;

    /**
     * @return Result
     */
    public function getResult(): \Ns\Afterbuy\Model\UpdateShopProducts\Result
    {
        return $this->result;
    }
}
