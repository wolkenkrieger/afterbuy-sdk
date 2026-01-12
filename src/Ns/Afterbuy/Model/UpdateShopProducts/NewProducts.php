<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use Ns\Afterbuy\Model\FloatType;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class NewProducts
 */
class NewProducts
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateShopProducts\NewProducts")
     * @Serializer\SerializedName("NewProducts")
     * @Serializer\XmlList(entry="NewProduct")
     * @var NewProduct[]
     */
    protected $newProducts;

    /**
     * @return NewProduct[]
     */
    public function getNewProducts()
    {
        return $this->newProducts;
    }
}

