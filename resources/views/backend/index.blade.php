@extends('layouts.backend',['page_title'=>'Dashboard'])
@section('title')@parent - {{ trans('backend.Dashboard') }} @stop
@section('content')
<!-- Main content -->
<section class="content overflow-hidden">
    <!-- Info boxes -->
    <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="small-box bg-green animated flipInY delay1">
                <div class="inner">
                    <h3>{{$propertiesCount}}</h3>
                    <p>{{ trans('backend_ar.properties') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-bank"></i>
                </div>
                <a href="{{ route('properties.index') }}" class="small-box-footer">اقرأ المزيد<i class="fa fa-arrow-circle-left"></i></a>
            </div>

            <!-- /.info-box -->
        </div>


        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="small-box bg-red animated flipInY delay3">
                <div class="inner">
                    <h3>{{$sub_categoryCount}}</h3>
                    <p>{{ trans('backend_ar.sub_categories') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-home"></i>
                </div>
                <a href="{{ route('sub_categories.index') }}" class="small-box-footer">اقرأ المزيد<i class="fa fa-arrow-circle-left"></i></a>
            </div>

            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="small-box bg-red animated flipInY delay3">
                <div class="inner">
                    <h3>{{$categoryCount}}</h3>
                    <p>{{ trans('backend_ar.categories') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-home"></i>
                </div>
                <a href="{{ route('categories.index') }}" class="small-box-footer">اقرأ المزيد<i class="fa fa-arrow-circle-left"></i></a>
            </div>

            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="small-box bg-blue animated flipInY delay2">
                <div class="inner">
                    <h3>{{$allAgentsCount}}</h3>

                    <p>{{ trans('backend_ar.users') }}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-people"></i>
                </div>
                <a href="{{ route('users.index') }}" class="small-box-footer">اقرأ المزيد<i class="fa fa-arrow-circle-left"></i></a>
            </div>

            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="small-box bg-yellow animated flipInY animate-time-1 delay4">
                <div class="inner">
                    <h3>{{$zones}}</h3>

                    <p>{{ trans('backend_ar.zones') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-home"></i>
                </div>
                <a href="{{ route('zones.index') }}" class="small-box-footer">اقرأ المزيد<i class="fa fa-arrow-circle-left"></i></a>
            </div>

            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="small-box bg-blue animated flipInY delay2">
                <div class="inner">
                    <h3>{{$locationCount}}</h3>

                    <p>{{ trans('backend_ar.locations') }}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-people"></i>
                </div>
                <a href="{{ route('locations.index') }}" class="small-box-footer">اقرأ المزيد<i class="fa fa-arrow-circle-left"></i></a>
            </div>

            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="small-box bg-green animated flipInY delay1">
                <div class="inner">
                    <h3>{{$hotelCount}}</h3>
                    <p>{{ trans('backend_ar.hotels') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-bank"></i>
                </div>
                <a href="{{ route('hotels.index') }}" class="small-box-footer">اقرأ المزيد<i class="fa fa-arrow-circle-left"></i></a>
            </div>

            <!-- /.info-box -->
        </div>
        <div class="clearfix visible-sm-block"></div>

        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="small-box bg-red animated flipInY delay3">
                <div class="inner">
                    <h3>{{$videoCount}}</h3>
                    <p>{{ trans('backend_ar.video') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-home"></i>
                </div>
                <a href="{{ route('videos.index') }}" class="small-box-footer">اقرأ المزيد<i class="fa fa-arrow-circle-left"></i></a>
            </div>

            <!-- /.info-box -->
        </div>
        <!-- /.col -->

    </div>


    <!-- /.row -->
</section>
<!-- /.content -->
@stop

@section('scripts')

@stop
