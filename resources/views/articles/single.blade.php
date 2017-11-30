@extends('main')

@section('title')
    | {{ $post->post_title }}
@endsection

@section('content')
<br>
<br>
    <div class="blokkok" style="color: black;">
    <div class="blog-header">
        <h1 class="blog-title">{{ $post->post_title }}</h1>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">

            @if( $post->post_thumbnail )
                <div class="blog-thumbnail">
                    <img src="/uploads/{{ $post->post_thumbnail }}" alt="{{ $post->post_title }}" />
                </div>
            @endif

            <div class="blog-content">
                {!! nl2br( $post->post_content ) !!}
            </div><!-- /.blog-post -->

            <section class="mt-5" id="respond">
                <h2>Комментарии</h2>

                {{--display approved comments--}}
                <?php
                echo Helper::get_comments( $post->id );
                ?>
            </section>

            <section class="mt-5" id="comment">
                {{-- display comment form --}}
                @includeIf('comments.form', ['post_id' => $post->id])
            </section>

        </div><!-- /.blog-main

    </div><!-- /.row -->
    </div>
@endsection