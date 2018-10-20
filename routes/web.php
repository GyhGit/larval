<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//分类路由
Route::get("classe/index","ClasseController@index")->name('classe.index');
Route::any("classe/add","ClasseController@add")->name('classe.add');
Route::any("classe/edit/{id}","ClasseController@edit")->name('classe.edit');
Route::get("classe/del/{id}","ClasseController@del")->name('classe.del');
//文章路由
Route::get("article/index","ArticleController@index")->name('article.index');
Route::any("article/add","ArticleController@add")->name('article.add');
Route::any("article/edit/{id}","ArticleController@edit")->name('article.edit');
Route::get("article/del/{id}","ArticleController@del")->name('article.del');
//商品路由
Route::get("category/index","CategoryController@index")->name('category.index');
Route::any("category/add","CategoryController@add")->name('category.add');
Route::any("category/edit/{id}","CategoryController@edit")->name('category.edit');
Route::get("category/del/{id}","CategoryController@del")->name('category.del');
//商品路由
Route::get("goods/index","GoodsController@index")->name('goods.index');
Route::any("goods/add","GoodsController@add")->name('goods.add');
Route::any("goods/edit/{id}","GoodsController@edit")->name('goods.edit');
Route::get("goods/del/{id}","GoodsController@del")->name('goods.del');
Route::get("goods/gd/{id}","GoodsController@gd")->name('goods.gd');