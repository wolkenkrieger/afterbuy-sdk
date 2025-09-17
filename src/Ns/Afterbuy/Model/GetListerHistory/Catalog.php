<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Catalog extends BaseResult
{
	/**
	 * @Serializer\Type("integer")
	 * @Serializer\SerializedName("CatalogID")
	 * @var int
	 */
	protected int $catalogID;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("CatalogPath")
	 * @var string
	 */
	protected string $catalogPath;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("CatalogURL")
	 * @var string
	 */
	protected string $catalogURL;
}