<?php

if(config('domain.admin.domain')){
    Route::domain(config('domain.admin.domain'))->group(function () {
        //欢迎页面
        Route::get('home','BaseController@home')->name('home');

        //测试模板
        Route::namespace('Dashboards')->group(function () {
            Route::get('dashboard/icon','DashboardController@icon')->name('dashboard/icon');
            Route::get('test','TestController@index')->name('test');//测试
        });

        //用户管理
         Route::namespace('Users')->group(function () {
             //用户表
             Route::get('index','UserController@index')->name('index');
             Route::get('user/add','UserController@add')->name('user/add');
             Route::get('user/update','UserController@update')->name('user/update');
             Route::get('user/delete','UserController@delete')->name('user/delete');
         });

         //权限管理
         Route::namespace('Authorities')->group(function () {
            //角色表
             Route::get('roles','RoleController@roles')->name('roles');
             Route::get('role/add','RoleController@add')->name('role/add');
             Route::get('role/edit','RoleController@edit')->name('role/edit');
             Route::post('role/story','RoleController@story')->name('role/story');
             Route::post('role/update','RoleController@update')->name('role/update');
             Route::get('role/delete','RoleController@delete')->name('role/delete');
         });

         //文章管理
         Route::namespace('Articles')->group(function () {
             //文章
             Route::get('article/index','ArticleController@index')->name('article/index');
             Route::get('article/edit','ArticleController@edit')->name('article/edit');
             Route::get('article/delete','ArticleController@delete')->name('article/delete');

             //文章分类
             Route::get('assort/index','AssortController@index')->name('assort/index');
             Route::get('assort/edit','AssortController@edit')->name('assort/edit');
             Route::get('assort/delete','AssortController@delete')->name('assort/delete');
         });

         //广告管理
         Route::namespace('Advertisements')->group(function () {

         });

    });
}




