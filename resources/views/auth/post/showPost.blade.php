@extends('layouts.admin')

@section('content-admin')
<div class="container">
    <div class="row justify-content-center">
        <form method="GET"
            action="{{ route('post.show', $post->url) }}">
            <div class="row mb-3 mt-4">
                <label for="title" class="col-md-2 col-form-label text-md-end">{{ __('Title') }}</label>

                <div class="col-md-9">
                    <input id="title" type="text" class="form-control" name="title" value="{{$post->title}}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <label for="url" class="col-md-2 col-form-label text-md-end">{{ __('Author') }}</label>

                <div class="col-md-9">
                    <input id="author" type="text" class="form-control" value="{{$post->author}}" name="author"
                        disabled>
                </div>
            </div>

            <div class="row mb-3">
                <label for="url" class="col-md-2 col-form-label text-md-end">{{ __('Url') }}</label>

                <div class="col-md-9">
                    <input id="url" type="text" class="form-control" value="{{$post->url}}" name="url" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <label for="category" class="col-md-2 col-form-label text-md-end">{{ __('Category') }}</label>

                <div class="col-md-9">
                    <input id="category" type="text" class="form-control" value="{{implode(", ", $post->category)}}" name="category" disabled>
                </div>
            </div>

            <div class="row mb-4">
                <label for="content" class="col-md-2 col-form-label text-md-end">{{ __('Content') }}</label>

                <div class="col-md-9">
                    <textarea id="content" type="text" class="form-control" rows="10" name="content"
                        disabled>{{$post->content}}</textarea>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection