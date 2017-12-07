@extends('main')

@section('content')

.blokkok
    .lostablos
        - foreach($photos as $photo)
            %img.item{:src => "#{asset($photo)}", width: 120, height: 240}


@endsection