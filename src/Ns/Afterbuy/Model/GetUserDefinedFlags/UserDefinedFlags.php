<?php

namespace Ns\Afterbuy\Model\GetUserDefinedFlags;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class UserDefinedFlags
 */
class UserDefinedFlags extends AbstractModel
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetUserDefinedFlags\UserDefinedFlag")
     * @Serializer\SerializedName("UserDefinedFlag")
     * @var UserDefinedFlag
     */
    public $userDefinedFlag;
}
