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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection