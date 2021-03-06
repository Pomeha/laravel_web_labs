@extends('main')

@section('title', '| Blog Tutorial')

@section('content')

    <div class="row">
        <div class="col-sm-8 blog-main">

            @if( $posts->count() )
                @foreach( $posts as $post )

                    <div class="blog-post">
                        <h2 class="blog-post-title">
                            <a href="/article/{{ $post->post_slug }}">{{ $post->post_title }}</a>
                        </h2>
                        <p class="blog-post-meta">{{ date('M j, Y', strtotime( $post->created_at )) }} by <a href="#">{{ Helper::get_userinfo( $post->author_ID )->name }}</a></p>

                        <div class="blog-content">
                            {!! nl2br( $post->post_content ) !!}
                        </div>
                    </div>

                @endforeach
            @else

                <p>Постов нет</p>

            @endif

            {{-- Display pagination only if more than the required pagination --}}
            @if( $posts->total() > 6 )
                <nav>
                    <ul class="pager">
                        @if( $posts->firstItem() > 1 )
                            <li><a href="{{ $posts->previousPageUrl() }}">След. страница</a></li>
                        @endif

                        @if( $posts->lastItem() < $posts->total() )
                            <li><a href="{{ $posts->nextPageUrl() }}">Предыдущая страница</a></li>
                        @endif
                    </ul>
                </nav>
            @endif

        </div><!-- /.blog-main -->

    </div><!-- /.row -->
@endsection
