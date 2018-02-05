<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 10:30 AM
 */

namespace inquid\blablacar\models;


use yii\base\Model;

class Trip extends Model
{
    /**
     * @var Links $links
     */
    public $links; //
    public $departure_date; //String
    public $departure_place; //DeparturePlace
    public $arrival_place; //object
    public $price; //Price
    public $price_with_commission; //object
    public $seats_left; //int
    public $seats; //int
    public $duration; //Duration
    public $distance; //Distance
    public $permanent_id; //String
    public $car; //Car
    public $viaggio_rosa; //boolean
    public $is_comfort; //boolean
    public $freeway; //boolean
    public $booking_mode; //String
    public $booking_type; //String
    public $locations_to_display; //array(String)

}