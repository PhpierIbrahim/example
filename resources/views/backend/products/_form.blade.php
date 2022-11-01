<div class="tab-content">
    <div class="box box-success col-sm-12">
        <h3 class="box-title">{{ trans('backend_ar.property general information') }}</h3>
    </div>
    <div class="box-body col-sm-12">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
@php
    if(Auth::user()->lang == 'en'){
        $active = 'en';
    }elseif(Auth::user()->lang == 'sp'){
        $active = 'sp';
    }elseif(Auth::user()->lang == 'dut'){
        $active = 'dut';
    }elseif(Auth::user()->lang == 'fr'){
        $active = 'fr';
    }elseif(Auth::user()->lang == 'por'){
        $active = 'por';
    }elseif(Auth::user()->lang == 'it'){
        $active = 'it';
    }else{
        $active = 'en';
    }
@endphp

        <ul class="nav nav-tabs">
            @foreach(config('laravel-translatable.languages') as $language=>$name)
            @if(Auth::user()->lang == "")
            <li @if($language == "en") class="active" @endif>
                 <a href="#{{$language}}-tab" data-toggle="tab">{{trans('backend.'.$name)}} <i class="fa"></i></a>
            </li>
            @else
            <li @if($language == $active) class="active" @endif @if($language != $active) style="display: none;"  @endif>
                 <a href="#{{$language}}-tab" data-toggle="tab">{{trans('backend.'.$name)}} <i class="fa"></i></a>
            </li>
            @endif
            @endforeach
        </ul>
        <div class="tab-content">
            @foreach(config('laravel-translatable.languages') as $language=>$name)
            @if(Auth::user()->lang == "")
            <div class="tab-pane @if($language == 'en') active @endif" id="{{$language}}-tab">
            @else
            <div class="tab-pane @if($language == $active) active @endif" id="{{$language}}-tab" @if($language != $active) style="display: none;"  @endif>
            @endif
                <!-- Section -->
                <div class="submit-section">
                    <div class="col-md-12 form-group">
                        <label class="col-xs-4 control-label">{{ trans('backend_ar.title') }}</label>
                        <div class="col-xs-8">
                            <input class="form-control" name="title[{{$language}}]" type="text" data-parsley-required="true" data-parsley-group-of-names="block-1" value="{{old('title.'.$language)?old('title.'.$language):$property->getTranslation('title',$language)}}" >
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-xs-4 control-label">{{ trans('backend_ar.description') }}</label>
                        <div class="col-xs-8">
                            <textarea class="form-control tinymceText"  name="description[{{$language}}]" id="description_{{$language}}" cols="50" rows="10" >{{old('description.'.$language,$property->getTranslation('description',$language))}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="box box-success col-sm-12">
                    <h3 class="box-title">{{ trans('backend_ar.property inclue information') }}</h3>
                </div>
                <div class="col-md-12 form-group">
                    <label class="col-xs-4 control-label">{{ trans('backend_ar.include') }}</label>
                    <div class="col-xs-8">
                        <textarea class="form-control tinymceText"  name="descincluded[{{$language}}]" id="descincluded_{{$language}}" cols="50" rows="10" >{{old('descincluded.'.$language,$property->getTranslation('descincluded',$language))}}</textarea>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label class="col-xs-4 control-label">{{ trans('backend_ar.uninclude') }}</label>
                    <div class="col-xs-8">
                        <textarea class="form-control tinymceText"  name="descunincluded[{{$language}}]" id="descunincluded_{{$language}}" cols="50" rows="10" >{{old('descunincluded.'.$language,$property->getTranslation('descunincluded',$language))}}</textarea>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label class="col-xs-4 control-label">{{ trans('backend_ar.day_night') }}</label>
                    <div class="col-xs-8">
                        <textarea class="form-control tinymceText"  name="day_night[{{$language}}]" id="day_night{{$language}}"  cols="50" rows="10" >{{old('day_night.'.$language,$property->getTranslation('day_night',$language))}}</textarea>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label class="col-xs-4 control-label">{{ trans('backend_ar.from_to_day') }}</label>
                    <div class="col-xs-8">
                        <input class="form-control" name="from_to_day[{{$language}}]" type="text" data-parsley-required="true" data-parsley-group-of-names="block-1" value="{{old('from_to_day.'.$language)?old('from_to_day.'.$language):$property->getTranslation('from_to_day',$language)}}" >
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label class="col-xs-4 control-label">{{ trans('backend_ar.from_to_place') }}</label>
                    <div class="col-xs-8">
                        <input class="form-control" name="from_to_place[{{$language}}]" type="text" data-parsley-required="true" data-parsley-group-of-names="block-1" value="{{old('from_to_place.'.$language)?old('from_to_place.'.$language):$property->getTranslation('from_to_place',$language)}}" >
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label class="col-xs-4 control-label">{{ trans('backend_ar.price_table') }}</label>
                    <div class="col-xs-8">
                        <textarea class="form-control tinymceText"  name="price_table[{{$language}}]" id="price_table_{{$language}}" cols="50" rows="10" >{{old('price_table.'.$language,$property->getTranslation('price_table',$language))}}</textarea>
                    </div>
                </div>
                <div class="box box-success col-sm-12">
                    <h3>{{ trans('backend_ar.category general information seo') }}</h3>
                </div>
                <div class="submit-section">
                    <div class="col-md-12 form-group">
                        <label class="col-xs-4 control-label">{{ trans('backend_ar.slug') }}</label>
                        <div class="col-xs-8">
                            <input class="form-control" name="slug[{{$language}}]" data-parsley-required="true" type="text" data-parsley-group-of-names="block-1" value="{{old('slug.'.$language)?old('slug.'.$language):$property->getTranslation('slug',$language)}}" >
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-xs-4 control-label">{{ trans('backend_ar.meta_title') }}</label>
                        <div class="col-xs-8">
                            <input class="form-control" name="meta_title[{{$language}}]" type="text" data-parsley-group-of-names="block-1" value="{{old('meta_title.'.$language)?old('meta_title.'.$language):$property->getTranslation('meta_title',$language)}}" >
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-xs-4 control-label">{{ trans('backend_ar.meta_desc') }}</label>
                        <div class="col-xs-8">
                            <textarea class="form-control tinymceText"  name="meta_desc[{{$language}}]" id="meta_desc_{{$language}}"  cols="50" rows="10" >{{old('meta_desc.'.$language,$property->getTranslation('meta_desc',$language))}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="col-xs-4 control-label">{{ trans('backend_ar.meta_key') }}</label>
                        <div class="col-xs-8">
                            <textarea class="form-control tinymceText"  name="meta_key[{{$language}}]" id="meta_key_{{$language}}"  cols="50" rows="10" >{{old('meta_key.'.$language,$property->getTranslation('meta_key',$language))}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
    <div class="box box-success col-sm-12">
        <h3 class="box-title">{{ trans('backend_ar.property information') }}</h3>
        <div class="col-md-12 form-group">
            <div class="col-md-6 form-group">
                <label class="col-xs-4 control-label">{{ trans('backend_ar.star') }}</label>
                <div class="col-xs-8">
                    <input class="form-control" name="star" type="number" data-parsley-group-of-names="block-1" value="{{old('star')?old('star'):$property->star}}" >
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label class="col-xs-4 control-label">{{ trans('backend_ar.price') }}</label>
                <div class="col-xs-8">
                    <input class="form-control" name="price" type="number" data-parsley-group-of-names="block-1" value="{{old('price')?old('price'):$property->price}}" >
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label class="col-xs-4 control-label">{{ trans('backend_ar.payment_option') }}</label>
                <div class="col-xs-8">
                    <input class="form-control" name="payment_option" type="text" data-parsley-group-of-names="block-1" value="{{old('payment_option')?old('payment_option'):$property->payment_option}}" >
                </div>
            </div>
        </div>
        <div class="col-md-12 form-group">
            <div class="col-md-6 form-group">
                <label class="col-xs-4 control-label">{{ trans('backend_ar.start_in') }}</label>
                <div class="col-xs-8">
                    <input class="form-control" name="start_in" type="date" data-parsley-group-of-names="block-1" value="{{old('start_in')?old('start_in'):$property->start_in}}" >
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label class="col-xs-4 control-label">{{ trans('backend_ar.end_in') }}</label>
                <div class="col-xs-8">
                    <input class="form-control" name="end_in" type="date" data-parsley-group-of-names="block-1" value="{{old('end_in')?old('end_in'):$property->end_in}}" >
                </div>
            </div>
        </div>
    </div>

    <div class="box box-success col-sm-12">
        <h3 class="box-title">{{ trans('backend_ar.property media information') }}</h3>
    </div>
    <div class="box-body col-sm-12">
        @php
        $cat = explode(",",$property->category_id);
        $sub_cat = explode(",",$property->sub_category_id);
        $info = explode(",",$property->tour_info_id);
        @endphp

        <div class="form-group col-sm-6{{ $errors->has('category_id') ? ' has-error' : '' }}">
            <label>{{ trans('backend_ar.categories') }}</label>
            <select id="category_id" class="form-control selectSearch select2" multiple="multiple" name="category_id[]" data-parsley-required="true">
                <option value="">{{ trans('backend_ar.Select Category') }}</option>
                @if($categories && !empty($categories))
                @foreach($categories as $id=>$value)
                <option value="{{$id}}" @if(in_array($id, $cat)) selected @endif>{{ $value }}</option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-sm-6{{ $errors->has('sub_category_id') ? ' has-error' : '' }}">
            <label>{{ trans('backend_ar.sub_categories') }}</label>
            <select id="sub_category_id" class="form-control selectSearch select2" multiple="multiple" name="sub_category_id[]" data-parsley-required="true">
                <option value="">{{ trans('backend_ar.Select Sub Category') }}</option>
                @if($sub_categories && !empty($sub_categories))
                @foreach($sub_categories as $id=>$value)
                <option value="{{$id}}" @if(in_array($id, $sub_cat)) selected @endif>{{ $value }}</option>
                @endforeach
                @endif
            </select>
        </div>

        <div class="form-group col-sm-6{{ $errors->has('location_id') ? ' has-error' : '' }}">
            <label>{{ trans('backend_ar.locations') }}</label>
            <select id="location_id" class="form-control selectSearch select2"  name="location_id" data-parsley-required="true">
                <option value="">{{ trans('backend_ar.locations') }}</option>
                @if($locations && !empty($locations))
                @foreach($locations as $id=>$value)
                <option value="{{$id}}" @if($property->location_id == $id) selected @endif>{{ $value }}</option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-sm-6{{ $errors->has('tour_info_id') ? ' has-error' : '' }}">
            <label>بيانات الرحله</label>
            <select id="tour_info_id" class="form-control selectSearch select2" multiple="multiple" name="tour_info_id[]" data-parsley-required="true">
                <option value="">بيانات الرحله</option>
                @if($infos && !empty($infos))
                @foreach($infos as $id=>$value)
                <option value="{{$id}}" @if(in_array($id, $info)) selected @endif>{{ $value }}</option>
                @endforeach
                @endif
            </select>
        </div>

        <div class="box-body col-sm-12">
            <div class="form-group col-sm-6">
                <label> {{ trans('backend.fields.Images') }} </label>
            </div>
        </div>

        <div class="box-body col-sm-12">
            <div class="form-group col-sm-12">
                <div class="dropzone form-group"></div>
            </div>
        </div>

        <div class="imagesBlock row">
            <ul>
                @if(isset($property) && $property->getMedia('images')->count())
                @foreach($property->getMedia('images') as $key => $image)
                <li class="col-md-3">
                    <div>
                        <div class="actions">
                            <a href="#" class="removeMedia" data-key="{{$key}}">X</a>
                            @if($image->hasCustomProperty('main-image'))
                            <span class="main_media_image" rel="{{$image->file_name}}"></span>
                            <a href="#" rel="{{$image->file_name}}" class="makePrimary"
                               style="display: none">Make Primary</a>
                            @else
                            <a href="#" rel="{{$image->file_name}}" class="makePrimary">Make Primary</a>
                            @endif
                        </div>
                        <img src="{{ $image->getUrl() }}" alt="Image">
                    </div>
                </li>
                @endforeach
                @endif
            </ul>
        </div>

    </div>

    <div class="row form-group">
        <div class="col-md-12">
            <div class="form-group col-sm-12">
                <label>{{ trans('backend_ar.sort_id') }}</label>
                <input class="form-control" name="sort_id" type="number"  value="{{old('sort_id')?old('sort_id'):$property->sort_id}}" >
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-1">
                <input type="checkbox" name="active" value="1" @if(isset($property)&& !empty($property)){{($property->active == 1)? "checked":""}} @endif>
            </div>
            <div class="col-md-5">
                <label for="active">{{trans('backend_ar.Check to set active')}}</label>
            </div>
            <div class="col-md-1">
                <input type="checkbox" name="featured" value="1" @if(isset($property)&& !empty($property)){{($property->featured == 1)? "checked":""}} @endif>
            </div>
            <div class="col-md-5">
                <label for="featured">{{trans('backend_ar.Check to set featured')}}</label>
            </div>
        </div>
    </div>

    <div class="submit">
        <input class="btn btn-block btn-primary btn-lg pull-right" type="submit" value="{{trans('backend.Submit')}}">
        <input class="btn btn-block btn-primary btn-lg pull-right" type="reset" value="{{trans('backend.remove')}}"/>

    </div>
</div>
