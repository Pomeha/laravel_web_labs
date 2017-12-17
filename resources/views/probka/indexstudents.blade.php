@extends('main')

@section('title', '| Students')

@section('content')

    <div class="blokkok" style="color: black">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Группа</th>
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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection