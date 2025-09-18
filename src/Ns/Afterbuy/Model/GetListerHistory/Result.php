<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
	/**
	 * @Serializer\Type("integer")
	 * @Serializer\Accessor(setter="setHasMoreProductsFromInteger")
	 * @Serializer\SerializedName("HasMoreProducts")
	 * @var bool
	 */
	protected bool $hasMoreProducts;
	
	/**
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("LastHistoryID")
	 * @var int
	 */
	protected int $lastHistoryID;
	
	/**
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("ResultCount")
	 * @var int
	 */
	protected int $resultCount;
	
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetListerHistory\ListedItem>")
     * @Serializer\SerializedName("ListedItems")
     * @Serializer\XmlList(entry="ListedItem")
     * @var ListedItem[]
     */
    protected array $listedItems;
	
	/**
	 * @return int
	 */
	public function getLastHistoryID(): int
	{
		return $this->lastHistoryID;
	}
	
	/**
	 * @return int
	 */
	public function getResultCount(): int
	{
		return $this->resultCount;
	}
	
	/**
	 * @return bool
	 */
	public function hasMoreProducts(): bool
	{
		return $this->hasMoreProducts;
	}
	
	/**
	 * @param int $value
	 */
	public function setHasMoreProductsFromInteger(int $value): void
	{
		$this->hasMoreProducts = $this->setBooleanFromInteger($value);
	}
	
	/**
	 * @return \Ns\Afterbuy\Model\GetListerHistory\ListedItem[]
	 */
	public function getListedItems(): array
	{
		return $this->listedItems;
	}
}
