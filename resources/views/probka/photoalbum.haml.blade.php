@extends('main')

@section('content')


.slider{id: 'main-slider'}
    .slider-wrapper
        - foreach($photos as $photo)
            %img.slide{:src => "#{asset($photo)}", width: 120, height: 240, alt: "#{$photo}"}


@endsection