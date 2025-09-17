<?php

namespace Ns\Afterbuy\Model\GetListerHistory\Filter;

use \DateTime;
use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class DateFilter
 */
class DateFilter extends AbstractFilter
{
    public const FILTER_START_DATE = 'StartDate';
	public const FILTER_END_DATE = 'EndDate';
	
	/**
	 * @param string $filterName
	 */
    public function __construct(string $filterName = self::FILTER_START_DATE)
    {
        parent::__construct($filterName);
    }
	
	/**
	 * @return DateTime
	 * @throws \Exception
	 */
    public function getDateFrom(): DateTime
    {
        return new DateTime($this->filterValues['DateFrom']);
    }

    /**
     * @param DateTime $dateFrom
     * @return $this
     */
    public function setDateFrom(DateTime $dateFrom): DateFilter
    {
        $this->filterValues['DateFrom'] = $dateFrom->format('d.m.Y H:i:s');

        return $this;
    }
	
	/**
	 * @return \DateTime
	 * @throws \Exception
	 */
    public function getDateTo(): DateTime
    {
        return new DateTime($this->filterValues['DateTo']);
    }
	
	/**
	 * @param $dateTo
	 * @return $this
	 */
    public function setDateTo($dateTo): DateFilter
    {
        $this->filterValues['DateTo'] = $dateTo->format('d.m.Y H:i:s');

        return $this;
    }
}
