<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 10:30 AM
 */

namespace inquid\blablacar\models;

use yii\base\Model;

class Trips extends Model
{
    /**
     * @var Links $links
     */
    public $links; //Links
    /**
     * @var Pager $pager
     */
    public $pager; //Pager
    public $trips = []; //array(Trip)
    public $top_trips = []; //array(object)
    public $facets = []; //array(Facet)
    public $distance; //int
    public $duration; //int
    public $recommended_price; //String
    public $savings; //String
}