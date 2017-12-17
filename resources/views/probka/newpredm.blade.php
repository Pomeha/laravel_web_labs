@extends('main')


@section('content')
    <div class="blokkok" style="color: black">
       <form enctype="multipart/form-data" action="{{route('savepredm')}}" method="post">
            {{csrf_field()}}
            <label for="name">Название</label>
            <input type="text" name="name" id="name" value="{{old('name')}}"/><br/>
            <label for="short_name">Короткое название</label>
            <input type="text" name="short_name" id="short_name" value="{{old('short_name')}}"/><br/>
            <input type="submit" class="btn btn-primary" value="Создать предмет"/>
       </form>
    </div>
@endsection