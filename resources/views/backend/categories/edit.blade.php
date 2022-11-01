@extends('home')
@section('title')@parent - Edit Form @stop
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
                <h1 class="box-title">Edit  {{$category->title}}</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-inputs" id="industry-form" action="{{ route('categories.update',$category->id) }}" data-parsley-validate="true" method="post" >
                    <input type="hidden" name="_method" value="PUT">
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

@section('ckeditor')
	<script src="https://cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
	<script>
	  $(function () {
	    CKEDITOR.replace( 'description[dut]' );
	    CKEDITOR.replace( 'description[en]' );
            CKEDITOR.replace( 'description[sp]' );
            CKEDITOR.replace( 'description[fr]' );
            CKEDITOR.replace( 'description[por]' );
            CKEDITOR.replace( 'description[it]' );
            CKEDITOR.replace( 'footer_desc[dut]' );
	    CKEDITOR.replace( 'footer_desc[en]' );
            CKEDITOR.replace( 'footer_desc[sp]' );
            CKEDITOR.replace( 'footer_desc[fr]' );
            CKEDITOR.replace( 'footer_desc[por]' );
            CKEDITOR.replace( 'footer_desc[it]' );
	  });
	</script>
@endsection