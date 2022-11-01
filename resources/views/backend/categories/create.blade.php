@extends('home')
@section('title')@parent - create Form @stop
@section('content-header')
<h1>
    Categories
</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h1 class="box-title">create Form</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-inputs" id="industry-form" action="{{ route('categories.store') }}" data-parsley-validate="true" method="post">
                    @include('backend.categories._form')
                </form>
            </div>
            <!-- form -->
        </div>
        <!-- forms div -->
    </div>
</div>
@stop
@section('scripts')

<script>

        ImageNotRequired = true;

</script>
@endsection