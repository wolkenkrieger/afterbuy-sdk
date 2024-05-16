<?php

namespace Ns\Afterbuy\Model;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractPartsFitment
 */
abstract class AbstractPartsFitment extends AbstractModel
{

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\PartsProperties>")
     * @Serializer\SerializedName("PartsProperties")
     * @Serializer\XmlList(entry="PartsProperties", inline=true)
     * @var PartsProperties[]
     */
    protected $partsProperties;

    /**
     * @return PartsProperties[]
     */
    public function getPartsProperties()
    {
        return $this->partsProperties;
    }

}
