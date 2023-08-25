@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fw-bold">Modifica "{{ $post->title }}"</h2>
                    <a href="{{ Route('admin.posts.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="col-12 mb-5">
                <form action=" {{ Route('admin.posts.update', $post->id) }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-2">
                                <label class="control-label my-2">Title</label>
                                <input type="text" name="title" id="title" placeholder="Enter title" class="form-control" value="{{ old('title') ?? $post->title }}" required>
                            </div>
                            <div class="col-12 my-2">
                                <label class="control-label my-2">Content</label>
                                <textarea name="content" id="content" placeholder="Enter description" cols="30" rows="10" class="form-control" required>{{ old('content') ?? $post->content }}</textarea>
                            </div>
                            <div class="col-12 my-2">
                                <label class="control-label my-2">Slug</label>
                                <input type="text" name="thumb" id="thumb" placeholder="Enter thumb" class="form-control" value="{{ old('thumb') ?? $post->slug }}" required>
                            </div>
                            <div class="col-12 my-2">
                                <div class="form-group my-5 d-flex flex-column ">
                                    <div class="col-12 text-center my-5">
                                        <img width="450px" src="{{ asset('storage/'.$post->image) }}" alt="">
                                    </div>
                                    <label for="" class="control-label mb-3">Image</label>
                                    <input class="ps-3 form-control" type="file" id="image" name="image"
                                        value="{{ $post->image }}">
                                </div>
                            <div class="col-12 text-center my-5">
                                <button type="submit" class="btn btn-success">Modify</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection