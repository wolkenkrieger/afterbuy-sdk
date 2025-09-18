<?php

namespace Ns\Afterbuy\Model\GetListerHistory\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class Platform
 */
class RunningFilter extends AbstractFilter
{
    public function __construct()
    {
        parent::__construct('Running');
    }
}
