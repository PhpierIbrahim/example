@extends('layouts.backend')
@section('title')@parent - {{ trans('backend_ar.view_form') }} @stop
@section('content-header')
<h1>
    {{ trans('backend_ar.properties') }} {{$property->title}}
</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h1 class="box-title">{{ trans('backend.show_form') }}</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div class="row form-group ">
                    <div class="col-sm-3">
                        <label>{{ trans('backend_ar.title') }} </label>
                    </div>
                    <div class="col-sm-9">
                        {{$property->title}}
                    </div>
                </div>
                <div class="row form-group ">
                    <div class="col-sm-3">
                        <label>{{ trans('backend_ar.description') }} </label>
                    </div>
                    <div class="col-sm-9">
                        {{$property->description}}
                    </div>
                </div>

                <div class="row form-group ">
                    <div class="col-sm-3">
                        <label>{{ trans('backend.fields.status') }}</label>
                    </div>
                    <div class="col-sm-9">
                        @if($property->active)
                        <div class='badge bg-green'>{{ trans('backend.Active') }}</div>
                        @else
                        <div class='badge bg-red'>{{ trans('backend.Not Active') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">

                    <label>{{ trans('backend.fields.Images') }} </label>

                    <div class="imagesBlock row">
                        <ul>
                            @if(isset($property) && null !== $property->getMedia('images'))
                            @foreach($property->getMedia('images') as $media)
                            <li class="col-md-3">
                                <div>
                                    <img src="{{ $media->getUrl() }}"  alt="Image">
                                </div>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <!-- form -->
        </div>
        <!-- forms div -->
    </div>
</div>
@stop
