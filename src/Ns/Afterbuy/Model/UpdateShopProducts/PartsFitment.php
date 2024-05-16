<?php
/**
 * Created by PhpStorm.
 * User: MySelV
 * Date: 30.03.2018
 * Time: 09:20
 */

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractPartsFitment;

/**
 * Class PartsFitment
 * @package Ns\Afterbuy\Model\UpdateShopProducts
 */
class PartsFitment extends AbstractPartsFitment
{
    /**
     * @param PartsProperties[] $partsProperties
     * @return $this
     */
    public function setPartsProperties(array $partsProperties)
    {
        $this->partsProperties = $partsProperties;
        return $this;
    }

    /**
     * @param $partsProperties
     * @return $this
     */
    public function addPartsProperties($partsProperties)
    {
        $this->partsProperties[] = $partsProperties;
        return $this;
    }
}