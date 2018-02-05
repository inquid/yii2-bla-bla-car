<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 10:24 AM
 */

namespace inquid\blablacar;


class BlaBlaCar extends HttpClientV1
{
    /**
     * @param array $params
     * @return array|Cliente|Error
     */
    public function getTrips($params)
    {
        try {
            return $this->modelResponse($this->sendRequest('get', "trips")->setData([
                'fn' => 'Paris',
                'tn' => 'London'
            ]), Trips::className());
        } catch (\Exception $exception) {
            return new Error(500, $exception->getMessage());
        }
    }
}