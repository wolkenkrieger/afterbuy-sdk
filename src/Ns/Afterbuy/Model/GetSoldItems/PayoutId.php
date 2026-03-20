<?php
declare(strict_types=1);

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

class PayoutId extends AbstractModel
{
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("PayoutId")
	 * @var string
	 */
	protected string $payoutId;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("PlatformSpecificOrderId")
	 * @var string
	 */
	protected string $platformSpecificOrderId;
	
	/**
	 * @return string
	 */
	public function getPayoutId(): string
	{
		return $this->payoutId;
	}
	
	/**
	 * @return string
	 */
	public function getPlatformSpecificOrderId(): string
	{
		return $this->platformSpecificOrderId;
	}
}