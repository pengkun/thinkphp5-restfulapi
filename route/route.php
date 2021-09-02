<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\facade\Route;

//一般路由规则，访问的url为：v1/address/1,对应的文件为Address类下的read方法
Route::get(':v1/address/:id', 'api/:v1.user/address');

Route::resource(':v1/user', 'api/:v1.user');       //资源路由，详情查看tp手册资源路由一章

//生成access_token，post访问Token类下的token方法
Route::post(':v1/token', 'api/:v1.token/token');
Route::post(':v1/token/refresh', 'api/:v1.token/refresh');

