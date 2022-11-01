@extends('home',['page_title'=>'Categories'])
@section('title')@parent - Categories @stop
@section('content-header')
<div class="row">
    <div class="col-md-4">
        <h4><strong > Categories </strong></h4>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('categories.create') }}" class="btn btn-primary" data-toggle="tooltip" title="Add New">Add New</a>
            </div>

        </div>
    </div>
    <div class="col-md-4">
        <form action="{{ URL::to('categories/adv_search') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-md-10">
                <input type="text" name="name" class="form-control" style="background-color: #fff;" placeholder=" category name">
            </div>
            <div class="col-md-1">
                <button type="submit" name="seach" id="search-btn" class="btn btn-default">Search</button>
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
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($categories && count($categories) > 0)
                        @foreach($categories as $key=>$category)
                        <tr>
                            <td>{!! $category->name !!}</td>
                            <td>
                                @if($category->is_active)
                                <div class='badge bg-green'>Active</div>
                                @else
                                <div class='badge bg-red'>Not Active</div>
                                @endif
                            </td>
                            <td>
                                <div class=''>
                                    <a href="{!! route('categories.edit', [$category->id]) !!}" class='btn btn-default btn-sm' data-toggle="tooltip" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="#" id="{{ $category->id }}" data-id="{{ $category->id }}" data-csrf='{{ csrf_token() }}' data-action='{{ route('categories.destroy',$category->id) }}' class="btn btn-danger btn-sm delete" data-toggle="tooltip" title="{{trans('backend.Delete')}}"> <i class="glyphicon glyphicon-trash"></i> </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td  id="no-record-founded" colspan="9">No records founded</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                <!-- /.box-body -->
                <div class="box-footer clearfix"></div>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
@stop

