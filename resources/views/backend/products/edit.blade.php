@extends('layouts.backend')
@section('title')@parent - {{ trans('backend_ar.edit_form') }} @stop
@section('content-header')
<h1>
    {{ trans('backend_ar.properties') }}<small>{{ trans('backend_ar.edit_form') }} {{$property->title}}</small>
</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        @include('common.errors')
        <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-inputs" id="property-form" action="{{ route('properties.update',$property->id) }}" data-parsley-validate="true" method="post" >
                    <input type="hidden" name="_method" value="PUT">
                    @include('backend.properties._form')
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

    maxFiles = 20; // max images to upload
//	ImageMustHasPrimary = true;
    ImageNotRequired = true;
    if (ImageNotRequired = true) {
        ImageMustHasPrimary = False;
    }

    $("a.makePrimary").on("click", function (event) {
        event.preventDefault();
        $("input.main_media_image").remove();
        filename = $(this).attr('rel');
        var main_image = '<input class="main_media_image" rel="' + filename + '" type="hidden" name="main_image" value="' + filename + '" />';
        $('.form-inputs').append(main_image);
        $("a.makePrimary").show();
        $(this).hide();

    });

    $('.tagsMutliple').selectize({
        delimiter: ',',
        persist: true,
        create: true
    });

</script>
@endsection
@section('ckeditor')
<script src="https://cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
<script>
    
    
    $(function () {
        
            CKEDITOR.replace('description[en]');
            CKEDITOR.replace('description[dut]');
            CKEDITOR.replace('description[sp]');
            CKEDITOR.replace('description[fr]');
            CKEDITOR.replace('description[por]');
            CKEDITOR.replace('description[it]');
            
            CKEDITOR.replace('descincluded[en]');
            CKEDITOR.replace('descincluded[dut]');
            CKEDITOR.replace('descincluded[sp]');
            CKEDITOR.replace('descincluded[fr]');
            CKEDITOR.replace('descincluded[por]');
            CKEDITOR.replace('descincluded[it]');
            
            CKEDITOR.replace('descunincluded[en]');
            CKEDITOR.replace('descunincluded[dut]');
            CKEDITOR.replace('descunincluded[sp]');
            CKEDITOR.replace('descunincluded[fr]');
            CKEDITOR.replace('descunincluded[por]');
            CKEDITOR.replace('descunincluded[it]');
    
            CKEDITOR.replace('price_table[en]');
            CKEDITOR.replace('price_table[dut]');
            CKEDITOR.replace('price_table[sp]');
            CKEDITOR.replace('price_table[fr]');
            CKEDITOR.replace('price_table[por]');
            CKEDITOR.replace('price_table[it]');
    });
</script>
@endsection