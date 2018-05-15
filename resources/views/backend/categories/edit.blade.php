@extends('layouts.backend')
@section('title') Category | Edit @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="col-12 pull-left">
                <legend><h3 class="page-title">Edit category</h3></legend>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <fieldset class="content-group">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-info btn-group-lg ">Back to list</a>
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group row  {{ $errors->has('name') ? ' has-danger' : '' }}">
                    <label for="name" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" value="{{ old('name', $category->name) }}"  class="form-control {{ $errors->has('name') ? ' form-control-danger' : '' }}" id="name" >
                        @if ($errors->has('name'))
                            <div class="form-control-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </div>
                        @endif
                    </div>

                </div>
                <div class="form-group row {{ $errors->has('body') ? ' has-danger' : '' }}">
                    <label for="body" class="col-sm-2 col-form-label">Body</label>
                    <div class="col-sm-10">
                        <textarea class="form-control {{ $errors->has('body') ? ' form-control-danger' : '' }}" id="body"  name="body" cols="10" rows="10">{{ old('body', $category->body) }}</textarea>
                        @if ($errors->has('body'))
                            <div class="form-control-feedback">
                                <strong>{{ $errors->first('body') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-group-lg btn-primary"><i class="fa fa-plus-circle position-left"></i>Update Category</button>
            </form>
        </div>
    </div>

@endsection