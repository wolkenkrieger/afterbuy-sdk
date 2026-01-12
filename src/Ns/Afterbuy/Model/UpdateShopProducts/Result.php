<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\NewProducts>")
     * @Serializer\SerializedName("NewProducts")
     * @Serializer\XmlList(inline = true, entry="NewProduct")
     * @var NewProduct[]
     */
    protected array $newProducts;
	
	/**
	 * @return \Ns\Afterbuy\Model\UpdateShopProducts\NewProduct[]
	 */
	public function getNewProducts()
	{
		return $this->newProducts;
	}
}
