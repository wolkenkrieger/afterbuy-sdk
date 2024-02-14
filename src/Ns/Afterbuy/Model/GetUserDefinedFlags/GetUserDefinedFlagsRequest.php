<?php

namespace Ns\Afterbuy\Model\GetUserDefinedFlags;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;

/**
 * Class GetUserDefinedFlagsRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class GetUserDefinedFlagsRequest extends AbstractRequest
{

    const CALL_NAME = 'GetUserDefinedFlags';

    /**
     * @param AfterbuyGlobal $afterbuyGlobal
     */
    public function __construct(AfterbuyGlobal $afterbuyGlobal)
    {
        parent::__construct($afterbuyGlobal);
        $this->setCallName(self::CALL_NAME);
    }
}
