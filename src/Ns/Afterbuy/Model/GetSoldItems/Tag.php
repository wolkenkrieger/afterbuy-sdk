<?php
declare(strict_types=1);

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

class Tag extends AbstractModel {
	
	/**
	 * @Serializer\Type("string")
	 * @Serializer\XmlList(inline=true, entry="Tag")
	 * @var array
	 */
	protected $tag;
	
	/**
	 * @return array
	 */
	public function getTag() {
		return $this->tag;
	}
}