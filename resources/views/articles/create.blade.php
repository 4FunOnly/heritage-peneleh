@extends('articles.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Add New Product</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('articles.index') }}"><i class="fa fa-arrow-left"></i>
                Back</a>
        </div>

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="inputtitle" class="form-label"><strong>Judul:</strong></label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="inputtitle"
                    placeholder="title" value="{{ old('title') }}">
                @error('title')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputcontent" class="form-label"><strong>Content / Isi :</strong></label>
                <textarea class="form-control @error('content') is-invalid @enderror" style="height:150px"
                    name="content" id="inputcontent" placeholder="content">{{ old('content') }}</textarea>
                @error('content')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputtype" class="form-label"><strong>Jenis Artikel:</strong></label>
                <select name="type" class="form-control @error('type') is-invalid @enderror" id="inputtype"
                    placeholder="type" value="{{ old('type') }}">
                    <option value="Events">Event</option>
                    <option value="News">News</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label>Upload Images</label>
                <input class="form-control" type="file" name="images[]" id="images" multiple>
                @error('images')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>

    </div>
</div>

@endsection