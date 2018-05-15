@extends('layouts.backend')
@section('title') Admin | Categories @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
                <div class="col-12 pull-left">
                    <legend><h3 class="page-title">Categories</h3></legend>
                </div>
        </div>
        <hr>
        <div class="col-sm-12">
            <fieldset class="content-group">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary btn-lg ">Create New Category</a>
            </fieldset>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="text-bold card-title">All categories</h5>
                    <table class="table">
                        <thead class="thead-default">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <fieldset class="content-group">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-success" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="" class="btn btn-warning" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" class="d-inline" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </fieldset>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $categories->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>
@endsection