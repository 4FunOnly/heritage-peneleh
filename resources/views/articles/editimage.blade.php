@extends('articles.layout')

@section('content')
<div class="container mt-5">
@if ($article->uploadImage)
@foreach ($article->uploadImage as $image)
<form action="{{ route('image.delete', $image->id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <div class="form-group mb-2">
        <label><b>Gambar</b></label>

        <img src="{{ asset($image->url) }}" width="100" height="100" alt="">
        <button type="submit" class="btn btn-danger btn-sm ml-2">Delete</button>
    </div><br>
</form>
@endforeach
@endif

<form action="{{ route('articles.addimage', $article->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image">Upload New Image</label>
        <input type="file" name="image" id="image" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>
</div>

@endsection