<?php

namespace Ns\Afterbuy\Model\GetUserDefinedFlags;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetUserDefinedFlags\UserDefinedFlags>")
     * @Serializer\SerializedName("UserDefinedFlags")
     * @Serializer\XmlList(inline = true, entry = "UserDefinedFlags")
     * @var UserDefinedFlags[]
     */
    protected $userDefinedFlags;

    /**
     * @return UserDefinedFlags[]
     */
    public function getUserDefinedFlags(): array
    {
        return $this->userDefinedFlags;
    }
}
