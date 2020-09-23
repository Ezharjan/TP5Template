<?php


use think\Route;

Route::get('index/index', 'index/Index/index');
Route::get('index/hello', 'index/Index/hello');
Route::post('index/poster', 'index/Index/getPostedMsg');
Route::post('index/get_list', 'index/Index/getProducts');