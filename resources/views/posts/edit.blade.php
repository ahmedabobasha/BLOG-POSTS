@extends('layout.app')
@section('content')
    <div class="container">

        <form  method="post" action="{{route('posts.update',$id->id)}}" >
            @csrf

            <div>
                <label for="title" >Title</label>
                <input type="text" name="title" value="{{$id->title}}" class="form-control">
            </div>
            <div>
                <label for="Description" class="form-label">Description</label>
                <input type="text" name="description" value="{{$id->description}}"  class="form-control" >
            </div>

            <div>
                <label for="post creator" class="form-label">post creator</label>
                <select class="form-control">
                    <option>ahmed</option>
                    <option>mohamed</option>
                </select>
            </div><br>
            <input type="submit" value="update" class="btn btn-success">
        </form>

    </div>
@endsection
