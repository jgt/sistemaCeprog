<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('layouts.PaginaCeprog.Home.css.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body>
        <header class="Header-Container">
            <figure class="Header-Logo">
              <img src="{{ asset('/image/logo.png') }}" >
            </figure>
        </header>

        @include('layouts.PaginaCeprog.Home.conteiner')


        @include('layouts.PaginaCeprog.Home.slider')

        
        @include('layouts.PaginaCeprog.Home.responsive')
        

        @include('layouts.PaginaCeprog.Home.footer')

@section('scripts')
    @include('layouts.PaginaCeprog.Home.js.scripts')
@show

</body>
</html>