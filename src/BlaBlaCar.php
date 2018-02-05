<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 10:24 AM
 */

namespace inquid\blablacar;


use inquid\blablacar\models\Error;
use inquid\blablacar\models\Trips;

class BlaBlaCar extends HttpClientV1
{
    /**
     * @param array $params
     * @return array|Trips|Error
     */
    public function getTrips($params)
    {
        try {
            return $this->modelResponse($this->sendRequest('get', "trips", [
                'fn' => 'Paris',
                'tn' => 'London'
            ]), Trips::className(), true);
        } catch (\Exception $exception) {
            return new Error(500, $exception->getMessage());
        }
    }
}