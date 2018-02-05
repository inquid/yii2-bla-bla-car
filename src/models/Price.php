<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 11:41 AM
 */

namespace inquid\blablacar\models;


use yii\base\Model;

class Price extends Model
{
    public $value; //int
    public $currency; //String
    public $symbol; //String
    public $string_value; //String
    public $price_color; //String
}