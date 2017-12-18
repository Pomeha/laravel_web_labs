@extends('main')
@section('title', '| Statistics')

@section ('content')
    <div class="blokkok" style="color: black;">
        <h1>Рейтинг посещений за месяц</h1>
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>Название страницы</th>
                <th>Количество посещений</th>
                <th>IP</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stats as $stat)
                <tr>
                    <td>
                        {{$stat->page_name}}
                    </td>
                    <td>
                        {{$stat->count}}
                    </td>
                    <td>
                        {{$stat->ip}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection