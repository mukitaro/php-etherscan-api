<?php

namespace Etherscan\Api;


use Etherscan\Exception\ErrorException;

/**
 * Class GasTracker
 * @package Etherscan\Api
 */
class GasTracker extends AbstractApi
{
    /**
     * Get Estimation of Confirmation Time
     *
     * @param $gasprice
     * @return mixed
     * @throws ErrorException
     */
    public function gasestimate($gasprice)
    {
        return $this->request->exec([
            'module' => "gastracker",
            'action' => "gasestimate",
            'gasprice' => $gasprice
        ]);
    }

    /**
     * Get Gas Oracle
     *
     * @return mixed
     * @throws ErrorException
     */
    public function gasoracle()
    {
        return $this->request->exec([
            'module' => "gastracker",
            'action' => "gasoracle"
        ]);
    }
}
