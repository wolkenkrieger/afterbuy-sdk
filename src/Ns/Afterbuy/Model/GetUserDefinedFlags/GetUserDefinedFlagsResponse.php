<?php

namespace Ns\Afterbuy\Model\GetUserDefinedFlags;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;

/**
 * Class GetUserDefinedFlagsResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class GetUserDefinedFlagsResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetUserDefinedFlags\Result")
     * @Serializer\SerializedName("Result")
     * @var Result
     */
    protected $result;

    /**
     * @return Result
     */
    public function getResult()
    {
        return $this->result;
    }
}
