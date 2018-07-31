@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Blog</div>

                <div class="card-body">
                    <form action="{{ route('blog.update',$blog->id) }}" method="POST">

                        {{ csrf_field() }} {{ method_field('PUT') }}

                       <div class="form-group">
                           <label for="">Judul</label>
                        <input type="text" class="form-control" value="{{ $blog->judul }}" name="judul" maxlength="40" required>
                       </div>

                       <div class="form-group">
                           <label for="">Artikel</label>
                           <textarea name="artikel" class="form-control"> {{ $blog->artikel }} </textarea>
                       </div>

                       <input type="submit" value="Ubah" class="btn btn-primary btn-sm">
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
