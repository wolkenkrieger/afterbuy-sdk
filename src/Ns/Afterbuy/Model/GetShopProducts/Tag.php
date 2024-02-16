<?php
declare(strict_types=1);

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

class Tag extends AbstractModel {
	
	/**
	 * @Serializer\Type("<string>")
	 * @Serializer\XmlList(inline=true, entry="Tag")
	 * @var string
	 */
	protected $tag;
	
	/**
	 * @return string
	 */
	public function getTag() {
		return $this->tag;
	}
}