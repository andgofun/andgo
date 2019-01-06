<!-- resources/views/events.blade.php -->

@extends('layouts.app')
@section('content')

    <div class="panel-body">

        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
         <!-- バリデーションエラーの表示に使用-->

         <!-- イベント登録フォーム -->
        <form action="{{ url('events') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
             <!-- イベントのタイトル -->
             <div class="form-group">
                <div class="col-sm-6">
                 <label for="e_name" class="col-sm-3 control-label">イベント名</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="e_name" id="event-name" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="e_img" class="col-sm-3 control-label">イベント画像</label>
                    <input type="text" name="e_img" id="event-text" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="e_text" class="col-sm-3 control-label">イベント内容</label>
                    <input type="text" name="e_text" id="event-text" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="e_date" class="col-sm-3 control-label">イベント日</label>
                    <input type="e_date" name="e_date" id="event-date" class="form-control">
                </div>    
                
                
             </div>
             
             <!-- イベント 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus"></i> Save
                    </button>
                </div>
            </div>
        </form>
        <!-- イベント登録フォーム -->


     </div>
     <!-- event: 既に登録されてるイベントのリスト -->
     
     <!-- 現在 イベント -->
     @if (count($events) > 0)
         <div class="panel panel-default">
                <div class="panel-heading"> 
                    現在 イベント
                </div>
                <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダー -->
                    <thead>
                        <th>イベント一覧</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- テーブルイベント体 -->
                    <tbody>
                         @foreach ($events as $event)
                            <tr>
                                <!-- イベントタイトル -->
                                <td class="table-text">
                                    <div>{{ $event->item_name }}</div>
                                </td>
                                
                                <!-- イベント: 削除ボタン -->
                                <td>
                                    <form action="{{ url('event/delete/'.$event->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-trash"></i> 削除
                                        </button>
                                    </form>
                                </td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
         </div>
     @endif
     <!--  event: 既に登録されてるイベント リスト -->
     
     
@endsection