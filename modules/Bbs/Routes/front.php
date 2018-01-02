<?php
use Illuminate\Routing\Router;

// Bbs 模块前台路由
$router->group(['prefix' =>'bbs','module'=>'bbs'], function (Router $router) {
    
    // 首页
    $router->get('/', 'IndexController@index')->name('bbs.index');
});
