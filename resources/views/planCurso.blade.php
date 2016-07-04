@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel_uni"><label class="panel_uni_title"> Plan de curso:  {{ Auth::user()->name }}  </label></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
