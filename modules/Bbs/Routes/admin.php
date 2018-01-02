<?php
use Illuminate\Routing\Router;

// Bbs 模块后台路由
$router->group(['prefix' =>'bbs','module'=>'bbs'], function (Router $router) {
    
    // 首页
    $router->get('/', 'IndexController@index')->name('bbs.index')->middleware('allow:bbs.index');

    // 单个路由示例
    // $router->get('test2', 'IndexController@test2')->name('bbs.test2')->middleware('allow:bbs.test2');

    // 群组路由示例
    // $router->group(['prefix' =>'example'], function (Router $router) {
    //    $router->get('index','ExampleController@index')->name('bbs.example.index')->middleware('allow:bbs.example.index');
    //    $router->get('create','ExampleController@create')->name('bbs.example.create')->middleware('allow:bbs.example.create');
    //    $router->post('store','ExampleController@store')->name('bbs.example.store')->middleware('allow:bbs.example.store');    
    //    $router->get('edit/{id}','AdministratorController@edit')->name('bbs.example.edit')->middleware('allow:bbs.example.edit');
    //    $router->put('update/{id}','AdministratorController@update')->name('bbs.example.update')->middleware('allow:bbs.example.update');
    //    $router->delete('destroy/{id}','AdministratorController@destroy')->name('bbs.example.destroy')->middleware('allow:bbs.example.destroy');                 
    // });    
    
});
