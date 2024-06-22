@extends('articles.layout')

@section('content')
<div class="container mt-4">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('articles.create') }}"> <i class="fa fa-plus"></i> Create New Product</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Harga</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            @forelse ($articles as $article)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->type}}</td>
                    <td>
                        <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
             
                            <a class="btn btn-info btn-sm" href="{{ route('articles.show',$article->id) }}"><i class="fa-solid fa-list"></i> Show</a>
              
                            <a class="btn btn-primary btn-sm" href="{{ route('articles.edit',$article->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('articles.editimage',$article->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit Gambar</a>
             
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endforelse
            </tbody>
  
        </table>
</div>
@endsection