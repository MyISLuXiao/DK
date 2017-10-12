<?php
namespace app\v1\controller;

use think\Db;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $data = array('api_key' => config('lite.api_key'),'api_secret'=>config('lite.api_secret'));
        print_r($data);
        $rel = CURL('https://api.megvii.com/faceid/lite/get_token', $data);
        print_r($rel);
    }
}