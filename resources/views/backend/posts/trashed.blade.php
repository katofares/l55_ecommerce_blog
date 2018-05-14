@extends('layouts.backend')
@section('title') Posts | Trashed @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="col-12 pull-left">
                <legend><h3 class="page-title">Trashed Posts</h3></legend>
            </div>
        </div>
        <hr>
        <div class="col-sm-12">
            <fieldset class="content-group">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-lg ">Create New Post</a>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-info btn-lg ">All Posts</a>
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
                        @foreach($trashed_posts as $trashed_post)
                            <tr>
                                <th scope="row">{{ $trashed_post->id }}</th>
                                <td>{{ $trashed_post->title }}</td>
                                <td>{{ $trashed_post->created_at->diffForHumans() }}</td>
                                <td>Published</td>
                                <td>
                                    <fieldset class="content-group">
                                        <a href="" class="btn btn-primary" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{ route('admin.posts.restore',$trashed_post->id ) }}" class="btn btn-success" title="Restore"><i class="fa fa-undo" aria-hidden="true"></i></a>
                                        <a href="{{ route('admin.posts.remove',$trashed_post->id ) }}" class="btn btn-danger" title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>

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