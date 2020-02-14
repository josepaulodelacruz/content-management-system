@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('posts.create') }}" class="btn btn-success float-right">Add Post</a>
    </div>

    <div class="card card-default">
        <div class="card-header">Posts</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                <img src="{{ asset($post->image) }}" width="120" height="60" alt="">
                            </td>
                            <td>
                                {{ $post->title }}
                            </td>
                        </tr>

                     @endforeach
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
