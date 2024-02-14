<?php

namespace Ns\Afterbuy\Model\GetUserDefinedFlags;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class UserDefinedFlag
 */
class UserDefinedFlag extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Color")
     * @var string
     */
    public $color;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("FlagID")
     * @var int
     */
    public $flagId;
}
