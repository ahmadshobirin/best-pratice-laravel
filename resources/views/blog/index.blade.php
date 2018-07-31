@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Semua Data</div>
                <div class="card-body">
                    <a href="{{ route('blog.create') }}" class="btn btn-sm btn-success">Tambah Data</a>
                    <br>
                    <br>
                   <table class="table table-striped table-hover">
                       <thead>
                           <tr>
                               <td>No</td>
                               <td>Judul</td>
                               <td>Artikel</td>
                               <td>Opsi</td>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $blog->judul }}</td>
                                <td>{{ $blog->artikel }}</td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <a href="{{ route('blog.edit',$blog->id) }}"class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form method="post" action="{{ route('blog.destroy',$blog->id) }}">
                                                    {{ method_field('DELETE') }} {{csrf_field()}}
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
