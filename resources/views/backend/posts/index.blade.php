@extends('layouts.backend')
@section('title') Admin | Posts @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
                <div class="col-12 pull-left">
                    <legend><h3 class="page-title">Posts</h3></legend>
                </div>
        </div>
        <hr>
        <div class="col-sm-12">
            <fieldset class="content-group">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-lg ">Create New Post</a>
                <a href="{{ route('admin.posts.trash') }}" class="btn btn-warning btn-lg ">Trashed posts</a>
            </fieldset>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="text-bold card-title">All posts</h5>
                    <table class="table">
                        <thead class="thead-default">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Creation Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at->diffForHumans() }}</td>
                            <td>Published</td>
                            <td>
                                <fieldset class="content-group">
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="" class="btn btn-warning" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" class="d-inline" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger" title="Trash"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </fieldset>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection