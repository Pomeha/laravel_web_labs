@extends('main')
@section('title', 'Добавление нового студента')


@section('content')
    <div class="blokkok" style="color: black">
    <form enctype="multipart/form-data" action="{{route('savestud')}}" method="post">
        {{ csrf_field() }}
        <label for="fio">ФИО</label><br/>
        <input type="text" name="fio" id="fio" value="{{old('fio')}}"/><br/>
        <label for="group">Группа</label>
        <select name="group">
            <option value="И11">И11</option>
            <option value="И12">И12</option>
            <option value="И13">И13</option>
            <option value="И14">И14</option>
            <option value="И21">И21</option>
            <option value="И22">И22</option>
            <option value="И23">И23</option>
            <option value="И24">И24</option>
            <option value="И31">И31</option>
            <option value="И32">И32</option>
            <option value="И33">И33</option>
            <option value="И34">И34</option>
            <option value="И41">И41</option>
            <option value="И42">И42</option>
            <option value="И43">И43</option>
            <option value="И44">И44</option>
        </select>
        <input type="submit" class="btn btn-primary" value="Создать"/>


    </form>
    </div>
@endsection