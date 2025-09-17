<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;

/**
 * Class GetPaymentServicesResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class GetListerHistoryResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetListerHistory\Result")
     * @Serializer\SerializedName("Result")
     * @var Result
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
