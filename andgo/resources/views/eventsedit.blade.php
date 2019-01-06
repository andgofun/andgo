<!-- resources/views/eventsedit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form action="{{ url('events/update') }}" method="POST">

        <!-- e_name -->
        <div class="form-group">
           <label for="e_name">Title</label>
           <input type="text" id="e_name" name="e_name" class="form-control" value="{{$event->e_name}}">
        </div>
        <!--/ e_name -->
        
        <!-- e_text -->
        <div class="form-group">
           <label for="e_text">Number</label>
        <input type="text" id="e_text" name="e_text" class="form-control" value="{{$event->e_text}}">
        </div>
        <!--/ e_text -->

        <!-- e_img -->
        <div class="form-group">
           <label for="e_img">Amount</label>
        <input type="text" id="e_img" name="e_img" class="form-control" value="{{$event->e_img}}">
        </div>
        <!--/ e_img -->
        
        <!-- e_date -->
        <div class="form-group">
           <label for="e_date">e_date</label>
            <input type="datetime" id="e_date" name="e_date" class="form-control" value="{{$event->e_date}}"/>
        </div>
        <!--/ e_date -->
        
        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/') }}">
                <i class="glyphicon glyphicon-backward"></i>  Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
         
         <!-- id値を送信 -->
         <input type="hidden" name="id" value="{{$event->id}}" />
         <!--/ id値を送信 -->
         
         <!-- CSRF -->
         {{ csrf_field() }}
         <!--/ CSRF -->
         
    </form>
    </div>
</div>
@endsection
