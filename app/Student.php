<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/3
 * Time: 10:29
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model{
    protected $table = 'student';
    protected $fillable= 'name,age';
    public  $timestamps = true;
    protected function getDateFormat(){
        return time();
    }
    protected function asDateTime($value){
        return $value;
    }
}