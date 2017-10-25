<?php
/**
 * Created by PhpStorm.
 * User: xiaojun
 * Date: 17-10-21
 * Time: 下午3:44
 */
namespace App\Http\Controllers;

class TestController extends \App\Http\Controllers\Controller {

    public function TestQueue(){
        dispatch(new \App\Jobs\test());
    }
}