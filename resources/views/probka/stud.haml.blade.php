@extends('main')

@section('content')
.blokkok{style: 'color: black;'}
    %p.lead Севастопольский государственный университет
    %p.lead Институт Информационных систем и управления в технических системах
    %p.lead Кафедра "Информационные системы"
    %table#study.table.table-bordered.table-responsive.table-hover
        %thead
            %tr
                %th{:rowspan => "3"} №
                %th{:rowspan => "3"} Дисциплина
                %th{:colspan => "12"}
                Часов в неделю (Лекций, Лаб.раб, Практ. раб)
            %tr
                %th{:colspan => "6"} 1 курс
                %th{:colspan => "6"} 2 курс
            %tr
                %th{:colspan => "3"} 1 сем
                %th{:colspan => "3"} 2 сем
                %th{:colspan => "3"} 3 сем
                %th{:colspan => "3"} 4 сем
        %tbody
            %tr
                %td 1
                %td Экология
                %td
                %td
                %td
                %td
                %td
                %td
                %td 1
                %td 0
                %td 1
                %td
                %td
                %td
            %tr
                %td 2
                %td Высшая математика
                %td 3
                %td 0
                %td 3
                %td 3
                %td 0
                %td 3
                %td 2
                %td 0
                %td 2
                %td
                %td
                %td
            %tr
                %td 3
                %td Русский язык и культура речи
                %td 1
                %td 0
                %td 2
                %td
                %td
                %td
                %td
                %td
                %td
                %td
                %td
                %td
            %tr
                %td 4
                %td Основы дискретной математики
                %td 2
                %td 0
                %td 1
                %td 3
                %td 0
                %td 2
                %td
                %td
                %td
                %td
                %td
                %td
            %tr
                %td 5
                %td Основы программирования и алгоритмические языки
                %td 3
                %td 2
                %td 0
                %td 3
                %td 3
                %td 0
                %td 0
                %td 0
                %td 1
                %td
                %td
                %td
            %tr
                %td 6
                %td Основы экологии
                %td
                %td
                %td
                %td
                %td
                %td
                %td 1
                %td 0
                %td 0
                %td
                %td
                %td
            %tr
                %td 7
                %td Теория вероятностей и математическая статистика
                %td
                %td
                %td
                %td
                %td
                %td
                %td 3
                %td 1
                %td 0
                %td
                %td
                %td
            %tr
                %td 8
                %td Физика
                %td 2
                %td 2
                %td 0
                %td 2
                %td 2
                %td 0
                %td 2
                %td 1
                %td 0
                %td
                %td
                %td
            %tr
                %td 9
                %td Основы электротехники и электроники
                %td
                %td
                %td
                %td
                %td
                %td
                %td 2
                %td 1
                %td 1
                %td
                %td
                %td
            %tr
                %td 10
                %td Численные методы в информатике
                %td
                %td
                %td
                %td
                %td
                %td
                %td 2
                %td 2
                %td 0
                %td 0
                %td 0
                %td 1
            %tr
                %td 11
                %td Методы исследования операций
                %td
                %td
                %td
                %td
                %td
                %td
                %td 1
                %td 1
                %td 0
                %td 2
                %td 1
                %td 1

@endsection