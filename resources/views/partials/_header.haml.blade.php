!!!
%html{:lang => "#{ config('app.locale') }"}
    %head
        %meta{:content => "text/html; charset=UTF-8", "http-equiv" => "Content-Type"}/
        %meta{:charset => "utf-8"}/
        %meta{:content => "IE=edge", "http-equiv" => "X-UA-Compatible"}/
        %meta{:content => "width=device-width, initial-scale=1", :name => "viewport"}/
        / CSRF Token
        %meta{:content => "{{ csrf_token() }}", :name => "csrf-token"}/
        %title {{ config('app.name') }} @yield('title')
        / Bootstrap core CSS
        %link{:href => "#{ asset('css/app.css') }", :rel => "stylesheet"}/
        %link{:href => "#{asset('css/custom.css')}", :rel => "stylesheet"}/
        %link{:bug => "", :for => "", :hack => "", :href => "#{asset('css/jumbotron-narrow.css')}", :ie10 => "", :rel => "stylesheet", :surface => "", :viewport => "", :windows => ""}/
        %link{:href => "#{ asset('css/ie10-viewport-bug-workaround.css') }", :rel => "stylesheet"}/
        / Custom styles for this template
        %link{:href => "#{ asset('css/blog.css') }", :rel => "stylesheet"}/

    %body
        %p
            @yield('stylesheet')
        %nav.navbar-nav.navbar-fixed-top
        .container
            .header
                %ul#nav.nav.nav-pills.text-center
                    %li
                        %a{:href => "#{route('home')}"} Главная страница
                    %li
                        %a{:href => "#{route('blog')}"} Блог
                    %li
                        %a{:href => "#{route('album')}"} Альбом
                    %li
                        %a{:href => "#{route('study')}"} Учеба
                    %li
                        @if (Auth::guest())
                        %li
                            %a.blog-nav-item(class="#{ Request::is('login') ? 'active' : '' }" href=route('login'))
                                Login
                        %li
                            %a.blog-nav-item(class="#{ Request::is('register') ? 'active' : '' }" href=route('register')) Регистрация
                        @else
                        %li.dropdown
                            %a.blog-nav-item.dropdown-toggle{"aria-expanded" => "false", "data-toggle" => "dropdown", :href => "#", :role => "button"}
                                #{ Auth::user()->name }
                                %span.caret
                                @if(Auth::user()->role   === 'admin')
                                %ul.dropdown-menu{:role => "menu"}
                                    %li
                                        %a{:href => "#{ route('posts.index') }"} Все посты
                                    %li
                                        %a{:href => "#{ route('posts.create') }"} Добавить новый
                                    %li
                                        %a{:href => "#{route('importexport')}"} Загрузить из файла
                                    %li
                                        %a{:href => "#{ route('comments.index') }"} Все комментарии
                                    %li
                                        %a admin
                                    @else
                                    %li
                                        %a Non admin
                                    @endif
                                    %li
                                        %a.blog-nav-item{:href => "#{ route('logout') }", :onclick => "event.preventDefault(); document.getElementById('logout-form').submit();"} Logout
                                        %form#logout-form{:action => "#{ route('logout') }", :method => "POST", :style => "display: none;"}
                                        {{ csrf_field() }}
                        @endif
            .container
                .row
                    .col-md-12
                    @if( Session::has('success') )
                    .mt-5.alert.alert-success{:role => "alert"}
                        {{ Session::get('success') }}
                    @endif
