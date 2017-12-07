@extends('main')

@section('content')
%br
%br
.row
    .blokkok.col-sm-8.blog-main
        @if( $posts->count() )
        @foreach( $posts as $post )
        .blog-post
            %h2.blog-post-title
                %a{:href => "/article/#{ $post->post_slug }"} #{ $post->post_title }
            %p.blog-post-meta
                {{ date('M j, Y', strtotime( $post->created_at )) }} by
            %a{:href => "#"}
                {{ $post->author_ID }}
            .blog-content
                {!! nl2br( $post->post_content ) !!}
        @endforeach
        @else
        %p
            Постов нет!
        @endif

        @if( $posts->total() > 6 )
        %nav
            %ul.pager
                @if( $posts->firstItem() > 1 )
                %li
                    %a{:href => "#{ $posts->previousPageUrl() }"}
                        Предыдущая страница
                @endif

                @if( $posts->lastItem() < $posts->total() )
                %li
                    %a{:href => "#{ $posts->nextPageUrl() }"}
                        Следующая страница
                @endif
        @endif

@endsection
