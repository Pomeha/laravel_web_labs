@extends('main')
@section('content')
    <div class="blokkok" style="color: black">
        <form enctype="multipart/form-data" action="{{route('giveocen')}}" method="post">
            {{csrf_field()}}
            <label for="student_name">ФИО</label><br/>
            <select name="stud_name">
                @foreach($students as $student)
                    <option value="{{$student->fio}}">{{$student->fio}}</option>
                @endforeach
            </select><br/>
            <label for="predm">Предмет</label>
            <select name="predm">
                @foreach($predms as $predm)
                    <option value="{{$predm->name}}">{{$predm->name}}</option>
                @endforeach
            </select><br/>
            <label for="etsc">Стандартная оценка</label>
            <select name="etsc">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
            <label for="rus">ETSC</label>
            <select name="rus">
                <option value="неуд">Неуд</option>
                <option value="уд">Уд</option>
                <option value="хорошо">Хорошо</option>
                <option value="отлично">Отлично</option>
            </select>
            <input type="submit" class="btn btn-primary" value="Оценить"/>
        </form>
    </div>

@endsection
