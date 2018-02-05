<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 11:41 AM
 */

namespace inquid\blablacar\models;


use yii\base\Model;

class Car extends Model
{
    public $model; //String
    public $make; //String
    public $comfort; //String
    public $comfort_nb_star; //int
}