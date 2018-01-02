<?php
use Illuminate\Routing\Router;

// Bbs 模块前台路由
$router->group(['prefix' =>'','module'=>'bbs'], function (Router $router) {
    
    // 首页
    $router->get('/', 'PagesController@index')->name('bbs.index');
});
