<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 11:42 AM
 */

namespace inquid\blablacar\models;


use yii\base\Model;

class Facet extends Model
{
    public $name; //String
    public $type; //String
    public $items; //array(Item)
}