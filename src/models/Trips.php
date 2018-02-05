<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 10:30 AM
 */

namespace inquid\blablacar\models;


class Trips extends Model
{
    public $links; //Links
    public $pager; //Pager
    public $trips = []; //array(Trip)
    public $top_trips = []; //array(object)
    public $facets = []; //array(Facet)
    public $distance; //int
    public $duration; //int
    public $recommended_price; //String
    public $savings; //String
}