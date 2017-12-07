@extends('main')

@section('title')
| #{ $post->post_title }
@endsection

@section('content')
%br/
%br/
.blokkok{:style => "color: black;"}
    .blog-header
        %h1.blog-title {{ $post->post_title }}
    .row
        .col-sm-8.blog-main
            @if( $post->post_thumbnail )
            .blog-thumbnail
                %img{:alt => "#{ $post->post_title }", :src => "/uploads/#{ $post->post_thumbnail }"}/
            @endif
            .blog-content
                {!! nl2br( $post->post_content ) !!}
            %section#respond.mt-5
                %h2 Комментарии
                {{--display approved comments--}}
                = Helper::get_comments( $post->id )


    %section#comment.mt-5
        @includeIf('comments.form', ['post_id' => $post->id])

@endsection
