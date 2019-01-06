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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Event;
use Illuminate\Http\Request;
/**
* イベント一覧表示
*/
Route::get('/', function () {
//     return view('events');
// });

    $events = Event::orderBy('created_at', 'asc')->get();
    return view('events', [
        'events' => $events
    ]);
});

/**
* 新「イベント」を追加
*/
Route::post('/events', function (Request $request) {

    //バリデーション
    $validator = Validator::make($request->all(), [
        'item_name' => 'required|max:255',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）
    $events = new event;
    $events->e_name = $request->e_name;
    $events->e_text = '01234567891';
    $events->e_date = '2017-03-07 00:00:00';
    $events->save(); 
    return redirect('/');


});
/**
* イベントを削除
*/
// Route::post('/event/{event}', function (Event $event) {
//
Route::post('/event/delete/{event}', function (Event $event) {
    $event->delete(); //追加
    return redirect('/'); //追加
});
