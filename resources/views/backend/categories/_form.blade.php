<div class="tab-content">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row form-group">

        <div class="form-group col-sm-6">
            <label> Name</label>
            <input class="form-control" name="name" value="{{ old('name',$category->name) }}" type="text" data-parsley-required="true" placeholder="" data-parsley-required="true">
        </div>

        <div class="form-group col-sm-6">
            <label> Parent Category</label>
            <input class="form-control" name="parent_category" value="{{ old('parent_category',$category->parent_category) }}" type="text"  placeholder="" >
        </div>

        <div class="col-md-6">
            <div class="col-md-1">
                <input type="checkbox" name="is_active" value="1" @if(isset($category)&& !empty($category)){{($category->is_active == 1)? "checked":""}} @endif>
            </div>
            <div class="col-md-10">
                <label for="active">Check to set active</label>
            </div>
        </div>
    </div>

    <div class="submit">
        <input class="btn btn-block btn-primary btn-lg pull-right" type="submit" value="Submit">
        <input class="btn btn-block btn-danger btn-lg pull-right" type="reset" value="Remove" />
    </div>
</div>