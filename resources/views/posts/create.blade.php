@extends('layout.app')
@section('content')
{{-- display error masseage   --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form method="Post" action="{{route('posts.store')}}">
            @csrf
            <div>
                <label for="title" >Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div>
                <label for="Description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" >
            </div>
            <div>
                <label for="post creator" class="form-label">post creator</label>

                <select class="form-control" name="postcreator">
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>

            </div><br>
            <input type="submit"  class="btn btn-success">
        </form>
    </div>

@endsection

