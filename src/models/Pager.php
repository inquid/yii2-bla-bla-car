<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 11:40 AM
 */

namespace inquid\blablacar\models;


use yii\base\Model;

class Pager extends Model
{
    public $page; //int
    public $pages; //int
    public $total; //int
    public $limit; //int
}