<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractRequest
 */
class AbstractRequest extends AbstractModel
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\AfterbuyGlobal")
     * @Serializer\SerializedName("AfterbuyGlobal")
     * @var AfterbuyGlobal
     */
    protected AfterbuyGlobal $afterbuyGlobal;

    /**
     * @param AfterbuyGlobal $afterbuyGlobal
     */
    public function __construct(AfterbuyGlobal $afterbuyGlobal)
    {
        $this->afterbuyGlobal = $afterbuyGlobal;
    }

    /**
     * @param int $detailLevel
     * @return $this
     */
    public function setDetailLevel(int $detailLevel): AbstractRequest
    {
        $this->afterbuyGlobal->setDetailLevel($detailLevel);

        return $this;
    }

    /**
     * @param string $callName
     * @return $this
     */
    public function setCallName(string $callName): AbstractRequest
    {
        $this->afterbuyGlobal->setCallName($callName);

        return $this;
    }
}
