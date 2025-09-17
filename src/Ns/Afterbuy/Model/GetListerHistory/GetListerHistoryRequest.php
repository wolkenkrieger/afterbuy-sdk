<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;
use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class GetListerHistoryRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class GetListerHistoryRequest extends AbstractRequest
{
    public const CALL_NAME = 'GetListerHistory';

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\AbstractFilter>")
     * @Serializer\XmlList(entry="Filter")
     * @Serializer\SerializedName("DataFilter")
     * @var AbstractFilter[]
     */
    protected array $filters;
	
	/**
	 * @Serializer\Type("integer")
	 * @Serializer\Accessor(getter="getMaxHistoryItems", setter="setMaxHistoryItems")
	 * @Serializer\SerializedName("MaxHistoryItems")
	 * @var int
	 */
	protected int $maxHistoryItems;
	
	/**
     * @param AfterbuyGlobal $afterbuyGlobal
     */
    public function __construct(AfterbuyGlobal $afterbuyGlobal)
    {
        parent::__construct($afterbuyGlobal);

        $this->setCallName(self::CALL_NAME);
    }

    /**
     * @return \Ns\Afterbuy\Model\AbstractFilter[]
     */
    public function getFilters(): array
    {
        return $this->filters;
    }
	
	/**
	 * @param array $filters
	 * @return $this
	 */
    public function setFilters(array $filters): GetListerHistoryRequest
    {
        $this->filters = $filters;

        return $this;
    }
	
	/**
	 * @param \Ns\Afterbuy\Model\AbstractFilter $filter
	 * @return $this
	 */
    public function addFilter(AbstractFilter $filter): GetListerHistoryRequest
    {
        $this->filters[] = $filter;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxHistoryItems(): int
    {
        return $this->maxHistoryItems;
    }

    /**
     * @param $maxHistoryItems
     * @return $this
     */
    public function setMaxHistoryItems($maxHistoryItems): GetListerHistoryRequest
    {
        $this->maxHistoryItems = $maxHistoryItems;

        return $this;
    }
}
