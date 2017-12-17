@extends('main')
@section('title', '| Statistics')

@section ('content')
    <div class="blokkok">
        <h1>Рейтинг посещений за месяц</h1>
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>Название страницы</th>
                <th>Количество посещений</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stats as $i)
                <tr>
                    <td>
                        {{$i->page_name}}
                    </td>
                    <td>
                        {{$i->count}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection