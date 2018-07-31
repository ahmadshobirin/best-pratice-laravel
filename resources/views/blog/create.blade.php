@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buat Data Blog</div>

                <div class="card-body">
                    <form action="{{ route('blog.store') }}" method="POST">

                        {{ csrf_field() }}

                       <div class="form-group">
                           <label for="">Judul</label>
                           <input type="text" class="form-control" name="judul" maxlength="40" required>
                       </div>

                       <div class="form-group">
                           <label for="">Artikel</label>
                           <textarea name="artikel" class="form-control"></textarea>
                       </div>

                       <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
