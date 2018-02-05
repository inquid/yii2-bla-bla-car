<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 11:41 AM
 */

namespace inquid\blablacar\models;


use yii\base\Model;

class DeparturePlace extends Model
{
    public $city_name; //String
    public $address; //String
    public $latitude; //double
    public $longitude; //double
    public $country_code; //String
}