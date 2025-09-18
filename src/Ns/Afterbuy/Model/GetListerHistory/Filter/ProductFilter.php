<?php

namespace Ns\Afterbuy\Model\GetListerHistory\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class ProductFilter
 */
class ProductFilter extends AbstractFilter
{

    /**
     * Anr Filter - at this point ID from target platform!
     */
    public const FILTER_PRODUCT_ANR = 'Anr';

    /**
     * HistoryID Filter - can't use afterbuyID!
     */
    public const FILTER_HISTORY_ID = 'HistoryID';
	
	/**
	 * @param        $filterValue
	 * @param string $name
	 */
    public function __construct($filterValue, string $name = self::FILTER_HISTORY_ID)
    {
        parent::__construct($name);

        $this->filterValues['FilterValue'] = $filterValue;
    }
}
