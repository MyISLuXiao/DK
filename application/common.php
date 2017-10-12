<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 *  信息返回
 * @param $code string 错误码
 * @param $data array 返回数据
 * @param $message string 信息提示
 * @return array
 */

function jsonReturn($code, $data, $message)
{
    return array('code' => $code, 'data' => $data, 'message' => $message);
}
// curl
function CURL($url, $data, $timeout = 30)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_POST, 1 );
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $data = curl_exec($curl);
    curl_close($curl);
    //echo curl_error($curl);
    return $data;
}