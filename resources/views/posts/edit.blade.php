@extends('posts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 style="text-align: center; background-color: silver; border-radius: 10px">Bimbingan Karir | Edit</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row mt-2 mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3 mt-2">
                    <strong>Title :</strong>
                    <input type="text" name="name" value="{{ $post->name }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3 mt-2">
                    <strong>Detail :</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $post->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
        </div>

    </form>
@endsection
