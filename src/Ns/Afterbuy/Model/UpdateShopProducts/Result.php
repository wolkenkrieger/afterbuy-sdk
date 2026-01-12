<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\NewProduct")
     * @Serializer\SerializedName("NewProducts")
     * @Serializer\XmlList(entry="NewProduct")
     * @var \Ns\Afterbuy\Model\UpdateShopProducts\NewProduct[]
     */
    protected array $newProducts;
}
