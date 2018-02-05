<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 11:42 AM
 */

namespace inquid\blablacar\models;


use yii\base\Model;

class Item extends Model
{
    public $value; //int
    public $count; //int
    public $is_selected; //boolean
}