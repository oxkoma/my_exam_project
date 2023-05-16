@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Menu</h2>
            </div>
            <div class="float-start">
                <a class="btn btn-primary" href="{{ route('menus.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="float-start mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $menu->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Action:</strong>
                {{ $menu->action }}
            </div>
        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                {{ $menu->content }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keywords:</strong>
                {{ $menu->keywords }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descriptions:</strong>
                {{ $menu->descriptions }}
            </div>
        </div>
    
    </div>

@endsection