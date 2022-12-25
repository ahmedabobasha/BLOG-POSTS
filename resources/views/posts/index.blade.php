@extends('layout.app')
@section('content')
<div class="container">
    <a href="{{route('posts.create')}}" type="button" class="btn btn-success">create post</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">description</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)

        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->myUserRelation ? $post->myUserRelation->name :'user not found'}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <a href="{{route('posts.show',$post['id'])}}" class="btn btn-primary">view</a>
                <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-success">Edit</a>
                <a href="{{route('posts.delete',$post['id'])}}"  class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

    </div>
@endsection

