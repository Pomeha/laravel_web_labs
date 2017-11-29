@extends('main')

@section('title', '| Add New Post')

@section('content')

    <div class="container">

        {{-- Check if current user is logged-in or a guest --}}
        @if (Auth::guest())

            <p class="mt-5">Пожалуйста <a href="/login/">авторизуйтесь</a> что бы добавить пост.</p>

        @else

            <div class="blog-header">
                <h1 class="blog-title">Добавить новый пост</h1>
            </div>

            <div class="row">
                <div class="push-md-2 col-md-8">

                    <form enctype="multipart/form-data" action="{{ route('posts.store') }}" method="POST">
                        {{ csrf_field() }}

                        <input type="hidden" name="author_ID" value="{{ Auth::id() }}" />
                        <input type="hidden" name="post_type" value="post" />

                        <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
                            <label for="post_title">Тема</label> <br/>
                            <input type="text" name="post_title" id="post_title" value="{{ old('post_title') }}" />

                            @if ($errors->has('post_title'))
                                <span class="help-block">
	                                <strong>{{ $errors->first('post_title') }}</strong>
	                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('post_slug') ? ' has-error' : '' }}">
                            <label for="post_slug"></label> <br/>
                            <input type="text" name="post_slug" id="post_slug" value="{{ old('post_slug') }}" />

                            @if ($errors->has('post_slug'))
                                <span class="help-block">
	                                <strong>{{ $errors->first('post_slug') }}</strong>
	                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('post_content') ? ' has-error' : '' }}">
                            <label for="post_content">Content</label> <br/>
                            <textarea name="post_content" id="post_content" cols="80" rows="6">{{ old('post_content') }}</textarea>

                            @if ($errors->has('post_content'))
                                <span class="help-block">
	                                <strong>{{ $errors->first('post_content') }}</strong>
	                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="post_thumbnail">Изображение</label> <br/>
                            <input type="file" name="post_thumbnail" id="post_thumbnail" />
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Publish" />
                            <a class="btn btn-primary" href="{{ route('posts.index') }}">Отмена</a>
                        </div>
                    </form>

                </div>
            </div>

        @endif

    </div>

@endsection
