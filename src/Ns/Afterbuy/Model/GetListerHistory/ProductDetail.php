<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class ProductDetail extends BaseResult
{
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("EAN")
	 * @var string
	 */
	protected string $ean;
	
	/**
	 * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
	 * @Serializer\SerializedName("Anr")
	 * @var \Ns\Afterbuy\Model\FloatType
	 */
	protected \Ns\Afterbuy\Model\FloatType $anr;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("Name")
	 * @var string
	 */
    protected string $name;
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("ShortDescription")
	 * @var string
	 */
	protected string $shortDescription;
	
	/**
	 * @Serializer\Type("array<Ns\Afterbuy\Model\GetListerHistory\Catalog>")
	 * @Serializer\SerializedName("Catalogs")
	 * @Serializer\XmlList(entry="Catalog")
	 * @var \Ns\Afterbuy\Model\GetListerHistory\Catalog[]
	 */
	protected $catalogs;
}