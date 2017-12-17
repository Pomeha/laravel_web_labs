@extends('main')

@section('title', '| Students')

@section('content')

    <div class="blokkok" style="color: black">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Группа</th>
                @foreach($predms as $predm)
                    <th style="text-align: center">{{$predm->name}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                @foreach($ocenkas as $i)
                    @if($student->fio == $i->stud_name)
                <tr>
                    <td>
                        {{$student->fio}}
                    </td>
                    <td>
                        {{$student->group}}
                    </td>
                    @foreach($predms as $predm)
                    <td>
                        @foreach($ocenkas as $ocenka)
                            @if($student->fio == $ocenka->stud_name && $predm->name == $ocenka->predm)
                                {{$ocenka->rus}} ({{$ocenka->etsc}})
                            @endif
                        @endforeach
                    </td>
                    @endforeach
                    @endif
                @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('goodstuds')}}" class="btn btn-success">Отличники</a>
        <a href="{{route('indexstud')}}" class="btn btn-info">Все студенты</a>
    </div>
@endsection