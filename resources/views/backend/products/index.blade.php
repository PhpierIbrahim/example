@extends('layouts.backend',['project_title'=>'Property'])
@section('title')@parent - {{ trans('backend_ar.properties') }} @stop
@section('content-header')
<div class="row">
    <div class="col-md-4">
        <h4><strong> {{ trans('backend_ar.properties') }} </strong></h4>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                @if(auth()->user()->role_id == 1 || auth()->user()->can('properties.create'))
                <a href="{{ route('properties.create') }}" class="btn btn-primary" data-toggle="tooltip" title="{{trans('backend.Add New')}}">{{trans('backend.Add New')}}</a>
                @endif
            </div>

        </div>
    </div>
    <div class="col-md-4">
        <form action="{{ URL::to('backend/properties/adv_search') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-md-10">
                <input type="text" name="title" class="form-control" style="background-color: #fff;" placeholder="أسم الرحله">
            </div>
            <div class="col-md-1">
                <button type="submit" name="seach" id="search-btn" class="btn btn-default">بحث</button>
            </div>
        </form>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th>{{ trans('backend.fields.logo') }}</th>
                            <th style="width: 20%">{{ trans('backend_ar.title') }}</th>
                            <th>{{ trans('backend_ar.Agent') }}</th>
                            <th>{{ trans('backend_ar.categories') }}</th>
                            <th>{{ trans('backend_ar.sub_categories') }}</th>
                            <th>{{ trans('backend.fields.status') }}</th>
                            <th>الترتيب</th>
                            <th>{{ trans('backend.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($properties && count($properties) > 0)
                        @foreach($properties as $key=>$property)
                        <tr>
                            <td>
                                @if(count($property->getMedia('images')) && !empty($property->getMedia('images')))
                                <img style="width: 50px" src="{{ $property->getMedia('images')->first()->getUrl() }}" alt="Image">
                                @endif
                            </td>
                            <td>{!! $property->title !!}</td>
                            <td>@if($property->agent){!! $property->agent->name !!}@endif</td>
                            <td>@if($property->category){!! $property->category->title !!}@endif</td>
                            <td>@if($property->sub_category){!! $property->sub_category->title !!}@endif</td>
                            <td>
                                @if($property->active)
                                <div class='badge bg-green'>{{ trans('backend.Active') }}</div>
                                @else
                                <div class='badge bg-red'>{{ trans('backend.Not Active') }}</div>
                                @endif
                            </td>
                            <td>{!! $property->sort_id !!}</td>
                            <td>
                                @if(auth()->user()->role_id == 1 || auth()->user()->can('prices.index'))
                                <a href="{!! url('backend/properties/'.$property->id.'/prices') !!}" class='btn btn-default btn-sm' data-toggle="tooltip" title="prices"><i class="glyphicon glyphicon-euro"></i></a>
                                @endif
                                @if(auth()->user()->role_id == 1 || auth()->user()->can('itineraries.index'))
                                <a href="{!! url('backend/properties/'.$property->id.'/itineraries') !!}" class='btn btn-default btn-sm' data-toggle="tooltip" title="itineraries"><i class="glyphicon glyphicon-link"></i></a>
                                @endif
                                @if(auth()->user()->role_id == 1 || auth()->user()->can('properties.show'))
                                <a href="{!! route('properties.show', [$property->id]) !!}" class='btn btn-default btn-sm' data-toggle="tooltip" title="{{trans('backend.View')}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                @endif
                                @if(auth()->user()->role_id == 1 || auth()->user()->can('properties.edit'))
                                <a href="{!! route('properties.edit', [$property->id]) !!}" class='btn btn-default btn-sm' data-toggle="tooltip" title="{{trans('backend.Edit')}}"><i class="glyphicon glyphicon-edit"></i></a>
                                @endif
                                @if(auth()->user()->role_id == 1 || auth()->user()->can('properties.destroy'))
                                <a href="#" data-id="{{ $property->id }}" data-csrf='{{ csrf_token() }}' data-action='{{ route('properties.destroy',$property->id) }}' class="btn btn-danger btn-sm delete" data-toggle="tooltip" title="{{trans('backend.Delete')}}"> <i class="glyphicon glyphicon-trash"></i> </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td id="no-record-founded" colspan="9">{{trans('backend.no records founded')}}</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                <!-- /.box-body -->
                <div class="box-footer clearfix"></div>
                {{ $properties->links() }}
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
@stop