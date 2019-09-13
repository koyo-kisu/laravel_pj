<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* getで/api/booksにリクエストを送るとController中のindexアクションを実行 */
Route::get('books', 'Api\BookController@index');

/* 作成 */
Route::post('create', 'Api\BookController@create');

/* 削除 */
Route::post('del', 'Api\BookController@delete');

/* 検索 */
Route::post('search', 'Api\BookController@search');

/* 詳細 */ 
Route::get('books/{id}', 'Api\BookController@detail');

/* 編集 */
Route::get('books/error/{id}', 'Api\BookController@edit');

/* 更新 */
Route::post('update', 'Api\BookController@update');