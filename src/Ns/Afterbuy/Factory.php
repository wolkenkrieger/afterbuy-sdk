<?php

namespace Ns\Afterbuy;

use Ns\Afterbuy\Client\Request;
use Monolog\Logger;

/**
 * Class Factory
 */
class Factory
{
    /**
     * @param  array $config
     * @return Request
     */
    public function createRequest(array $config)
    {
        $request =  new Request(
			$config['partnerToken'],
			$config['accountToken'],
            $config['errorLang'],
            $config['doctypeWhitelist']
        );
		return $request;
//        return $request->setLogger(new Logger('afterbuy'));
    }
}
