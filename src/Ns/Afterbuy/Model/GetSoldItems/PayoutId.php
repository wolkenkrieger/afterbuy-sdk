<?php
declare(strict_types=1);

namespace Ns\Afterbuy\Model\GetSoldItems;

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
	 * @param $payoutId
	 * @return $this
	 */
	public function setPayoutId($payoutId): self
	{
		$this->payoutId = $payoutId;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getPlatformSpecificOrderId(): string
	{
		return $this->platformSpecificOrderId;
	}
	
	/**
	 * @param $platformSpecificOrderId
	 * @return $this
	 */
	public function setPlatformSpecificOrderId($platformSpecificOrderId): self
	{
		$this->platformSpecificOrderId = $platformSpecificOrderId;
		
		return $this;
	}
}